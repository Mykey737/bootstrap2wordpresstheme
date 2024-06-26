<?php 

    /**
     * The Header File
     * 
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     * 
     * @package bootstrap2wordpress
     * @since Bootstrap to WordPress 2.0
     * 
     */

?>

<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    
        <head>
    
            <meta charset="utf-8">
            <title>Bootstrap to Wordpress 2.0</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <?php wp_head(); ?>
            
        </head>
    
        <body <?php body_class(); ?> >
    
            <div id="top-navigation">
              <div class="container">
                <div class="row justify-content-end">
                  <div class="col-md-6">

                    <?php 
                    
                        wp_nav_menu(
                            array(
                                'theme_location'        => 'primary', //As registered in functions.php
                                'depth'                 => 3, //As we set up in our CSS
                                'container'             => 'nav', //html wrapper of the menu ul
                                'container_class'       => 'main-menu', //Menu wrapper class
                                'menu_class'            => 'top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled', //Classes of the menu ul tag
                                'fallback_cb'           => false //if primary menu is not created, then show nothing

                            )
                        );

                    ?>
          
                    <button type="button" class="navbar-open">
                      <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
                    </button>
          
                  </div>
                </div>
          
                <!-- Mobile Menu -->
                <div class="mobile-menu">
                  <div class="menu-backdrop"></div>
                  <div class="close-btn">
                    <i class="flaticon flaticon-close"></i>
                  </div>
                  <nav class="menu-box">
                    <ul class="navigation clearfix"></ul>
                  </nav>
                </div>
          
              </div>
            </div>