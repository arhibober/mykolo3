<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="http://localhost/mykolo3/wp-content/themes/twentythirteen/engine1/style.css" />
<script type="text/javascript" src="http://localhost/mykolo3/wp-content/themes/twentythirteen/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=YOUR-ACCOUNT-ID"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head();?>
	<script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/js/preloader-script.js "></script>
<?php global $user_ID;
if ($user_ID == 0)
	echo "<style>
	#bbp_login_widget-4, #bbp_login_widget-5, #menu-item-119, #menu-item-120
	{
	display: none;
	}
	@media (max-width: 1599px) and (min-width: 1240px){

		#polylang-2{
			margin: 60px 10px 10px -1085px;
		}

	}
	</style>";
else
{
	echo "<style>
	#menu-item-87, #menu-item-88, #menu-item-84, #menu-item-86
	{
	display: none;
	}
	</style>";
	if ($user_ID != 1)
	{
		echo "<style>
		#menu-item-119, #menu-item-120
		{
		display: none;
		}
		@media (max-width: 1599px) and (min-width: 1240px){

			#polylang-2
			{
				margin: 60px 10px 10px -850px;
			}
			#bbp_login_widget-4, #bbp_login_widget-5
			{
    				margin: 95px 10px 10px -720px;
    				display: inline;
			}

		}
		</style>";
	}
	else
		echo "<style>
		@media (max-width: 1599px) and (min-width: 1240px){
			#bbp_login_widget-4, #bbp_login_widget-5 {
    			display: inline;
    			margin: 95px 10px 0px -1050px;
			}
			#polylang-2{
				margin: 60px 10px 10px -1200px;
			}
		}
		</style>";
	}
 	?>
	
		
</head>

<body <?php body_class(); ?>>
<?php if (is_front_page() && wpmd_is_notdevice()):?>
		<div id="wptime-plugin-preloader"></div>
	<?php endif; ?>
<div class="preheader"></div>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
				
				<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
			<div id="widget-area" class="nav-menu" role="complementary">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>
		
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>

					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
