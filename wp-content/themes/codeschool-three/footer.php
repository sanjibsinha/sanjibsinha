
<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url(  ) ?>"><strong>Contact</strong> Us </a>
            </h1>
            <p><a class="site-footer__link" href="#">sanjib12sinha@gmail.com</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
              <?php
          
          wp_nav_menu(array(
            'theme_location' => 'footer-menu-one'
          ));
          
          
          ?>
                <!-- <ul>
                  <li><a href="<?php echo site_url( '/index.php/about-us' ) ?>">About Us</a></li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Campuses</a></li>
                </ul> -->
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
              <?php
          
          wp_nav_menu(array(
            'theme_location' => 'footer-menu-two'
          ));
          
          
          ?>
                <!-- <ul>
                  <li><a href="#">Legal</a></li>
                  <li><a href="<?php echo site_url( '/index.php/privacy-policy/' ) ?>">Privacy</a></li>
                  <li><a href="#">Careers</a></li>
                </ul> -->
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                
                <li>
                  <a href="https://twitter.com/sanjibsinha/" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                
                
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>