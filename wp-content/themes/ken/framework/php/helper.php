<?php
if (!defined('THEME_FRAMEWORK')) exit('No direct script access allowed');

/**
 * Helper functions for various parts of the theme
 *
 * @author      Bob Ulusoy
 * @copyright   Artbees LTD (c)
 * @link        http://artbees.net
 * @since       Version 3.5
 * @package     artbees
 */



function get_header_height() {

	global $mk_settings;

	$logo_height = (!empty($mk_settings['logo']['height'])) ? $mk_settings['logo']['height'] : 50;

	return $logo_height + ($mk_settings['header-padding'] * 2);

}



function get_typekit_font_style(){

	global $mk_settings;
	
	$id = !empty($mk_settings['typekit-id']) ? $mk_settings['typekit-id'] : '';
	$elements_list = !empty($mk_settings['typekit-element-names']) ? $mk_settings['typekit-element-names'] : '';
	$font_family = !empty($mk_settings['typekit-font-family']) ? $mk_settings['typekit-font-family'] : '';

	if (!empty($id) && !empty($elements_list) && !empty($font_family)) {
		if (is_array($elements_list)) {
			$elements_list = implode(', ', $elements_list);
		} else {
			$elements_list = $elements_list;
		}
		return $elements_list . ' {font-family: "' . $font_family . '"}';
	}
}



function mk_head_hook(){
	global $mk_shortcode_order, $is_header_shortcode_added;

}

add_action('wp_head', 'mk_head_hook', 1);



/**
 * Collect Shortcode dynamic styles and using javascript inject them to <head>
 */
if (!function_exists('mk_dynamic_styles')) {
    function mk_dynamic_styles() {
	global $app_dynamic_styles;
	
	$post_id = global_get_post_id();

	$saved_styles = get_post_meta($post_id, '_dynamic_styles', true);
	
	$saved_styles_build = get_post_meta($post_id, '_theme_options_build', true);
	$theme_option_build = get_option(THEME_OPTIONS_BUILD);

	$styles =  unserialize(base64_decode(get_post_meta($post_id, '_dynamic_styles', true)));

	if (empty($styles)) {
		$css = '';
		if(is_array($app_dynamic_styles) && !empty($app_dynamic_styles)) {
	        foreach ($app_dynamic_styles as $style) {
	            $css .= $style['inject'];
	        }
    	}
        $css = preg_replace('/\r|\n|\t/', '', $css);
        echo "<style type='text/css'>" . $css . "</style>";
    }

	if(empty($saved_styles) || $saved_styles_build != $theme_option_build) {
		update_post_meta($post_id, '_dynamic_styles', base64_encode(serialize(($app_dynamic_styles))));
		update_post_meta($post_id, '_theme_options_build', $theme_option_build);
	}
    }
    
    //Apply custom styles before runing other javascripts as they might be based on those styles as well. So setting priority as one!
    add_action('wp_footer', 'mk_dynamic_styles', 1);
}



/**
 * Generate gradient angles based on the options provided
 * @return angles   array
 */

if (!function_exists('mk_gradient_option_parser')) {
    
    function mk_gradient_option_parser($style, $angle) {
        $output = array();
        if ($style == 'linear') {
            $output['type'] = $style;
            switch ($angle) {
                case 'vertical':
                    $output['angle_1'] = 'top,';
                    $output['angle_2'] = 'to bottom,';
                    $output['name'] = 'vertical';
                    break;

                case 'horizontal':
                    $output['angle_1'] = 'left,';
                    $output['angle_2'] = 'to right,';
                    $output['name'] = 'horizontal';
                    break;

                case 'diagonal_left_bottom':
                    $output['angle_1'] = 'top left,';
                    $output['angle_2'] = 'to bottom right,';
                    $output['name'] = 'diagonal_left_bottom';
                    break;

                case 'diagonal_left_top':
                    $output['angle_1'] = 'bottom left,';
                    $output['angle_2'] = 'to top right,';
                    $output['name'] = 'diagonal_left_top';
                    break;
            }
        } 
        else if ($style == 'radial') {
            $output['type'] = $style;
            $output['angle_1'] = '';
            $output['angle_2'] = '';
        }
        return $output;
    }
}


