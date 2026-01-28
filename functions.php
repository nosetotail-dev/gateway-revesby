<?php
add_theme_support( 'post-thumbnails' );

//disable emoji
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
* Filter function used to remove the tinymce emoji plugin.
* 
* @param array $plugins 
* @return array Difference betwen the two arrays
*/
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}


//header menu
function register_header_menu() {
	register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_header_menu');

//footer menu
function register_footer_menu() {
    register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'register_footer_menu');


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


//pagination
function wpbeginner_numeric_posts_nav() {
    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navi">' . "\n";

    /** Previous Post Link */
    echo '<div class="prev">' . "\n";
    if ( get_previous_posts_link() )
        printf( '%s' . "\n", get_previous_posts_link('back') );
    echo '</div><div><ul>' . "\n";

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    echo '</ul></div><div class="next">' . "\n";
    if ( get_next_posts_link() )
        printf( '%s' . "\n", get_next_posts_link('next') );
    echo '</div>' . "\n";


    echo '</div>' . "\n";
}

add_filter('wpcf7_autop_or_not', '__return_false');

function theme_excerpt_length( $length ) {
    if ( is_admin() ) {
            return $length;
    }
    return 20;
}
add_filter( 'excerpt_length', 'theme_excerpt_length', 999 );



//Gutenberg blocks

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'intro',
            'title'             => __('Intro Content'),
            'description'       => __('A custom block.'),
            'render_template'   => 'blocks/intro.php',
            'category'          => 'formatting',
            'icon'              => 'media-default',
            'keywords'          => array( 'intro', 'content'),
            'mode'  => 'edit',
            'supports' => array('mode' => false)
        ));

        acf_register_block_type(array(
            'name'              => 'portal',
            'title'             => __('Portal Content'),
            'description'       => __('A custom block.'),
            'render_template'   => 'blocks/portal.php',
            'category'          => 'formatting',
            'icon'              => 'editor-textcolor',
            'keywords'          => array( 'portal' ),
            'mode'  => 'edit',
            'supports' => array('mode' => false)
        ));

    }
}

//acf google map
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAVeWNOMfMl22nJoTZnKZMDWw47CB2oy5k');
}

add_action('acf/init', 'my_acf_init');
