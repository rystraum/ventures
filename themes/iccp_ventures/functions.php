<?php
function iccpventures_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Header Right', 'twentytwelve' ),
    'id' => 'header-right',
    'description' => __( 'Appears right above the site menu', 'twentytwelve' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ) );
  register_sidebar( array(
    'name' => 'Testimonials',
    'id' => 'testimonials'
  ));
}
add_action( 'widgets_init', 'iccpventures_widgets_init' );
register_nav_menu( 'footer', __( 'Footer Menu', 'twentytwelve' ) );