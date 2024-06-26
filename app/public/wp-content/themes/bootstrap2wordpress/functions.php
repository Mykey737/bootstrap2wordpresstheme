<?php 

    if ( !function_exists( 'b2w_theme_setup' ) ) {

        /* Theme Setup */

        function b2w_theme_setup() {
            
            load_theme_textdomain( 'bootstrap2wordpress', get_template_directory() . '/languages' );
            add_theme_support( 'title-tag' );
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 
                'html5',
                array( 
                    'search-form',
                    'comment-form', 
                    'comment-list',
                    'gallery',
                    'caption'
                )
            );
            add_theme_support( 'customize-selective-refresh-widgets' );
            add_theme_support( 'responsive-embeds' );


            register_nav_menus( 

                array(
                    'primary'   =>  esc_html__( 'Primary Menu', 'bootstrap2wordpress' )
                )

            );

        }

    }

    add_action( 'after_setup_theme', 'b2w_theme_setup' );

    /* 
    Enqueue scripts and styles 
    */

     function b2w_assets() {

        // Enqueue CSS Files 

        wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), '1.0', 'all');

        wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), 'v5.3.3', 'all');

        wp_enqueue_style('flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), false, 'all');

        // Main CSS File
        
        wp_enqueue_style('bootstrap2wordpress', get_stylesheet_uri('styles.css'), array('bootstrap'), '1.0', 'all');

        // Enque JS Files
        // Don't enqueue jQuery file. It'll be loaded when from WordPress when required. 

        wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), 'v5.3.3', true);

        wp_enqueue_script('bootstrap2wordpress-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'), '1.0', true);

        if( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

            wp_enqueue_script('comment-reply');

        }

    }

    add_action( 'wp_enqueue_scripts', 'b2w_assets' );


    /* Custom Read More Text */

    function b2w_excerpt_readmore( $more ) {
        return '...';
    }

    add_filter( 'excerpt_more', 'b2w_excerpt_readmore' );

    function b2w_pagination() {

        global $wp_query;
        $links = paginate_links(    
            array(
                'current'   => max( 1, get_query_var( 'paged' ) ),
                'total'     => $wp_query -> max_num_pages, 
                'type'      => 'list', 
                'prev_text' =>  '<-',
                'next_text' =>  '->', 
            )
        );
        
        $links = '<nav class="b2w_pagination">' . $links;
        $links .= '</nav>';
        echo wp_kses_post( $links );
    }

    /* Add Customizer Functionality */
    require get_template_directory() . '/includes/customizer-b2w.php';