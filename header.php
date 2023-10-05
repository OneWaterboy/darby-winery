<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>

<?php if( is_front_page() ): ?>
		<div class="video-container">
			<div class="headerVideo">
				<video muted autoplay loop >
					<source src="<?php echo get_stylesheet_directory_uri() . '/graphics/' . get_field('header_video_name','option'); ?>" type=video/mp4>
				</video>
			</div>
			<div id="fadeOut">
				<div class="homepageTitles">
					<?php if( get_field('header_image_for_fade_in','option') ): ?>
						<img class="fadeInUp-animation" src="<?php echo get_field('header_image_for_fade_in','option'); ?>" />
					<?php endif; ?>

					<?php if( get_field('header_title_text_for_fade_in','option') ): ?>
						<div style="color: <?php echo get_field('home_page_text_color','option'); ?>;" class="fadeInUp-animation"><?php echo get_field('header_title_text_for_fade_in','option'); ?></div>
					<?php endif; ?>

					<?php if( get_field('header_sub_text_for_fade_in','option') ): ?>
						<div style="color: <?php echo get_field('home_page_text_color','option'); ?>;" class="fadeInSecond-animation"><?php echo get_field('header_sub_text_for_fade_in','option'); ?></div>
					<?php endif; ?>
				</div>
				<a class="homeHeaderDownArrow" href="#homepageOfferings"><img src="<?php echo get_stylesheet_directory_uri() . '/graphics/down-arrow.png'; ?>" /></a>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if( !is_front_page() ): ?>
				<div style="background-image: url('<?php echo the_field('page_header_image'); ?>');" class="headerImages">
					<?php if(get_field('page_header_text')) {
						'<div class="pageHeaderText">' . the_field('page_header_text') . '</div>';	  
					}?>
				</div>
		<?php endif; ?>
	<div id="content" class="site-content">

	

		<div class="ast-container">
		<?php astra_content_top(); ?>
