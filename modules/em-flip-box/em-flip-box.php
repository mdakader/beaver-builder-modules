<?php

/**
 * Flip Box Module
 * setup necessary to get it working.
 *
 * @class LHFlipBox
 */
class LHFlipBox extends FLBuilderModule
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
            'name' => __('Flip Box', 'em'),
            'description' => __('This is for Flip Box Module', 'em'),
            'category' => __('Easy Modules', 'em'),
            'dir' => EASY_MODULE_DIR . 'modules/em-flip-box/',
            'url' => EASY_MODULE_URL . 'modules/em-flip-box/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);
        $this->add_css('font-awesome');
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHFlipBox', [ // Tab title
    'general' => [ // Tab Sections
        'title' => __('General', 'em'), // Section
        'sections' => [ // Section Title
            'general' => [ // Section
                'title' => __('Content', 'em'), // Section Title
                'fields' => [ // Section Fields
                    'lh_flip_box_image' => [
                        'type' => 'photo',
                        'label' => __('Flip Box Image', 'em'),
                        'preview' => [
                            'type' => 'none',
                        ],
                    ],
                    'lh_flip_box_back_title' => [
                        'type' => 'textarea',
                        'label' => __('Flip Box Back Text Title', 'em'),
                        'placeholder' => __('Title Text', 'em'),
                        'default' => __('Fames dignissim ut hac', 'em'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.em-dual-heading span.heading-two'
                        ],
                        'connections' => ['string']
                    ],
                    'lh_flip_box_back_desc' => [
                        'type' => 'textarea',
                        'label' => __('Flip Box Back Text Sub Title', 'em'),
                        'placeholder' => __('Description Text', 'em'),
                        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, consectetur aliquam amet integer augue morbi volutpat.', 'em'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.em-dual-heading span.heading-two'
                        ],
                        'connections' => ['string']
                    ],
                    'lh_flipbox_link' => [
                        'type' => 'link',
                        'label' => __('Flip Box Link URL', 'em'),
                        'placeholder' => __('https://google.com', 'em'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => 'a.em-flipbox-readmore-btn'
                        ]
                    ],
                    'lh_flipbox_link_text' => [
                        'type' => 'text',
                        'label' => __('Flipbox Link Button Text', 'em'),
                        'default' => "view details",
                        'preview' => [
                            'type' => 'text',
                            'selector' => 'a.em-flipbox-readmore-btn'
                        ]
                    ],
                    'btn_icon' => [
                        'type' => 'icon',
                        'label' => __( 'Icon', 'kcm' ),
                        'default' => 'fas fa-arrow-right',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-flipbox-readmore-btn span',
                            'property' => 'icon'
                        ],
                        'show_remove'   => true,
                    ],
                ],
            ],
        ],

    ],
    'style' => [
        'title' => __('Style', 'em'),
        'sections' => [
            'general' => [
                'title' => __('Content', 'em'),
                'fields' => [
                    'flip_box_height' => [
                        'type' => 'unit',
                        'label' => __('Flip Box Height', 'em'),
                        'units' => ['px', 'vw', '%'],
                        'default_unit' => 'px',
                        'default' => '410',
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.flip-box',
                            'property' => 'height',
                        ]
                    ],
                    'f_bg_color' => [
                        'type' => 'color',
                        'connections' => ['color'],
                        'label' => __('Front Background Color', 'em'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'background-color',
                            'selector' => '.flip-box-front'
                        ],
                    ],
                    'b_bg_color' => [
                        'type' => 'color',
                        'connections' => ['color'],
                        'label' => __('Back Background Color', 'em'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'background-color',
                            'selector' => '.flip-box-back'
                        ],
                    ],
                    'b_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Back Title Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-flip-box-content h2'
                        ],
                    ],
                    'b_title_color' => [
                        'type' => 'color',
                        'label' => __('Back Title Color', 'em'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => '.em-flip-box-content h2'
                        ],
                    ],
                    'b_desc_typography' => [
                        'type' => 'typography',
                        'label' => __('Back Description Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-flip-box-content p'
                        ],
                    ],
                    'b_desc_color' => [
                        'type' => 'color',
                        'label' => __('Back Description Color', 'em'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => '.em-flip-box-content p'
                        ],
                    ],
                    'btn_typography' => [
                        'type' => 'typography',
                        'label' => __('Button Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'a.em-flipbox-readmore-btn'
                        ],
                    ],
                    'btn_color' => [
                        'type' => 'color',
                        'label' => __('Button Color', 'em'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => 'a.em-flipbox-readmore-btn'
                        ],
                    ],
                    'btn_h_color' => [
                        'type' => 'color',
                        'label' => __('Button Color', 'em'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => 'a.em-flipbox-readmore-btn:hover'
                        ],
                    ],
                ],
            ],
        ],

    ],
]);