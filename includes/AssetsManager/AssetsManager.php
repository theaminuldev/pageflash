<?php
namespace PageFlash\AssetsManager; 

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * AssetsManager Class.
 *
 * This class handles the loading and registration of assets (styles and scripts) for the PageFlash plugin.
 *
 * @package pageflash
 * @since 1.0.0
 */
class AssetsManager {
    public function __construct() {
        // Constructor code
        // Define asset loading and registration here
        add_action('wp_enqueue_scripts', array($this, 'pageflash_frontend_enqueue_assets'));
        add_action('admin_enqueue_scripts', array($this, 'pageflash_admin_enqueue_scripts'));
    }

    /**
     * Enqueue scripts and styles for the PageFlash plugin frontend.
     *
     * This method enqueues scripts and styles necessary for the PageFlash plugin's functionality.
     * @return void
     * @since 1.0.0
     */

    public function pageflash_frontend_enqueue_assets() {

        $min_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
        $quicklink_version = defined( 'PAGEFLASH_VERSION' ) && empty(PAGEFLASH_VERSION) ? '' : '2.3.0';

        wp_enqueue_style(
		    'pageflash-frontend',
			PAGEFLASH_ASSETS_URL . 'css/frontend' . $min_suffix . '.css',
			[],
			PAGEFLASH_VERSION
		);

        wp_enqueue_script(
			'pageflash-frontend',
			PAGEFLASH_ASSETS_URL . 'js/admin/pageflash-frontend' . $min_suffix . '.js',
			['jquery'],
			PAGEFLASH_VERSION,
			true
		);

        // Extra Library js file enqueue
        wp_enqueue_script(
			'pageflash-quicklink',
			PAGEFLASH_ASSETS_URL . 'libs/quicklink/dist/quicklink.js',
			[],
		    $quicklink_version,
			true
		);
    }

    /**
     * Enqueue scripts and styles for the PageFlash plugin Admin.
     *
     * This method enqueues scripts and styles necessary for the PageFlash plugin's functionality.
     * @return void
     * @since 1.0.0
     */
    public function pageflash_admin_enqueue_scripts() {

        $min_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

        // Enqueue WP Color Picker script
        wp_enqueue_script('wp-color-picker');
        
        // Enqueue the media library for file uploads
        wp_enqueue_media();
        
        // Enqueue jQuery
        wp_enqueue_script('jquery');
        
		wp_enqueue_script(
			'pageflash-admin',
			PAGEFLASH_ASSETS_URL . 'js/admin/pageflash-admin' . $min_suffix . '.js',
			['jquery'],
			PAGEFLASH_VERSION,
			true
		);


        // Enqueue WP Color Picker styles
        wp_enqueue_style('wp-color-picker');

        wp_enqueue_style(
		    'pageflash-admin',
			PAGEFLASH_ASSETS_URL . 'css/admin' . $min_suffix . '.css',
			[],
			PAGEFLASH_VERSION
		);
    }

}
