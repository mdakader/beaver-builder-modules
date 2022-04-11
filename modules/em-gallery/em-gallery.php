<?php

/**
 * Image Gallery Module
 * setup necessary to get it working.
 *
 * @class EMImageGallery
 */
class EMImageGallery extends FLBuilderModule
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
FLBuilder::register_module('EMImageGallery', [
    'general' => [ // Tab
        'title' => __('General', 'em'), // Tab title
        'sections' => [ // Tab section
            'general' => [ // Section
                'title' => __('Content', 'em'), // Section title
                'fields' => [ // Section fields
                    'em_gallery_photos' => [
                        'type' => 'form',
                        'label' => __('Gallery', 'em'),
                        'form' => 'em_gallery',
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
                    'em_row_justify' => [
                        'type' => 'select',
                        'label' => __('Select the last row', 'em'),
                        'default' => 'justify',
                        'options' => [
                            'justify' => __(' Justify the last row', 'em'),
                            'nojustify' => __('No justify the last row', 'em'),
                        ]
                    ],
                    'em_gallery_margin' => [
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
                    'em_image_caption_color' => [
                        'type' => 'color',
                        'label' => __('Image caption text color', 'em'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-image-info h2',
                            'property' => 'color',
                        ],
                    ],
                    'em_image_caption_typography' => [
                        'type' => 'typography',
                        'label' => __('Image caption text typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-image-info h2'
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
FLBuilder::register_settings_form('em_gallery', [
    'title' => __('Gallery', 'em'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'em'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'em_gallery_photo' => [
                            'type' => 'photo',
                            'label' => __('Upload gallery Photo', 'em'),
                            'preview' => [
                                'type' => 'none',
                            ],
                        ],
                        'em_image_caption' => [
                            'type' => 'textarea',
                            'label' => __('Image caption', 'em'),
                            'placeholder' => __('Image caption', 'em'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-image-info h2',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
]);


