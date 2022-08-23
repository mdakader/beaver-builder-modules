<?php

/**
 * Services Module
 * setup necessary to get it working.
 *
 * @class LHServices
 */
class LHServices extends FLBuilderModule
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
            'name' => __('Services', 'em'),
            'description' => __('Lemon hive services', 'em'),
            'category' => __('Easy Modules', 'em'),
            'dir' => EASY_MODULE_DIR . 'modules/em-services/',
            'url' => EASY_MODULE_URL . 'modules/em-services/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);
      $this->add_css( 'bootstrap' );
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHServices', [
    'general' => [ // Tab
        'title' => __('General', 'em'), // Tab title
        'sections' => [ // Tab section
            'general' => [  // Section
                'title' => __('Content', 'em'), // Section title
                'fields' => [ // Section fields
                    'lh_service_items' => [
                        'type' => 'form',
                        'label' => __('Service', 'em'),
                        'form' => 'lh_services_form',
                        'preview_text' => 'label',
                        'multiple' => true,
                    ],
                    'lh_service_column' => [
                      'type'          => 'select',
                      'label'         => __( 'Select Column', 'em' ),
                      'default'       => 'option-1',
                      'options'       => [
                        'col-lg-6 col-md-6 col-sm-12'      => __( 'Column-02', 'em' ),
                        'col-lg-4 col-md-6 col-sm-12'      => __( 'Column-03', 'em' )
                        ],
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
                    'lh_s_title_color' => [
                        'type' => 'color',
                        'label' => __('Service Title Text Color', 'em'),
                        'responsive' => true,
                        'default' => '283849',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-content h4',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_title_color_h' => [
                        'type' => 'color',
                        'label' => __('Service Title Text Hover Color', 'em'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-single-item:hover .em-service-content h4',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Service Title Text Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-content h4'
                        ],
                    ],
                    'lh_s_desc_color' => [
                        'type' => 'color',
                        'label' => __('Service Description Text Color', 'em'),
                        'responsive' => true,
                        'default' => '304254',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-content p',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_desc_color_h' => [
                        'type' => 'color',
                        'label' => __('Service Description Text Hover Color', 'em'),
                        'responsive' => true,
                        'default' => 'FFFFFF',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-single-item:hover .em-service-content p',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_desc_typography' => [
                        'type' => 'typography',
                        'label' => __('Service Description Text Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-content p'
                        ],
                    ],
                    'lh_s_icon_font_color' => [
                        'type' => 'color',
                        'label' => __('Icon Color', 'em'),
                        'default' => 'F8931F',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-icon-circle i',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_icon_font_color_h' => [
                        'type' => 'color',
                        'label' => __('Icon Hover Color', 'em'),
                        'default' => 'FFFFFF',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-single-item:hover .em-service-icon-circle i',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_icon_font_size' => [
                        'type' => 'unit',
                        'label' => __('Icon Size', 'em'),
                        'default' => '40',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-icon-circle i',
                            'property' => 'font-size',
                            'unit' => 'px',
                        ],
                    ],
                    'lh_s_btn_color' => [
                        'type' => 'color',
                        'label' => __('Service Button Text Color', 'em'),
                        'responsive' => true,
                        'default' => 'F8931F',
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'a.em-service-more-btn',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_btn_color_h' => [
                        'type' => 'color',
                        'label' => __('Service Button Text Hover Color', 'em'),
                        'responsive' => true,
                        'default' => 'FFFFFF',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-single-item:hover a.em-service-more-btn',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_btn_typography' => [
                        'type' => 'typography',
                        'label' => __('Service Button Text Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'a.em-service-more-btn'
                        ],
                    ],
                    'lh_service_b_color' => [
                        'type' => 'color',
                        'label' => __('Service Border Color', 'em'),
                        'responsive' => true,
                        'default' => 'E4E6F5',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-single-item',
                            'property' => 'border-color',
                        ],
                    ],
                    'lh_service_b_color_h' => [
                        'type' => 'color',
                        'label' => __('Service Border Hover Color', 'em'),
                        'responsive' => true,
                        'default' => 'F8931F',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-single-item:hover',
                            'property' => 'border-color',
                        ],
                    ],
                    'lh_service_padding' => [
                        'type' => 'dimension',
                        'label' => __('Service Single Item', 'em'),
                        'default' => '30',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-single-item',
                            'property' => 'padding',
                        ],
                    ],
                    'lh_service_bg' => [
                        'type' => 'color',
                        'label' => __('Service Single Item Background Color', 'em'),
                        'default' => 'FFFFFF',
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-single-item',
                            'property' => 'background-color',
                        ],
                    ],
                    'lh_service_bg_h' => [
                        'type' => 'color',
                        'label' => __('Service Single Item Background Hover Color', 'em'),
                        'default' => 'F8931F',
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-service-single-item:hover',
                            'property' => 'background-color',
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
FLBuilder::register_settings_form('lh_services_form', [
    'title' => __('Add service', 'em'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'em'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_service_icon' => [
                            'type' => 'icon',
                            'label' => __('Select Icon', 'em'),
                            'default' => 'fas fa-blog',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-service-icon-circle i'
                            ]
                        ],
                        'lh_service_title' => [
                            'type' => 'textarea',
                            'label' => __('Title', 'em'),
                            'placeholder' => __('Web Services', 'em'),
                            'default' => __('Web Services', 'em'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-service-single-item h4'
                            ]
                        ],
                        'lh_service_content' => [
                            'type' => 'editor',
                            'label' => __('Web Services Short Description', 'em'),
                            'placeholder' => __('Web services short description', 'em'),
                            'default' => __('Web services short description', 'em'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-service-single-item p'
                            ]
                        ],
                        'lh_service_link' => [
                            'type' => 'link',
                            'label' => __('Service Link URL', 'em'),
                            'placeholder' => __('https://google.com', 'em'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => 'a.em-service-more-btn'
                            ]
                        ],
                        'lh_service_link_text' => [
                            'type' => 'textarea',
                            'label' => __('Service Link Button Text', 'em'),
                            'default' => "View details",
                            'preview' => [
                                'type' => 'text',
                                'selector' => 'a.em-service-more-btn'
                            ]
                        ],
                        'lh_service_view_icon' => [
                            'type' => 'icon',
                            'label' => __('View More Icon', 'em'),
                            'default' => 'fas fa-arrow-right',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-service-icon-circle i'
                            ]
                        ],
                    ],
                ],
            ],
        ],
    ],
]);