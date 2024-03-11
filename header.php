<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package azmoon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/materialize/css/materialize.min.css"  media="screen,projection"/>
	<?php wp_head(); ?>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">


  <nav>
    <div class="nav-wrapper mainView">
      <a href="#!" class="brand-logo">لوگو</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	  <?php
			wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'right hide-on-med-and-down',
				'container'      => 'ul' 
			)
			);
		?>
    </div>
  </nav>

  <?php
	wp_nav_menu(
	array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'mobile-demo',
		'menu_class'     => 'sidenav',
		'container'      => 'ul' 
	)
	);
?>

		

	</header><!-- #masthead -->
</div>
