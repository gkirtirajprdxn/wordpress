<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Theme
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<link rel="shortcut icon" href="<?php echo home_url(); ?>/wp-content/themes/mytheme/assets/images/favicon.ico" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div class="container">
    <header>
      <div class="wrapper">
        <?php if($sitelogo) : ?>
        <h1>
          <a href="<?php echo home_url();?>" class="site-logo" title="<?php echo bloginfo('name'); ?>" >
            <?php echo $sitelogo ? '<img src='.$sitelogo.' alt="site-logo">' : null; ?>
          </a>
        </h1>
        <?php endif; ?>
        <div class="mainmenu" id="navigationMenu">
          <nav class="menu">
            <?php $args = array('theme_location' => 'primary');
            wp_nav_menu($args); ?>
          </nav>
          <div class="search-desktop">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </header>
    <main class="site-main" id="content">

    
    
    
