<?php
/**
 * Single Event Meta (Venue) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/venue.php
 *
 * @package TribeEventsCalendar
 */

if ( ! tribe_get_venue_id() ) {
	return;
}

$phone   = tribe_get_phone();
$website = tribe_get_venue_website_link();
$website_url = tribe_get_venue_website_url( $post_id );
$fields = get_fields(get_the_ID());
$venue_id = tribe_get_venue_id( $postId );
$venue    = ( $venue_id > 0 ) ? esc_html( get_the_title( $venue_id ) ) : null;

?>

<div class="tribe-events-meta-group tribe-events-meta-group-venue">
	<h3 class="tribe-events-single-section-title"> <?php esc_html_e( tribe_get_venue_label_singular(), 'the-events-calendar' ) ?> </h3>
	<dl>
		<?php do_action( 'tribe_events_single_meta_venue_section_start' ) ?>

		<dd class="tribe-venue"> 
			<?php if (strlen($website_url) > 0): ?>
				<a href="<?php echo $website_url ?>" target="_blank"><?php echo $venue ?></a> 
			<?php else: ?>
				<?php echo $venue; ?>
			<?php endif; ?>	
		</dd>

		<?php if ( tribe_address_exists() ) : ?>
			<dd class="tribe-venue-location">
				<address class="tribe-events-address">
					<?php echo tribe_get_full_address(); ?>

					<?php if ( tribe_show_google_map_link() ) : ?>
						<?php echo tribe_get_map_link_html(); ?>
					<?php endif; ?>
				</address>
			</dd>
		<?php endif; ?>

		<?php if ( ! empty( $phone ) ): ?>
			<dt> <?php esc_html_e( 'Phone:', 'the-events-calendar' ) ?> </dt>
			<dd class="tribe-venue-tel"> <?php echo $phone ?> </dd>
		<?php endif ?>

		<?php if ( ! empty( $website ) ): ?>
			<dt> <?php esc_html_e( 'Website:', 'the-events-calendar' ) ?> </dt>
			<dd class="url"> <?php echo $website ?> </dd>
		<?php endif ?>

		<?php do_action( 'tribe_events_single_meta_venue_section_end' ) ?>
	</dl>
</div>
<?php if(isset($fields['registration_info'])) { ?>
<div class="tribe-events-meta-group tribe-events-meta-group-venue">
	<h3 class="tribe-events-single-section-title">Registration Information</h3>
	<dl id="registration-info">
		<dd><?php echo $fields['registration_info']; ?></dd>
	</dl>
</div>
<?php } ?>