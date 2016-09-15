<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Rise_Legal_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rise_legal_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'rise_legal_body_classes' );

//Setting homepage Hero Image
function rise_legal_banner_image_styles() {
        //checking for page template
        if( ! is_page_template('front-page.php')){
            return;
        }
            $banner_image = CFS()->get( 'home_banner_image' );
            //checking to see if variable is empty or not.
            if( ! $banner_image){
                return;
            } 
            
            $custom_css = "
                    .front-banner{
                        width: 100vw;
                        height:  auto;
                        background: 
                            linear-gradient( to bottom, rgba(255,255,255, 0.5), rgba(255,255,255, 1)),
                            url({$banner_image});
                        background-size: cover;
                    }";
            wp_add_inline_style( 'rise-legal-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'rise_legal_banner_image_styles' );