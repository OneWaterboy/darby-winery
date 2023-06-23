<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by defaut.
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

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<div class="locationInfoRow">
					<div class="locationMap">
						<iframe src="<?php echo get_field('woodinville_iframe_link_for_map','option'); ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="tastingLocationInfo">
						<div class="locationInfoTitle">Meet Us</div>
						<div class="tastingRoomDetails">
							<div class="locationdetailsLineItem">
								<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/telephone.png'; ?>" />
								<a class="locationPhone" href="tel:<?php echo get_field('woodinville_link_phone_number' , 'option'); ?>"><?php echo get_field('woodinville_phone_number' , 'option'); ?></a>
							</div>
							<div class="locationdetailsLineItem">
								<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/speech-bubble-with-text-lines.png'; ?>" />
								<a class="locationText" href="sms:<?php get_field('sms_phone_number_wo_seperators','option'); ?>"><?php echo get_field('sms_phone_number','option'); ?></a>
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
					<div class="locationInfoTitle">Taste With Us</div>
					<div class="tastingRoomDetails">
						<div class="locationdetailsLineItem">
							<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/glass-with-wine.png'; ?>" />
							<a class="locationText" href="#woodinvilleTastingList">View Our Tasting List</a>
						</div>
						<div class="locationdetailsLineItem hours">
							<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/clock.png'; ?>" />
							<div class="locationHoursList">
								<?php if( have_rows('woodinville_tasting_room_hours' ,'option') ): ?>
									<?php while( have_rows('woodinville_tasting_room_hours' ,'option') ): the_row(); ?>
											<span class="storeHours"><?php echo the_sub_field('woodinville_hours'); ?></span>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="locationdetailsLineItem">
							<img class="locationDetailsIcon" src="<?php echo get_stylesheet_directory_uri() . '/graphics/calendar.png'; ?>" />
							<a class="locationText" href="/events">Upcoming Events</a>
						</div>
					</div>
					</div>
				</div>
		<div id="woodinvilleTastingList" class="tastingListHeader">
			<div>Current Tasting List For Our Woodinville Location</div>
			<div>Tasting List Subject To Change and is Based on Availability</div>
		</div>
		<div class="tastingFlipCards">
			<?php if ( have_rows('woodinville_tasting_list','option')):
				 while ( have_rows('woodinville_tasting_list','option')): the_row(); ?>
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front" style="<?php if( get_sub_field('wine_type') == 'red'){ echo "background-image: url('/wp-content/themes/darby-winery/graphics/red-wine-grapes.jpg')";} elseif (get_sub_field('wine_type') == 'white'){ echo "background-image: url('/wp-content/themes/darby-winery/graphics/white-wine-grapes.jpg')";} ?>">
								<div class="tastingWineTitle"><?php echo get_sub_field('wine_name'); ?></div>
								<div class="wineVarietals flipCardDetails"><span>Varietals:</span><span> <?php echo get_sub_field('wine_varietals'); ?></span></div>
								<div class="wineVineyard flipCardDetails"><span>Vineyard:</span><span><?php echo get_sub_field('wine_vineyard'); ?></span></div>
								<div class="wineAgingTime flipCardDetails"><span>Aging:</span><span><?php echo get_sub_field('aging_time'); ?></span></div>
								<div class="learnMoreButton flipCardDetails">Learn More</div>
							</div>
								<div class="flip-card-back">
								<div class="tastingWineTitle"><?php echo get_sub_field('wine_name'); ?></div>
								<div class="wineDescritption flipCardDetails"><?php echo get_sub_field('wine_description'); ?></div>
								<div class="foodPairings flipCardDetails"><span>Food Pairings:</span><?php echo get_sub_field('food_pairings'); ?></div>
								<div class="bottle price flipCardDetails"><span>Price Per Bottle: $</span><?php echo get_sub_field('bottle_price'); ?></div>
							</div>
						</div>
					</div> 
				<?php endwhile; ?>
			<?php endif; ?>
		</div>


	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
