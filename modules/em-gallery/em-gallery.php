<?php

/**
 * Image Gallery Module
 * setup necessary to get it working.
 *
 * @class LH_Gallery
 */
class LH_Gallery extends FLBuilderModule
{

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Gallery', 'em'),
            'description' => __('This is for Recent Posts Module', 'em'),
            'category' => __('Easy Modules', 'em'),
            'dir' => EASY_MODULE_DIR . 'modules/em-gallery/',
            'url' => EASY_MODULE_URL . 'modules/em-gallery/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);

        /**
         * Use these methods to enqueue css and js already
         * Already registered
         */
        $this->add_css('justifiedGallery');
        $this->add_css('magnific');
        $this->add_js('justifiedGallery');
        $this->add_js('magnific');
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LH_Gallery', [
    'general' => [ // Tab
        'title' => __('General', 'em'), // Tab title
        'sections' => [ // Tab section
            'general' => [ // Section
                'title' => __('Content', 'em'), // Section title
                'fields' => [ // Section fields
                    'lh_gallery_photos' => [
                        'type' => 'form',
                        'label' => __('Gallery', 'em'),
                        'form' => 'lh_gallery',
                        'multiple' => true
                    ],
                ],
            ],
        ],
    ],
    'options' => [
        'title' => __('Options', 'em'),
        'sections' => [
            'general' => [
                'title' => __('Options', 'em'),
                'fields' => [
                    'lh_row_justify' => [
                        'type' => 'select',
                        'label' => __('Select The Last Row', 'em'),
                        'default' => 'justify',
                        'options' => [
                            'justify' => __(' Justify the last row', 'em'),
                            'nojustify' => __('No justify the last row', 'em'),
                        ]
                    ],
                    'lh_gallery_margin' => [
                        'type' => 'text',
                        'label' => __('Margin', 'em'),
                        'placeholder' => __('2', 'em'),
                        'default' => '5',
                    ],
                ],
            ],
        ],
    ],
    'style' => [
        'title' => __('Style', 'em'),
        'sections' => [
            'general' => [
                'title' => __('Style', 'em'),
                'fields' => [
                    'lh_image_title_color' => [
                        'type' => 'color',
                        'label' => __('Image Title Text Hover Color', 'em'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-image-info h2',
                            'property' => 'color',
                        ],
                    ],
                    'lh_image_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Image Title Text Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-image-info h2'
                        ],
                    ],
                    'lh_image_s_title_color' => [
                        'type' => 'color',
                        'label' => __('Image Sub Title Text Color', 'em'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-image-info h4',
                            'property' => 'color',
                        ],
                    ],
                    'lh_image_s_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Image Sub Title Text Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-image-info h4'
                        ],
                    ],

                ],
            ],
        ],
    ],

]);

/**
 * Register the module and its form settings.
 */
FLBuilder::register_settings_form('lh_gallery', [
    'title' => __('Gallery', 'em'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'em'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_gallery_photo' => [
                            'type' => 'photo',
                            'label' => __('Upload gallery photo', 'em'),
                            'preview' => [
                                'type' => 'none',
                            ],
                        ],
                        'lh_gallery_title' => [
                            'type' => 'textarea',
                            'label' => __('Image title', 'em'),
                            'placeholder' => __('Image title', 'em'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-image-info h2',
                            ],
                        ],
                        'lh_gallery_sub_title' => [
                            'type' => 'textarea',
                            'label' => __('Image sub title', 'em'),
                            'placeholder' => __('Image sub title', 'em'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-image-info h4',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
]);


