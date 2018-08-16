<?php
extract( shortcode_atts( array(
			'el_class' => '',
			'visibility' => ''
		), $atts ) );
?>

<div class="mk-fancy-table <?php echo $el_class; ?> <?php echo $visibility; ?>">
	<?php echo wpb_js_remove_wpautop( $content ); ?>
</div>
