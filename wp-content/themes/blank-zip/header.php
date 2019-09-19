<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank.zip
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="banner-area" <?php body_class(); ?>>

	<nav id = "menu" class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
			<div class="site-branding navbar-brand">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><span class="logo">Angel's Accessories</span></a>
			</div><!-- .site-branding -->

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav navbar-right ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8080/EcommerceWordpress/about-us/">About</a>
      </li>
      <li class="nav-item dropdown">
	  	<a class="nav-link" href="http://localhost:8080/EcommerceWordpress/contact-us/">Contact</a>
      </li>
    </ul>
  </div>
	</nav>
<div id="page" class="site container">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blank-zip' ); ?></a>

	<header id="masthead" class="site-header">
	
	</header><!-- #masthead -->

	<div id="content" class="site-content row">
