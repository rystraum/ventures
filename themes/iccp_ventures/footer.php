  </div><!-- #main .wrapper -->
  <footer id="colophon" role="contentinfo">
    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' ) ); ?>
    <div class="site-info">
      <?php do_action( 'twentytwelve_credits' ); ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>