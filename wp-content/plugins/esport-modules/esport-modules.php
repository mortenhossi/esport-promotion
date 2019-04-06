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
        require_once 'esport-product/esport-product.php';
        require_once 'esport-text-island/esport-text-island.php';
        require_once 'esport-steps/esport-steps.php';
        require_once 'esport-title/esport-title.php';
        require_once 'esport-icon-text/esport-icon-text.php';
        require_once 'esport-contact/esport-contact.php';
    }
}
add_action( 'init', 'my_load_module_examples' );
?>