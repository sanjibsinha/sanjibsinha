<?php
get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php
      echo get_theme_file_uri('images/library-hero.jpg') ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">To the World of PHP, WordPress, Flutter and Dart.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>Articles</strong> you&rsquo;re interested in?</h3>
        
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">
          <?php
          echo "Flutter";
          ?>
          </h2>
          <?php
          $codeschoolPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'Flutter',
          ));
          
          while ($codeschoolPosts->have_posts()) {
            $codeschoolPosts->the_post(); ?>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month"><?php the_time( 'm' ) ?></span>
              <span class="event-summary__day"><?php the_time( 'y' ) ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#"><?php the_title(); ?></a></h5>
              <p><?php the_excerpt(); ?>. <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
          <?php } ?>
          
          <p class="t-center no-margin"><a href="<?php echo site_url('/index.php/category/flutter/'); ?>" class="btn btn--blue">Flutter Articles</a></p>
        </div>
      </div>

      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center"><?php echo "Dart"; ?></h2>
          <?php
          $generalPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'Dart',
          ));
          
          while ($generalPosts->have_posts()) {
            $generalPosts->the_post(); ?>
            
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month"><?php the_time( 'm' ) ?></span>
              <span class="event-summary__day"><?php the_time( 'y' ) ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#"><?php the_title(); ?></a></h5>
              <p><?php the_excerpt(); ?>. <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
          <?php  }         
          
          ?>
          
          <p class="t-center no-margin">
          <a href="<?php echo site_url('/index.php/category/dart/'); ?>" class="btn btn--yellow">Dart Articles</a></p>
        </div>
      </div>
      
    </div>

    

    <div class="full-width-split group">


    <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center"><?php echo "PHP"; ?></h2>
          <?php
          $generalPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'PHP',
          ));
          
          while ($generalPosts->have_posts()) {
            $generalPosts->the_post(); ?>
            
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month"><?php the_time( 'm' ) ?></span>
              <span class="event-summary__day"><?php the_time( 'y' ) ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#"><?php the_title(); ?></a></h5>
              <p><?php the_excerpt(); ?>. <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
          <?php  }         
          
          ?>
          
          <p class="t-center no-margin">
          <a href="<?php echo site_url('/index.php/category/php/'); ?>" class="btn btn--yellow">PHP Articles</a></p>
        </div>
      </div>

      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">
          <?php
          echo "WordPress";
          ?>
          </h2>
          <?php
          $codeschoolPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'WordPress',
          ));
          
          while ($codeschoolPosts->have_posts()) {
            $codeschoolPosts->the_post(); ?>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month"><?php the_time( 'm' ) ?></span>
              <span class="event-summary__day"><?php the_time( 'y' ) ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#"><?php the_title(); ?></a></h5>
              <p><?php the_excerpt(); ?>. <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
          <?php } ?>
          
          <p class="t-center no-margin">
          <a href="<?php echo site_url('/index.php/category/wordpress/'); ?>" class="btn btn--blue">WordPress Articles</a></p>
        </div>
      </div>      
      
    </div>

<?php
get_footer();
?>