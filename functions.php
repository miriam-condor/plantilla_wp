<?php
//registrar menu
function register_my_menus() {
    register_nav_menus(
      array(
          //crear menu
        'menu_izquierdo' => __( 'Menu Principal Izquierdo' ),
        //'menusuperior' => __( 'Menu Principal Superior' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
//agregar estilos a las etiquetas <a> del menu
   add_filter('nav_menu_link_attributes','clases_menu',10,3);

   function clases_menu($atts,$item,$args){
       $class='waves-effect';
       $atts['class']=$class;
       return $atts;

   }
   //agregar soporte para imagen destacado
   if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
}

?>