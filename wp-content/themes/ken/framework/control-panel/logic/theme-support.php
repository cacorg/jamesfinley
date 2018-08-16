<div class="control-panel-holder">

	<?php echo mk_get_control_panel_view('header', true, array('page_slug' => 'theme-support')); ?>

	<div class="support-page cp-pane">
			<h3>Learn & Support</h3>
			<?php echo mk_get_control_panel_view('register-product-popup', true, array('message' => 'In order to access our Help desk and submit a ticket you need to register this product first.<br> <a target="_blank" href="https://themes.artbees.net/docs/how-to-register-theme/">Learn how to register</a>')); ?>
			<div class="cp-support">
				<a class="cp-support-title" href="https://themes.artbees.net/support/ken/docs" target="_blank"><?php _e('Documentation', 'mk_framework'); ?></strong></a>
				<p>Read helpful resources regarding how to use The ken more efficiantly.</p>
			</div>

			<div class="cp-support">
				<a class="cp-support-title" href="https://themes.artbees.net/support/ken/videos" target="_blank"><?php _e('Video Tutorials', 'mk_framework'); ?></a>
				<p>Watch tons of narrated video tutorials.  </p>
			</div>

			<div class="cp-support">
				<a class="cp-support-title" href="https://themes.artbees.net/support/ken/faq" target="_blank"><?php _e('FAQ', 'mk_framework'); ?></a>
				<p>The most frequent asked questions are answered here.</p>
			</div>

			<div class="cp-support">
				<a class="cp-support-title" href="https://themes.artbees.net/support/ken" target="_blank"><?php _e('Ask our experts', 'mk_framework'); ?></a>
				<p>Any question that is not addressed on documentations? Ask it from Artbees experts. Note that you need to register to be able to submit a new ticket.</p>
				<a href="https://themes.artbees.net/support/<?php echo strtolower(THEME_NAME); ?>" target="_blank" class="cp-button medium blue">Submit a Ticket</a>
			</div>
			
			<div class="cp-support">
				<a class="cp-support-title" href="http://forums.artbees.net/c/the-ken" target="_blank"><?php _e('Join Community', 'mk_framework'); ?></a>
				<p>Join the Artbees themes community. It is a cool and cozy place! Help people and get help.</p>
			</div>

			<div class="cp-support">
				<a class="cp-support-title" href="https://themes.artbees.net/artbees-care" target="_blank"><?php _e('Customise The Ken', 'mk_framework'); ?></a>
				<p>Have any more customization beyond what The Ken offers? Artbees experts are here to help. </p>
				<a href="http://themes.artbees.net/artbees-care" target="_blank" class="cp-button medium blue">Hire Our Experts</a>
			</div>
		
	</div>
</div>