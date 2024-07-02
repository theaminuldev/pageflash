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
 * @since PageFlash 1.0.0
 */
class AssetsManager {
    public function __construct() {
        // Constructor code
        // Define asset loading and registration here
        add_action('wp_default_scripts', array($this, 'pageflash_wp_default_scripts'));
        add_action('wp_enqueue_scripts', array($this, 'pageflash_frontend_assets'));
        add_action('admin_enqueue_scripts', array($this, 'pageflash_admin_enqueue_scripts'));
    }
    
    /**
     * Enqueue scripts for the PageFlash plugin frontend.
     *
     * This method enqueues scripts necessary for the PageFlash plugin's functionality.
     * Add quicklink to the default scripts to make it available earlier in the runtime.
     * @param WP_Scripts $scripts The WP_Scripts instance.
     * @return void
     * @since PageFlash 1.0.0
     */
    public function pageflash_wp_default_scripts($scripts){
        $min_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
        $quicklink_version = defined( 'PAGEFLASH_VERSION' ) && empty(PAGEFLASH_VERSION) ? '' : '2.3.0';
    
        // Extra Library js file enqueue
        $scripts->add(
            'pageflash-quicklink',
            PAGEFLASH_ASSETS_URL . 'libs/quicklink/dist/quicklink.umd.js',
            [],
            $quicklink_version,
            true
        );

        // Enqueue the frontend script with Quicklink and jQuery as dependencies
        $scripts->add(
            'pageflash-frontend',
            PAGEFLASH_ASSETS_URL . 'js/frontend/pageflash-frontend' . $min_suffix . '.js',
            [],
            PAGEFLASH_VERSION,
            true
        );

		/**
		* Register the Intersection Observer polyfill script with quicklink as a dependency
		* This script enhances compatibility for the Intersection Observer API across browsers.
		* It's primarily used to detect when an element enters the viewport, enabling lazy loading
		* and other interaction-based functionalities.
		*
		* @since PageFlash 1.0.1
		* @see https://github.com/GoogleChromeLabs/intersection-observer for the polyfill source.
		*
		* @param WP_Scripts $scripts The WP_Scripts object to add the script to. Typically, this is
		*                            managed globally by WordPress, and scripts are added in theme or
		*                            plugin files.
		*/

		$scripts->add(
			'intersection-observer',
			PAGEFLASH_ASSETS_URL . 'libs/intersection-observer/intersection-observer.js',
			[],
			'0.12.2',
			true
		);
        return $scripts;
    }

     /**
     * Enqueue scripts and styles for the PageFlash plugin frontend.
     *
     * This method enqueues scripts and styles necessary for the PageFlash plugin's functionality.
     * @return void
     * @since PageFlash 1.0.0
     */

     public function pageflash_frontend_assets() {

        $min_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

        wp_enqueue_style(
		    'pageflash-frontend',
			PAGEFLASH_ASSETS_URL . 'css/frontend' . $min_suffix . '.css',
			[],
			PAGEFLASH_VERSION
		);

        wp_enqueue_script( 'pageflash-frontend');
        // wp_enqueue_script('pageflash-quicklink');

		/**
		 * Enqueue the Intersection Observer polyfill script
		 * This automatically enqueues quicklink as well due to the dependency
		 */
		wp_enqueue_script('intersection-observer');
    }
    
    /**
     * Enqueue scripts and styles for the PageFlash plugin Admin.
     *
     * This method enqueues scripts and styles necessary for the PageFlash plugin's functionality.
     * @return void
     * @since PageFlash 1.0.0
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
