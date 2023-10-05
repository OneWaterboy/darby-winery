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

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>
		<div class="homepageIntroText" >
			<?php echo get_field('homepage_welcome_header','option'); ?>
			<?php echo get_field('homepage_text','option'); ?>
		</div>
		<?php if( have_rows('home_cta_boxes' , 'option') ): ?>
			<div id="homepageOfferings" class="ctaBoxes" >
				<?php while( have_rows('home_cta_boxes' , 'option') ): the_row(); ?>
					
					<div class="ctaBoxContainer" style=" background-image: url('<?php echo the_sub_field('cta_box_background_image' , 'option'); ?>);">
						<div class="ctaBoxContent">
							<div class="cta-box-text">
								<h1><?php echo the_sub_field('main_title_for_cta_card' , 'option'); ?></h1>
								<h2><?php echo the_sub_field('cta_card_sub_title' , 'option'); ?></h2>
								<a href="<?php echo the_sub_field('cta_button_link' , 'option'); ?>">
									<span><?php echo the_sub_field('cta_button_text' , 'option'); ?></span>
								</a>
							</div>
							<div class="fadeOutLayover">
								<!-- Used to Fade Images so text will show better -->
							</div>
						</div>
					</div>
					
				<?php endwhile; ?>
			</div>

		<?php endif; ?>

	</div><!-- #primary -->


<?php get_footer(); ?>