if (!function_exists('is_gradient_stop_transparent')) {
    function is_gradient_stop_transparent($color) {
        if (strpos($color, 'rgba') !== false) {
            $var = $color;
            $var = str_replace('rgba(', '', $var);
            $var = str_replace(')', '', $var);
            $var = explode(',', $var);

            if(floatval($var[3]) > 0.05) {
                return false;
            } else {
                return true;
            }

        } else {
            return false;
        }
    }
}



/**
 * 
 * MailChimp API operations
 *
 * @copyright   ArtbeesLTD (c)
 * @link        http://artbees.net
 * @since       Version 4.0
 * @package     artbees
 * @author      Mucahit Yilmaz & Ugur Mirza Zeyrek
 */



class MK_MailChimp
{
    private $api_key = "";
    private $datacenter = "";
    private $api_version = "";
    private $api_endpoint = "";
    private $format = "";
    private $verify_ssl = false;
    private $user_agent = "";
    private $debug = false;

    function __construct($api_key)
    {
        $this->api_key = $api_key;
        if ( strlen(substr( strrchr($api_key, '-'), 1 ))) {
        $this->datacenter = substr( strrchr($api_key, '-'), 1 );
        } else {
        $this->datacenter = "us1";
        }
        $this->api_version = "2.0";
        $this->api_endpoint = "https://".$this->datacenter.".api.mailchimp.com/".$this->api_version."/";
        $this->format = "json";
        $this->verify_ssl = false;
        $this->user_agent = "Jupiter-Mailing/1.0";
    }

    /**
     *  
     *  Runs API query
     *
     *  @param $query - string - endpoint and parameters. like "lists/subscribe"
     *  @param $data - array - the data which'll be posted. must NOT be json decoded!
     *  @param $data - array - optional - curl query timeout in seconds
     *
     *  @return array - API response
     */
    private function rest($query, $data = array(), $timeout = 10)
    {
        if (!function_exists('curl_init')) {
            $result = array(
                    'status' => true,
                    'name' => 'curl_package_disabled'
                );

            return $result;
        }
        
        $url = $this->api_endpoint.$query.".".$this->format;

        $data['apikey'] = $this->api_key;

        $header[] = "Content-type: application/json";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        $jsondata = json_encode($data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->verify_ssl);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->user_agent);

        $result = curl_exec($ch);

        if($this->debug){
            echo "<pre>result:<br>";
            print_r(json_decode($result,true));
            echo "<br>curlinfo:<br>";
            print_r(curl_getinfo($ch));
            echo "</pre>";
        }

        curl_close($ch);

        return json_decode($result,true);
    }

    /**
     *
     *  Subscribes the email address to the given list
     *
     *  @param  $email - string
     *  @param  $list_id - string - sth like "6edd80a499"
     *  @param  $first_name - string - optional
     *  @param  $last_name - string - optional
     *  @param  $optin - boolean - optional
     *
     *  @return $result - array
     */
    public function subscribe($email,$list_id, $optin = false)
    {
        $data = array(
            "id" => $list_id,
            "email" => array(
                "email" => $email
            ),
            "merge_vars" => array(
                "FNAME" => "",
                "LNAME" => "",
            ),
            "double_optin" => $optin,
            "send_welcome" => $optin
        );

        return $this->rest("lists/subscribe",$data,20);
    }

    /**
     *
     *  Unsubscribes the email address to the given list
     *
     *  @param  $email - string
     *  @param  $list_id - string - sth like "6edd80a499"
     *  @param  $optout - boolean - optional
     *
     *  @return $result - array
     */
    public function unsubscribe($email,$list_id,$optout = false)
    {
        $data = array(
            "id" => $list_id,
            "email" => array(
                "email" => $email
            ),
            "send_goodbye" => $optout,
            "send_notify" => $optout
        );

        return $this->rest("lists/unsubscribe",$data);
    }

    /**
     *
     *  Lists lists o_O
     *
     *  @param  $list_id - string - sth like "6edd80a499"
     *
     *  @return $result - array
     */
    public function get_lists($list_id = "")
    {
        $data = array(
            "filters" => array(
                "list_id" => $list_id,
            ),
        );

        return $this->rest("lists/list",$data,20);
    }
}







