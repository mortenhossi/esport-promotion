<?php 
/**
 * Plugin Name: eSport Modules
 * Description: Custom modules for the eSport Promotion
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://mortenhostrup.com
 */
define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );
function my_load_module_examples() {
    if ( class_exists( 'FLBuilder' ) ) {
        // Include your custom modules here.
        require_once 'esport-cover/esport-cover.php';
    }
}
add_action( 'init', 'my_load_module_examples' );
?>