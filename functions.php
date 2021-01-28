<?php
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
			'primary' => __('Primary Menu')
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu' );
}
