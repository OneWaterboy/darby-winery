<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>
		<div class="locationInfoRow">
		<div class="tastingLocationInfo">
				<div class="locationInfoTitle">General Inquiries</div>
				<div class="tastingRoomDetails">
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/telephone.png'; ?>" />
						<a class="locationPhone" href="tel:<?php echo get_field('sms_phone_number_wo_seperators','option'); ?>"><?php echo get_field('sms_phone_number','option'); ?></a>
					</div>
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/speech-bubble-with-text-lines.png'; ?>" />
						<a class="locationText" href="sms:<?php echo get_field('sms_phone_number_wo_seperators','option'); ?>"><?php echo get_field('sms_phone_number','option'); ?></a>
					</div>
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/arroba.png'; ?>" />
						<a class="locationText" href="mailto:<?php echo get_field('main_email_address','option'); ?>"><?php echo get_field('main_email_address','option'); ?></a>
					</div>
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/arroba.png'; ?>" />
						<a class="locationText" href="#forminator-module-4170">Inquire About Space Rentals</a>
					</div>
				</div>
			</div>
			<div class="tastingLocationInfo">
				<div class="locationInfoTitle">Contact Woodinville</div>
				<div class="tastingRoomDetails">
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/telephone.png'; ?>" />
						<a class="locationPhone" href="tel:<?php echo get_field('woodinville_link_phone_number' , 'option'); ?>"><?php echo get_field('woodinville_phone_number' , 'option'); ?></a>
					</div>
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/speech-bubble-with-text-lines.png'; ?>" />
						<a class="locationText" href="sms:<?php echo get_field('sms_phone_number_wo_seperators','option'); ?>"><?php echo get_field('sms_phone_number','option'); ?></a>
					</div>
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/arroba.png'; ?>" />
						<a class="locationText" href="mailto:<?php echo get_field('main_email_address','option'); ?>"><?php echo get_field('main_email_address','option'); ?></a>
					</div>
					<div class="locationdetailsLineItem address">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/location.png'; ?>" />
						<a class="locationText" target="_blank" href="<?php echo get_field('woodinville_tasting_room_address' , 'option'); ?>"><?php echo get_field('woodinville_tasting_room_address','option'); ?></a>
					</div>
				</div>
			</div>
			<div class="tastingLocationInfo">
				<div class="locationInfoTitle">Contact Seattle</div>
				<div class="tastingRoomDetails">
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/telephone.png'; ?>" />
						<a class="locationPhone" href="tel:<?php echo get_field('seattle_link_phone_number' , 'option'); ?>"><?php echo get_field('seattle_phone_number' , 'option'); ?></a>
					</div>
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/speech-bubble-with-text-lines.png'; ?>" />
						<a class="locationText" href="sms:<?php echo get_field('sms_phone_number_wo_seperators','option'); ?>"><?php echo get_field('sms_phone_number','option'); ?></a>
					</div>
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/arroba.png'; ?>" />
						<a class="locationText" href="mailto:<?php echo get_field('main_email_address','option'); ?>"><?php echo get_field('main_email_address','option'); ?></a>
					</div>
					<div class="locationdetailsLineItem">
						<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/location.png'; ?>" />
						<a class="locationText" target="_blank" href="<?php echo get_sub_field('seattle_tasting_room_address' , 'option'); ?>"><?php echo get_field('seattle_tasting_room_address','option'); ?></a>
					</div>
				</div>
			</div>
		</div>

		<div class="contact-form">
			<div class="form-title">Need to Contact Us? Looking for a space rental?</div>
			<div class="form-sub-title">Fill out the form below and we will contact you soon!</div>
			<?php echo do_shortcode('[forminator_form id="4170"]'); ?>
		</div>
		
	</div><!-- #primary -->

<?php get_footer(); ?>
