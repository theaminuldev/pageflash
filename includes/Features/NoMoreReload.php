<?php
namespace PageFlash\Features; 

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * NoMoreReload Class.
 *
 * This class provides functionality for something in your PageFlash plugin.
 *
 * @package pageflash 
 * @since 1.0.0
 */
class NoMoreReload {
    public function __construct() {
        // Constructor code
        add_filter( 'script_loader_tag', array($this, 'pageflash_async_script_loader'), 10, 2 );
    }

    /**
    * Add 'async' attribute to PageFlash script loader tag.
    *
    * This function adds the 'async' attribute to the script tag for PageFlash to improve page loading speed.
    *
    * @link https://github.com/WordPress/twentynineteen/pull/646
    * @link https://github.com/wprig/wprig/blob/9a7c23d8d3db735259de6c338ddbb7cb7fd0ada1/dev/inc/template-functions.php#L41-L70
    * @link https://core.trac.wordpress.org/ticket/12009
    *
    * @param string $tag    The script tag.
    * @param string $handle The script handle.
    * @return string The modified script tag.
    */

    function pageflash_async_script_loader( $tag, $handle ) {

        return 'pageflash-quicklink' === $handle && false === strpos( $tag, 'async' ) 
        ? str_replace( '></script>', ' async></script>', $tag ) : $tag;

    }

    


   
}
