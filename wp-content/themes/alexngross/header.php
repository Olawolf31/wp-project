<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alexngross
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'alexngross'); ?>
		</a>

		<header id="masthead" class="header">
			
				<?php
				the_custom_logo();

				?>
				<!-- .site-branding -->



				<nav id="site-navigation" class="main-navigation">
					<button class="hamburger-button menu-toggle" aria-controls="primary-menu" aria-expanded="false">

						<?php esc_html_e('', 'alexngross'); ?>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
					?>
				</nav>
				<a href="<?php echo esc_url(get_site_url()); ?>">
					<svg class='home-icon' style="width:34px;height:34px" viewBox="0 0 24 24">
						<path fill="#ff000f" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" />
					</svg>
				</a>
				<!-- #site-navigation -->
		
		</header><!-- #masthead -->