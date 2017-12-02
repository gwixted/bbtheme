    </div>
      <footer id="footer" role="contentinfo">
        <div class="outer-wrap">
          <div class="inner-wrap">
            <ul class="ul-zero sn-icons">
              <li><a href="" class="ion-social-facebook"></a></li>
              <li><a href="" class="ion-social-twitter"></a></li>
            </ul>
            <div class="copyright">
              &copy; <?php echo date( 'Y' ); ?> Wixted Web Enterprises. All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
  <nav id="mobile-menu" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
  </nav>
  <div class="overlay"></div>
</html>