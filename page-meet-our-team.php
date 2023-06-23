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

		<div class="teamMembers">
			<?php if( have_rows('darby_team_members' , 'option') ): ?>
	
				<div class="teamMembersLayout">

				<?php while( have_rows('darby_team_members' , 'option') ): the_row(); ?>

					<div class="teamMember">
						<img class="teamMemberImage" src="<?php the_sub_field('team_member_photo' , 'option'); ?>" />
						<div class="teamMemberDetails">
							<span>
								<p class="teamMemberName"><?php the_sub_field('team_member_name' , 'option'); ?></p>
								<p class="teamMemberPosition"><?php the_sub_field('team_member_position' , 'option'); ?></p>
							</span>
							<p class="teamMemberFavorite">Favorite Vintage: <?php the_sub_field('team_member_favorite_bottle' , 'option'); ?></p>
							<div class="teamMemberSocialLinks">
								<?php if (get_sub_field('team_member_facebook','option') ): ?>
									<a href="<?php echo the_sub_field('team_member_facebook','option' , 'option'); ?>"><img src="/wp-content/uploads/2023/04/f_logo_RGB-Blue_144.png" /></a>
								<?php endif; ?>
								<?php if (get_sub_field('team_member_instagram','option') ): ?>
								<a href="<?php echo the_sub_field('team_member_instagram','option' , 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/graphics/Instagram_Glyph_Gradient.jpg'; ?>" /></a>
							<?php endif; ?>
							<?php if (get_sub_field('team_member_linkedin','option') ): ?>
								<a href="<?php echo the_sub_field('team_member_linkedin','option' , 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/graphics/LI-In-Bug.png'; ?>" /></a>
							<?php endif; ?>
							</div>
						</div>
					</div>
					
				<?php endwhile; ?>

			</div>

			<?php endif; ?>
		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>
