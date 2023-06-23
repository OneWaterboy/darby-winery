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

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

	<div class="aboutDarby">
		<h1>Meet Darby English, the man behind the wine.</h1>
		<div class="aboutText">
			<?php echo get_field('about_us_text'); ?>
		</div>
		<div class="aboutImages">
		<?php 
			$images = get_field('about_darby_images');

			if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>

	<div class="container">
		<div class="timeline">
				<div class="timeline-row">
					<div class="timeline-time">
						2002
					</div>
					<div class="timeline-content">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/grapes.png'; ?>" />
						<h4>It begins in a basement</h4>
						<p>Darby, a passionate wine drinker with more than an appreciation for a good red, decided to make winemaking his purpose. At the inception of the Woodinville wine craze, Darby knew something huge was about to happen, and his passion led him to enter the ring.</p>
					</div>
				</div>

				<div class="timeline-row">
					<div class="timeline-time">
						2005
					</div>
					<div class="timeline-content">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/grapes.png'; ?>" />
						<h4>Darby's first commercial vintage</h4>
						<p>
						With help from Alexandria Nicole cellars, Darby produces 210 cases of Syrah and 185 cases of Viognier/Roussanne all of which were an instant hit.
						</p>
					</div>
				</div>

				<div class="timeline-row">
					<div class="timeline-time">
						2006
					</div>
					<div class="timeline-content">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/grapes.png'; ?>" />
						<h4>Woodinville tasting room opens</h4>
						<p>With success, Darby opened his Woodinville tasting room in 2006 and expanded production to 1,200 cases.</p>
					</div>
				</div>

				<div class="timeline-row">
					<div class="timeline-time">
						2007
					</div>
					<div class="timeline-content">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/grapes.png'; ?>" />
						<h4>First Critical Acclaim</h4>
						<p>Darby received national acclaim from Wine Spectator. This rapid rise to celebrity status allowed Darby to continue to expand upon his dream and improve upon his already acclaimed creations.</p>
					</div>
				</div>

				<div class="timeline-row">
					<div class="timeline-time">
						2012
					</div>
					<div class="timeline-content">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/grapes.png'; ?>" />
						<h4>Darby Winery - A Growing Brand</h4>
						<p class="no-margin">Darby opened his Hollywood schoolhouse tasting room, expanding his already influential reach into Seattle.</p>
					</div>
				</div>
				<div class="timeline-row">
					<div class="timeline-time">
						Today
					</div>
					<div class="timeline-content">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/grapes.png'; ?>" />
						<h4>Growth and Excellence</h4>
						<p>
							Today Darby produces 4,000 cases of Bourdeaux blends, Rhone varietals and single vineyard wines. He picks his grapes at optimal ripeness, which then ferment for 10-14 days, utilizing daily pump overs and press when their flavors have fully developed. The deep notes form through his approach to customizing each vintage to embrace the differences every year has to offer.
						</p>
						<div class="timelineTastingLinks">
							<span>Ready for a tasting? Visit us Today!</span>
							<a href="/west-seattle-tasting-room/">Visit West Seattle</a>
							<a href="/woodinville-tasting-room/">Visit Woodinville</a>

						</div>
					</div>
				</div>
			</div>
		</div>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
