<?php

if ( ! function_exists( 'shaunandrews_setup' ) ) :
    function shaunandrews_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );

        add_editor_style( './style.css' );

        register_block_pattern_category(
            'shaun',
            array( 'label' => __( 'Shaun', 'shaunandrews' ) )
        );

        register_block_pattern(
            'shaunandrews/page-heading',
            array(
                'title'       => __( 'Page Heading', 'shaunandrews' ),
                'description' => _x( 'Two headings displayed in a vertical stack and used to introduce the current page.', 'Block pattern description', 'shaunandrews' ),
                'content'     => "<!-- wp:group {\"className\":\"page-heading\"} -->\n<div class=\"wp-block-group page-heading\">\n<div class=\"wp-block-group__inner-container\">\n<!-- wp:heading -->\n<h2>Page heading</h2>\n<!-- /wp:heading -->\n<!-- wp:heading {\"level\":3} -->\n<h3>Page description</h3>\n<!-- /wp:heading -->\n</div>\n</div>\n<!-- /wp:group -->",
                'categories'  => array( 'shaun' ),
            )
        );
    }
endif;

add_action( 'after_setup_theme', 'shaunandrews_setup' );

function shaunandrews_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '2' );
}
add_action( 'wp_enqueue_scripts', 'shaunandrews_scripts' );
