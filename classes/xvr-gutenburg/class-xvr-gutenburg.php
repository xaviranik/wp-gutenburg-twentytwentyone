<?php
/**
 * XVR Gutenburg Class
 *
 * @package XVR
 * 
 * @since 1.0.0
 */

 class XVR_Gutenburg {

    /**
     * Constructor
     */
    public function __construct() {
        add_action( 'after_setup_theme', [ $this, 'theme_default_colors' ], 11 );
    }

    /**
     * Theme Default Colors
     *
     * @since 1.0.0
     */
    public function theme_default_colors() {
        $this->default_editor_pallate();
        $this->default_font_sizes();
    }

    /**
     * Default Editor Pallate
     *
     * @since 1.0.0
     */
    public function default_editor_pallate() {
        // Add theme support for editor color palette.
        add_theme_support( 
            'editor-color-palette', 
            [
                [
                    'name'  => __( 'Primary', 'xvr' ),
                    'slug'  => 'primary', 
                    'color' => '#9CA3AF',
                ],
                [
                    'name'  => __( 'Secondary', 'xvr' ),
                    'slug'  => 'secondary', 
                    'color' => '#6B7280',
                ]
            ] 
        );
    }

    public function default_font_sizes() {
        // Add theme support for font sizes.
        add_theme_support(
            'editor-font-sizes',
            [
                [
                    'name'      => __( 'Base', 'xvr' ),
                    'shortName' => __( 'B', 'xvr' ),
                    'size'      => 12,
                    'slug'      => 'base'
                ],
                [
                    'name'      => __( 'Normal', 'xvr' ),
                    'shortName' => __( 'M', 'xvr' ),
                    'size'      => 16,
                    'slug'      => 'normal'
                ],
                [
                    'name'      => __( 'Large', 'xvr' ),
                    'shortName' => __( 'L', 'xvr' ),
                    'size'      => 36,
                    'slug'      => 'large'
                ],
                [
                    'name'      => __( 'Huge', 'xvr' ),
                    'shortName' => __( 'XL', 'xvr' ),
                    'size'      => 48,
                    'slug'      => 'huge'
                ],
            ]
        );
    }
 }