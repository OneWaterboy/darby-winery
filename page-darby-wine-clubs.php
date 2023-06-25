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
    <?php
        if( have_rows('wine_clubs' , 'option') ):
            while( have_rows('wine_clubs' , 'option') ): the_row(); ?>
                <div class="club-cards">
                    <div class="club-card-title">
                        <p class="club-name"><?php echo get_sub_field('wine_club_name'); ?></p>
                    </div>
                    <div class="club-card-details">
                        <div class="wine-club-details">
                            <?php
                                if( have_rows('wine_club_benefits') ):
                                    while( have_rows('wine_club_benefits') ): the_row(); ?>
                                        <span class="club-benefit"><?php echo get_sub_field('wine_club_benefit_item'); ?></span>
                                    <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="wine-club-image">
                            <img src="<?php echo get_sub_field('wine_club_image'); ?>" />
                        </div>
                    </div>
                    <div class="club-sign-up">
                        <a target="_blank" href="<?php echo get_sub_field('wine_club_sign_up_link'); ?>" class="sign-up-button"></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
