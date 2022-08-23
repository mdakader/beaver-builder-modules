<?php

/**
 * Call to action Module
 * setup necessary to get it working.
 *
 * @class LHCTA
 */
class LHCTA extends FLBuilderModule
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
            'name' => __('Call to action', 'em'),
            'description' => __('This is for Call to action Module ', 'em'),
            'category' => __('Easy Modules', 'em'),
            'dir' => EASY_MODULE_DIR . 'modules/em-cta/',
            'url' => EASY_MODULE_URL . 'modules/em-cta/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHCTA', [
    'general' => [ // Tab
        'title' => __('General', 'em'), // Tab title
        'sections' => [ // Tab section
            'general' => [  // Section
                'title' => __('Content', 'em'), // Section title
                'fields' => [ // Section fields
                    'lh_cta_icon' => [
                        'type' => 'icon',
                        'label' => __('Select Icon', 'em'),
                        'default' => 'fas fa-arrow-right',
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.em-cta-btn'
                        ]
                    ],
                    'lh_cta_content' => [
                        'type' => 'textarea',
                        'label' => __('CTA Text', 'em'),
                        'placeholder' => __('CTA Content', 'em'),
                        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare mi non amet.', 'em',
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.em-cta-text p'
                        ]
                    ],
                    'lh_cta_link' => [
                        'type' => 'link',
                        'label' => __('CTA Link URL', 'em'),
                        'placeholder' => __('https://google.com', 'em'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.em-cta-btn a'
                        ]
                    ],
                    'lh_cta_link_text' => [
                        'type' => 'textarea',
                        'label' => __('CTA Link Text', 'em'),
                        'default' => "View Details",
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.em-cta-btn a'
                        ]
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
                    'lh_cta_bg' => [
                        'type' => 'color',
                        'label' => __('CTA Background', 'em'),
                        'default' => 'F8931F',
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-section',
                            'property' => 'background-color',
                        ],
                    ],
                    'lh_cta_padding' => [
                        'type' => 'dimension',
                        'label' => __('CTA Padding', 'em'),
                        'default' => '30',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-section',
                            'property' => 'padding',
                        ],
                    ],
                    'lh_cta_content_color' => [
                        'type' => 'color',
                        'label' => __('CTA Text Color', 'em'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-text p',
                            'property' => 'color',
                        ],
                    ],
                    'lh_cta_content_typography' => [
                        'type' => 'typography',
                        'label' => __('CTA Text Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-text p'
                        ],
                    ],
                    'lh_cta_btn_color' => [
                        'type' => 'color',
                        'label' => __('CTA Button Text Color', 'em'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-btn a',
                            'property' => 'color',
                        ],
                    ],
                    'lh_cta_btn_color_h' => [
                        'type' => 'color',
                        'label' => __('CTA Button Text Hover Color', 'em'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-btn a:hover',
                            'property' => 'color',
                        ],
                    ],
                    'lh_cta_btn_typography' => [
                        'type' => 'typography',
                        'label' => __('CTA Button Text Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-btn a'
                        ],
                    ],
                    'lh_cta_btn_bg' => [
                        'type' => 'color',
                        'label' => __('CTA Button Background Color', 'em'),
                        'responsive' => true,
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-btn a',
                            'property' => 'background-color',
                        ],
                    ],
                    'lh_cta_btn_bg_h' => [
                        'type' => 'color',
                        'label' => __('CTA Button Hover Background Color', 'em'),
                        'responsive' => true,
                        'default' => '283849',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-btn a:hover',
                            'property' => 'background-color',
                        ],
                    ],
                    'lh_cta_btn_padding' => [
                        'type' => 'dimension',
                        'label' => __('CTA Button Padding', 'em'),
                        'default' => '30',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-cta-btn a',
                            'property' => 'padding',
                        ],
                    ],
                ],
            ],
        ],

    ],
]);