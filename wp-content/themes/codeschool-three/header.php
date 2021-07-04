<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url(  ) ?>"><strong>Sanjib</strong> Sinha</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
          <?php
          
          /*
          if(wp_nav_menu(array(
            'theme_location' => 'header-menu'
          )))
          */
          
          ?>
            <ul>
              <li <?php 
              if(is_page('about-us') or wp_get_post_parent_id(0) == 10)
              echo 'class="current-menu-item"'
              ?>><a href="<?php echo site_url( '/index.php/about-us' ); ?>">About Us</a></li>
              <li><a href="<?php echo site_url( '/index.php/flutter' ); ?>">Flutter</a></li>
              <li><a href="<?php echo site_url( '/index.php/dart' ); ?>">Dart</a></li>
              <li><a href="<?php echo site_url( '/index.php/php' ); ?>">PHP</a></li>
              <li
              <?php if(get_post_type() == 'post') {echo 'class="current-menu-item"'; } ?>
              ><a href="<?php echo site_url( 'index.php/blog/' ); ?>">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>