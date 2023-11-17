<?php
namespace PageFlash\Helper;

defined( 'ABSPATH' ) || exit;

  /**
 * Global helper class.
 *
 * @since PageFlash 1.0.0
 */
class Helper {

    /**
     * Sanitize and return the content using wp_kses.
     *
     * This method uses the wp_kses function to sanitize and return content
     * based on an array of allowed HTML elements and their attributes.
     *
     * @since PageFlash 1.0.0
     *
     * @param string $content The content to sanitize.
     *
     * @return string Sanitized content.
     */
    public static function sanitize_content( $content ) {
        $allowed_html = self::get_kses_array();
        return wp_kses( $content, $allowed_html );
    }

      /**
     * Get an array of allowed HTML elements and attributes for content sanitization.
     *
     * This method returns an array of allowed HTML elements and their attributes
     * for use in content sanitization to ensure safe and valid HTML output.
     *
     * @since PageFlash 1.0.0
     *
     * @return array An array of allowed HTML elements and attributes.
     */
    public static function get_kses_array() {
        return [
            'a'     => [
                'class'  => [],
                'href'   => [],
                'rel'    => [],
                'title'  => [],
                'target' => [],
                'style'  => [],
            ],
            'abbr'  => [
                'title' => [],
            ],
            'b'     => [
                'class' => [],
            ],
            'blockquote' => [
                'cite' => [],
            ],
            'cite'  => [
                'title' => [],
            ],
            'code' => [],
            'pre'  => [],
            'del'  => [
                'datetime' => [],
                'title'    => [],
            ],
            'dd'  => [],
            'div' => [
                'class' => [],
                'title' => [],
                'style' => [],
            ],
            'dl'     => [],
            'dt'     => [],
            'em'     => [],
            'strong' => [],
            'h1'     => [
                'class' => [],
            ],
            'h2'    => [
                'class' => [],
            ],
            'h3'    => [
                'class' => [],
            ],
            'h4'    => [
                'class' => [],
            ],
            'h5'    => [
                'class' => [],
            ],
            'h6'    => [
                'class' => [],
            ],
            'i'     => [
                'class' => [],
            ],
            'img'   => [
                'alt'     => [],
                'class'   => [],
                'height'  => [],
                'src'     => [],
                'width'   => [],
                'style'   => [],
                'title'   => [],
                'srcset'  => [],
                'loading' => [],
                'sizes'   => [],
            ],
            'figure' => [
                'class' => [],
            ],
            'li'    => [
                'class' => [],
            ],
            'ol'    => [
                'class' => [],
            ],
            'p'     => [
                'class' => [],
            ],
            'q'     => [
                'cite'  => [],
                'title' => [],
            ],
            'span'  => [
                'class' => [],
                'title' => [],
                'style' => [],
            ],
            'iframe' => [
                'width'       => [],
                'height'      => [],
                'scrolling'   => [],
                'frameborder' => [],
                'allow'       => [],
                'src'         => [],
            ],
            'strike'                        => [],
            'br'                            => [],
            'table'                         => [],
            'thead'                         => [],
            'tbody'                         => [],
            'tfoot'                         => [],
            'tr'                            => [],
            'th'                            => [],
            'td'                            => [],
            'colgroup'                      => [],
            'col'                           => [],
            'strong'                        => [],
            'data-wow-duration'             => [],
            'data-wow-delay'                => [],
            'data-wallpaper-options'        => [],
            'data-stellar-background-ratio' => [],
            'ul'                            => [
                'class' => [],
            ],
            'svg'   => [
                'class'               => true,
                'aria-hidden'         => true,
                'aria-labelledby'     => true,
                'role'                => true,
                'xmlns'               => true,
                'width'               => true,
                'height'              => true,
                'viewbox'             => true,
                'preserveaspectratio' => true,
            ],
            'g'     => [ 'fill' => true ],
            'title' => [ 'title' => true ],
            'path'  => [
                'd'    => true,
                'fill' => true,
            ],
            'label' => [
                'for' => [],
            ],
            'fieldset' => [
                'class' => [],
            ],
            'input' => [
                'class'              => [],
                'type'               => [],
                'value'              => [],
                'name'               => [],
                'id'                 => [],
                'data-default-color' => [],
                'checked'            => [],

            ],
            'select' => [
                'id'    => [],
                'name'  => [],
                'class' => [],
            ],
            'option' => [
                'value'    => [],
                'selected' => [],
            ],
            'textarea' => [
                'cols'  => [],
                'rows'  => [],
                'class' => [],
                'id'    => [],
                'name'  => [],
            ]
        ];
    }
}
