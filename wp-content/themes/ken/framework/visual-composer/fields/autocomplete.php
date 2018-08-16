<?php
if (!defined('THEME_FRAMEWORK')) {
    exit('No direct script access allowed');
}

/**
 * Add Range Option to Visual Composer Params
 *
 * @author      Bob Ulusoy
 * @copyright   Artbees LTD (c)
 * @link        http://artbees.net
 * @since       Version 4.0
 * @package     artbees
 */

/**
 * Suggester for autocomplete by id/title for blog posts
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_blog_post_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'post' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_blog_posts_callback', 'mk_blog_post_autocomplete_suggester', 10, 1);

/**
 * Suggester for autocomplete by id/title for portfolio posts
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_portfolio_post_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'portfolio' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_portfolio_posts_callback', 'mk_portfolio_post_autocomplete_suggester', 10, 1);

/**
 * Suggester for autocomplete by id/title for Testimonials
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_testimonials_post_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'testimonial' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_testimonials_testimonials_callback', 'mk_testimonials_post_autocomplete_suggester', 10, 1);

/**
 * Suggester for autocomplete by id/title for Clients
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_clients_post_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'clients' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_clients_clients_callback', 'mk_clients_post_autocomplete_suggester', 10, 1);

/**
 * Suggester for autocomplete by id/title for Edge Slider
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_edge_post_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'edge' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_edge_one_pager_slides_callback', 'mk_edge_post_autocomplete_suggester', 10, 1);
add_filter('vc_autocomplete_mk_edge_slider_slides_callback', 'mk_edge_post_autocomplete_suggester', 10, 1);

/**
 * Suggester for autocomplete by id/title for Employees
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_employees_post_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'employees' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_employees_employees_callback', 'mk_employees_post_autocomplete_suggester', 10, 1);

/**
 * Suggester for autocomplete by id/title for Porducts
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_products_posts_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'product' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_products_posts_callback', 'mk_products_posts_autocomplete_suggester', 10, 1);
add_filter('vc_autocomplete_mk_woocommerce_recent_carousel_posts_callback', 'mk_products_posts_autocomplete_suggester', 10, 1);

/**
 * Suggester for autocomplete by id/title for Animated Columns
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_animated_columns_post_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'animated-columns' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_animated_columns_columns_callback', 'mk_animated_columns_post_autocomplete_suggester', 10, 1);

/**
 * Suggester for autocomplete by id/title for Tab Slider
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_tab_slider_post_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'tab_slider' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_tab_slider_slides_callback', 'mk_tab_slider_post_autocomplete_suggester', 10, 1);

/**
 * Suggester for autocomplete by id/title for Pricing Table
 * @since 4.0
 *
 * @param $query
 *
 * @return array - post title.
 */