/**
 * Class to for MailChimp operations using ajax
 *
 * @author      Mucahit Yilmaz
 * @copyright   Artbees LTD (c)
 * @link        http://artbees.net
 * @version     4.0
 * @package     artbees
 */

class Mk_Ajax_Subscribe
{

    public function __construct()
    {
        add_action('wp_ajax_nopriv_mk_ajax_subscribe', array(&$this,
            'subscribe_to_list',
        ));
        add_action('wp_ajax_mk_ajax_subscribe', array(&$this,
            'subscribe_to_list',
        ));
    }

    public function subscribe_to_list()
    {

        $email   = stripslashes($_POST['email']);
        $list_id = stripslashes($_POST['list_id']);
        $optin   = stripslashes($_POST['optin']);

        $result = $this->subscribe($email, $list_id, $optin);

        if (empty($result['status']) == false)
        {
            switch ($result['name'])
            {
                case 'Invalid_ApiKey':
                    echo json_encode(
                        array(
                            'action_status' => false,
                            'message'       => $result['error'],
                        )
                    );
                    break;
                case 'List_DoesNotExist':
                    echo json_encode(
                        array(
                            'action_status' => false,
                            'message'       => $result['error'],
                        )
                    );
                    break;
                case 'ValidationError':
                    echo json_encode(
                        array(
                            'action_status' => false,
                            'message'       => __('Oops! Enter a valid Email address', 'mk_framework'),
                        )
                    );
                    break;

                case 'List_AlreadySubscribed':
                    echo json_encode(
                        array(
                            'action_status' => false,
                            'message'       => __('This email already subscribed to the list.', 'mk_framework'),
                        )
                    );
                    break;

                case 'curl_package_disabled':
                    echo json_encode(
                        array(
                            'action_status' => false,
                            'message'       => __('Curl is disabled. Please enable curl in server php.ini settings.', 'mk_framework'),
                        )
                    );
                    break;
            }
        }
        elseif (isset($result['email']))
        {
            echo json_encode(
                array(
                    'action_status' => true,
                    'message'       => $result['email'] . __(' has been subscribed.', 'mk_framework'),
                )
            );
        }
        wp_die();
    }

    private function subscribe($email, $list_id, $optin)
    {

        $path    = pathinfo(__FILE__);
        $dirname = $path['dirname'];

        global $mk_settings;

        $mailchimp = new MK_MailChimp( trim( $mk_settings['mailchimp_api_key'] ) );

        // return $mailchimp->get_lists();
        return $mailchimp->subscribe($email, $list_id, $optin);
    }
}

new Mk_Ajax_Subscribe();




/**
 * Generate shape divider tag for page section shortcode
 * @return  Shape divider html tags   string
 * @author  Hossein Hashemi
 * @since   Version 4.0
 */
