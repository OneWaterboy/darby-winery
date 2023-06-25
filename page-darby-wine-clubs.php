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
        <p class="wine-clubs-header">Our club wines produced just for our beloved members!I am always shocked that other wineries offer wines anyone can go to a store and purchase. Doesn’t make sense and we won’t do it. We hand pick our best barrels and create small lots of blends and single vineyard offerings, just for you.</p>
        <div class="club-cards">
            <?php
                if( have_rows('wine_clubs' , 'option') ):
                    while( have_rows('wine_clubs' , 'option') ): the_row(); ?>
                        <div class="club-card">
                            <div class="club-card-title">
                                <p class="club-name"><?php echo get_sub_field('wine_club_name'); ?></p>
                                <div class="club-price">
                                    $<?php echo get_sub_field('wine_club_price'); ?> Yearly
                                </div>
                            </div>
                            <div class="club-card-details">
                                <div class="wine-club-details">
                                    <?php
                                        if( have_rows('wine_club_benefits') ):
                                            while( have_rows('wine_club_benefits') ): the_row(); ?>
                                                <div class="benefit-line-items">
                                                    <img src="/wp-content/themes/darby-winery/graphics/wine-bottle.png'; ?>" />
                                                    <span class="club-benefit"><?php echo get_sub_field('wine_club_benefit_item'); ?></span>
                                                </div>
                                            <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="club-sign-up">
                                <a target="_blank" href="<?php echo get_sub_field('wine_club_sign_up_link'); ?>" class="sign-up-button">Join the club</a>
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