function mk_pricing_table_post_autocomplete_suggester($query)
{
    global $wpdb;
    $post_id      = (int) $query;
    $post_results = $wpdb->get_results($wpdb->prepare("SELECT a.ID AS id, a.post_title AS title FROM {$wpdb->posts} AS a
                WHERE a.post_type = 'pricing' AND a.post_status != 'trash' AND ( a.ID = '%d' OR a.post_title LIKE '%%%s%%' )", $post_id > 0 ? $post_id : -1, stripslashes($query), stripslashes($query)), ARRAY_A);

    $results = array();
    if (is_array($post_results) && !empty($post_results)) {
        foreach ($post_results as $value) {
            $data          = array();
            $data['value'] = $value['id'];
            $data['label'] = $value['title'];
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_pricing_table_tables_callback', 'mk_pricing_table_post_autocomplete_suggester', 10, 1);

/**
 * Find post by id
 * @since 4.0
 *
 * @param $query
 *
 * @return bool|array
 */
function mk_post_autocomplete_suggester_render($query)
{
    $query = trim($query['value']); // get value from requested
    if (!empty($query)) {

        $post_object = get_post((int) $query);
        if (is_object($post_object)) {
            $post_title = $post_object->post_title;
            $post_id    = $post_object->ID;

            $data          = array();
            $data['value'] = $post_id;
            $data['label'] = $post_title;

            return !empty($data) ? $data : false;
        }

        return false;
    }

    return false;
}

add_filter('vc_autocomplete_mk_blog_posts_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_portfolio_posts_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_clients_clients_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_edge_one_pager_slides_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_edge_slider_slides_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_employees_employees_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_pricing_table_tables_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_products_posts_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_tab_slider_slides_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_testimonials_testimonials_render', 'mk_post_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_animated_columns_columns_render', 'mk_post_autocomplete_suggester_render', 10, 1);

/**
 * Suggester for term autocomplete by name for category taxonomy
 * @since 4.0
 *
 * @param $query
 *
 * @return array - term id and term name
 */
function mk_term_category_autocomplete_suggester($query)
{
    $term_results = get_terms('category', array('name__like' => $query));

    $results = array();
    if (is_array($term_results) && !empty($term_results)) {
        foreach ($term_results as $value) {
            $data          = array();
            $data['value'] = $value->term_id;
            $data['label'] = $value->name;
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_blog_cat_callback', 'mk_term_category_autocomplete_suggester', 10, 1);
add_filter('vc_autocomplete_mk_blog_teaser_slideshow_cat_callback', 'mk_term_category_autocomplete_suggester', 10, 1);
add_filter('vc_autocomplete_mk_blog_teaser_side_thumb_cat_callback', 'mk_term_category_autocomplete_suggester', 10, 1);

/**
 * Render category by id for cagegory taxonomy
 * @since 4.0
 *
 * @param $query
 *
 * @return bool|array
 */
function mk_term_category_autocomplete_suggester_render($query)
{
    $query = trim($query['value']); // get value from requested
    if (!empty($query)) {

        $term_object = get_term_by('id', (int) $query, 'category');
        if (is_object($term_object)) {
            $term_id   = $term_object->term_id;
            $term_name = $term_object->name;

            $data          = array();
            $data['value'] = $term_id;
            $data['label'] = $term_name;

            return !empty($data) ? $data : false;
        }

        return false;
    }

    return false;
}

add_filter('vc_autocomplete_mk_blog_cat_render', 'mk_term_category_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_blog_teaser_slideshow_cat_render', 'mk_term_category_autocomplete_suggester_render', 10, 1);
add_filter('vc_autocomplete_mk_blog_teaser_side_thumb_cat_render', 'mk_term_category_autocomplete_suggester_render', 10, 1);

/**
 * Suggester for term autocomplete by name for portfolio_category taxonomy
 * @since 4.0
 *
 * @param $query
 *
 * @return array - term id and term name
 */
function mk_term_portfolio_category_autocomplete_suggester($query)
{
    $term_results = get_terms('portfolio_category', array('name__like' => $query));

    $results = array();
    if (is_array($term_results) && !empty($term_results)) {
        foreach ($term_results as $value) {
            $data          = array();
            $data['value'] = $value->slug;
            $data['label'] = $value->name;
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_portfolio_categories_callback', 'mk_term_portfolio_category_autocomplete_suggester', 10, 1);

/**
 * Render category by slug for portfolio_cagegory taxonomy
 * @since 4.0
 *
 * @param $query
 *
 * @return bool|array
 */
function mk_term_portfolio_category_autocomplete_suggester_render($query)
{
    $query = trim($query['value']); // get value from requested
    if (!empty($query)) {

        $term_object = get_term_by('slug', $query, 'portfolio_category');
        if (is_object($term_object)) {
            $term_slug = $term_object->slug;
            $term_name = $term_object->name;

            $data          = array();
            $data['value'] = $term_slug;
            $data['label'] = $term_name;

            return !empty($data) ? $data : false;
        }

        return false;
    }

    return false;
}

add_filter('vc_autocomplete_mk_portfolio_categories_render', 'mk_term_portfolio_category_autocomplete_suggester_render', 10, 1);

/**
 * Suggester for term autocomplete by name for employees_category taxonomy
 * @since 4.0
 *
 * @param $query
 *
 * @return array - term id and term name
 */
function mk_term_employees_category_autocomplete_suggester($query)
{
    $term_results = get_terms('employees_category', array('name__like' => $query));

    $results = array();
    if (is_array($term_results) && !empty($term_results)) {
        foreach ($term_results as $value) {
            $data          = array();
            $data['value'] = $value->slug;
            $data['label'] = $value->name;
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_employees_categories_callback', 'mk_term_employees_category_autocomplete_suggester', 10, 1);

/**
 * Render category by slug for employees_cagegory taxonomy
 * @since 4.0
 *
 * @param $query
 *
 * @return bool|array
 */
function mk_term_employees_category_autocomplete_suggester_render($query)
{
    $query = trim($query['value']); // get value from requested
    if (!empty($query)) {

        $term_object = get_term_by('slug', $query, 'employees_category');
        if (is_object($term_object)) {
            $term_slug = $term_object->slug;
            $term_name = $term_object->name;

            $data          = array();
            $data['value'] = $term_slug;
            $data['label'] = $term_name;

            return !empty($data) ? $data : false;
        }

        return false;
    }

    return false;
}

add_filter('vc_autocomplete_mk_employees_categories_render', 'mk_term_employees_category_autocomplete_suggester_render', 10, 1);

/**
 * Suggester for term autocomplete by name for product_cat taxonomy
 * @since 4.0
 *
 * @param $query
 *
 * @return array - term id and term name
 */
function mk_term_product_category_autocomplete_suggester($query)
{
    $term_results = get_terms('product_cat', array('name__like' => $query));

    $results = array();
    if (is_array($term_results) && !empty($term_results)) {
        foreach ($term_results as $value) {
            $data          = array();
            $data['value'] = $value->slug;
            $data['label'] = $value->name;
            $results[]     = $data;
        }
    }

    return $results;
}

add_filter('vc_autocomplete_mk_products_category_callback', 'mk_term_product_category_autocomplete_suggester', 10, 1);
add_filter('vc_autocomplete_mk_woocommerce_recent_carousel_category_callback', 'mk_term_product_category_autocomplete_suggester', 10, 1);

/**
 * Render category by slug for product_cat taxonomy
 * @since 4.0
 *
 * @param $query
 *
 * @return bool|array
 */
function mk_term_product_category_autocomplete_suggester_render($query)
{
    $query = trim($query['value']); // get value from requested
    if (!empty($query)) {

        $term_object = get_term_by('slug', $query, 'product_cat');
        if (is_object($term_object)) {
            $term_slug = $term_object->slug;
            $term_name = $term_object->name;

            $data          = array();
            $data['value'] = $term_slug;
            $data['label'] = $term_name;

            return !empty($data) ? $data : false;
        }

        return false;
    }

    return false;
}

add_filter('vc_autocomplete_mk_products_category_render', 'mk_term_product_category_autocomplete_suggester_render', 10, 1);