function shape_divider_provider($style, $shape_size, $shape_color, $shape_bg_color, $shape_el_class, $shape_pos){

    $id = Mk_Static_Files::shortcode_id();
    
    //$is_top = ($shape_pos == 'top')? true : false;
    if(isset($shape_pos) && $shape_pos == 'top'){
        $is_top = true;
    }else{
        $is_top = false;
    }

    $stickClass = ($is_top) ? 'mk-shape-divider--stick-top' : 'mk-shape-divider--stick-bottom';




    $shape_class = "";
    $size = $shape_size;
    $shape_class .= $style . '-style ';
    $shape_class .= $size . '-size ';
    $shape_class .= $shape_el_class . ' ';
    $shape_class .= $stickClass . ' ';
    $shape_bg_color = $shape_bg_color !== '' ? $shape_bg_color : 'transparent';
    $shape_color = $shape_color !== '' ? $shape_color : 'transparent';
    $pattern_path = $pattern_width = $pattern_width_viewbox = $pattern_height = '';
    if ($style == 'diagonal-bottom') {
        if ($size == 'small') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="100,70 100,0 0,70 "/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '70';
        } else if ($size == 'big') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="100,0 100,130 0,130 "/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '130';
        }
    } else if ($style == 'diagonal-top') {
        if ($size == 'small') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="0,0 0,70 100,0 "/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '70';
        } else if ($size == 'big') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="0,130 0,0 100,0 "/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '130';
        }
    } else if ($style == 'jagged-bottom') {
        if ($size == 'small') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="10.5,5 5.497,0 0.5,4.994 "/>';
            $pattern_width = '11px';
            $pattern_width_viewbox = '11';
            $pattern_height = '5';
        } else if ($size == 'big') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="20.501,10 10.495,0 0.5,9.989 "/>';
            $pattern_width = '21px';
            $pattern_width_viewbox = '21';
            $pattern_height = '10';
        }
    } else if ($style == 'jagged-top') {
        if ($size == 'small') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="0.5,0 10.5,0 5.5,5 "/>';
            $pattern_width = '11px';
            $pattern_width_viewbox = '11';
            $pattern_height = '5';
        } else if ($size == 'big') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="0.5,0 10.506,10 20.501,0.011 "/>';
            $pattern_width = '21px';
            $pattern_width_viewbox = '21';
            $pattern_height = '10';
        }
    } else if ($style == 'jagged-rounded-bottom') {
        if ($size == 'small') {
            $pattern_path = '<path fill="' . $shape_color . '" d="M2.244,1.344C1.615,0.55,0.893,0.07,0,0.07V3h7V0.07c-0.894,0-1.614,0.48-2.243,1.274C4.023,2.269,2.977,2.269,2.244,1.344"/>';
            $pattern_width = '7px';
            $pattern_width_viewbox = '7';
            $pattern_height = '3';
        } else if ($size == 'big') {
            $pattern_path = '<path fill="' . $shape_color . '" d="M5.944,3.146C4.415,1.213,2.174,0,0,0v6h18V0c-2.175,0-4.414,1.213-5.944,3.146C10.271,5.397,7.729,5.397,5.944,3.146"/>';
            $pattern_width = '18px';
            $pattern_width_viewbox = '18';
            $pattern_height = '6';
        }
    } else if ($style == 'jagged-rounded-top') {
        if ($size == 'small') {
            $pattern_path = '<path fill="' . $shape_color . '" d="M4.755,1.656C5.384,2.451,6.107,2.93,7,2.93V0H0v2.93c0.894,0,1.614-0.48,2.243-1.274C2.976,0.731,4.023,0.731,4.755,1.656"/>';
            $pattern_width = '7px';
            $pattern_width_viewbox = '7';
            $pattern_height = '3';
        } else if ($size == 'big') {
            $pattern_path = '<path fill="' . $shape_color . '" d="M12.056,2.855C13.586,4.788,15.826,6,18,6V0H0v6c2.175,0,4.414-1.213,5.944-3.146C7.729,0.604,10.271,0.604,12.056,2.855" />';
            $pattern_width = '18px';
            $pattern_width_viewbox = '18';
            $pattern_height = '6';
        }
    } else if ($style == 'folded-bottom') {
        if ($size == 'small') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="0,0 0,84 50,84 100,84 100,0 50,84 "/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '85';
        } else if ($size == 'big') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="0,0 0,130 50,130 "/><polygon fill="' . $shape_color . '" points="100,0 100,130 50,130 "/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '130';
        }
    } else if ($style == 'folded-top') {
        if ($size == 'small') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="100,85 100,0 50,0 "/><polygon fill="' . $shape_color . '" points="0,85 0,0 50,0 "/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '85';
        } else if ($size == 'big') {
            $pattern_path = '<polygon fill="' . $shape_color . '" points="100,130 100,0 50,0 "/><polygon fill="' . $shape_color . '" points="0,130 0,0 50,0 "/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '130';
        }
    } else if ($style == 'curve-bottom') {
        if ($size == 'small') {
            $pattern_path = '<path fill="' . $shape_color . '" d="M0,0v30h100V0c0,0,0,28-50,28S0,0,0,0z"/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '30';
        } else if ($size == 'big') {
            $pattern_path = '<path fill="' . $shape_color . '" d="M0,0v80h100V0c0,0,0,78-50,78S0,0,0,0z"/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '80';
        }
    } else if ($style == 'curve-top') {
        if ($size == 'small') {
            $pattern_path = '<path fill="' . $shape_color . '" d="M100,30V0H0v30C0,30,0,2,50,2S100,30,100,30z"/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '30';
        } else if ($size == 'big') {
            $pattern_path = '<path fill="' . $shape_color . '" d="M100,80V0H0v80C0,80,0,2,50,2S100,80,100,80z"/>';
            $pattern_width = '100%';
            $pattern_width_viewbox = '100';
            $pattern_height = '80';
        }
    }

    if ($style !== 'speech-bottom' && $style !== 'speech-top') {
        $shape_svg = '
            <svg width="100%" height="' . $pattern_height . 'px">
                <defs>
                    <pattern id="shapeDividerPattern-' . $id . '" preserveAspectRatio="none" style="background-repeat: none;" patternUnits="userSpaceOnUse" x="0" y="0" width="' . $pattern_width . '" height="' . $pattern_height . '0px" viewBox="0 0 ' . $pattern_width_viewbox . ' ' . $pattern_height . '0" >
                        ' . $pattern_path . '
                    </pattern>
                </defs>

                <!-- Background -->
                <rect x="0" y="0" width="100%" height="' . $pattern_height . 'px" fill="url(#shapeDividerPattern-' . $id . ')" />
            </svg>
        ';
    } else {
        $shape_svg = '
            <div class="speech-left"></div><div class="speech-right"></div>
            <div class="clearfix"></div>
        ';
    }

    $shape_divider_output = '<div data-istop="['.$is_top.'] - ['.$stickClass.']" id="mk-shape-divider-'.$id.'" class="mk-shape-divider mk-shape-divider--stick '. $shape_class.'">
                <div class="shape__container">
                    <div class="shape">'. $shape_svg .'
                    </div>
                </div>
            </div>';


    /**
     * Custom CSS Output
     * ================================================================================== */
    Mk_Static_Files::addCSS('
        #mk-shape-divider-' . $id . ' .shape__container {
            background-color: ' . $shape_bg_color . ';
        }
        /* @-moz-document url-prefix() { */
            #mk-shape-divider-' . $id . ' .shape__container .shape {
                overflow: hidden;
                height: ' . $pattern_height . 'px;
            }
        /* } */
     ', $id);

    if ($is_top == true) {
        Mk_Static_Files::addCSS('
            /* @-moz-document url-prefix() { */
                #mk-shape-divider-' . $id . ' .shape__container .shape svg {
                    position: relative;
                    top: -0.6px;
                }
            /* } */
        ', $id);
    } else {
        Mk_Static_Files::addCSS('
            /* @-moz-document url-prefix() { */
                #mk-shape-divider-' . $id . ' .shape__container .shape svg {
                    position: relative;
                    top: 0.6px;
                }
            /* } */
        ', $id);
    }

    if ($style == 'speech-bottom' || $style == 'speech-top') {
        Mk_Static_Files::addCSS('
            #mk-shape-divider-' . $id . ' .shape__container .shape .speech-left,
            #mk-shape-divider-' . $id . ' .shape__container .shape .speech-right {
                background-color: ' . $shape_color . ';
            }
        ', $id);
    }

    return $shape_divider_output;
}