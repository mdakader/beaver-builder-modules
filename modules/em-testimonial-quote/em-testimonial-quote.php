<?php

/**
 * Testimonial Quote Module
 * setup necessary to get it working.
 *
 * @class LHTestimonialQuote
 */
class LHTestimonialQuote extends FLBuilderModule
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
            'name' => __('Testimonial Quote', 'em'),
            'description' => __('This is for Testimonial Quote Module', 'em'),
            'category' => __('Easy Modules', 'em'),
            'dir' => EASY_MODULE_DIR . 'modules/em-testimonial-quote/',
            'url' => EASY_MODULE_URL . 'modules/em-testimonial-quote/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);

        /**
         * Use these methods to enqueue css and js already
         * Already registered
         */
        $this->add_css('slick');
        $this->add_js('slick');
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHTestimonialQuote', [
    'general' => [ // Tab
        'title' => __('General', 'em'), // Tab title
        'sections' => [ // Tab section
            'general' => [ // Section
                'title' => __('Content', 'em'), // Section title
                'fields' => [ // Section fields
                    'lh_testimonial_slides' => [
                        'type' => 'form',
                        'label' => __('Testimonial', 'em'),
                        'form' => 'lh_testimonial_slider',
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
                    'lh_slide_to_show' => [
                        'type' => 'text',
                        'label' => __('Slide To Show', 'em'),
                        'default' => '2',
                    ],
                    'lh_slide_to_scroll' => [
                        'type' => 'text',
                        'label' => __('Slide To Scroll', 'em'),
                        'default' => '1',
                    ],
                    'lh_dots' => [
                        'type' => 'select',
                        'label' => __('Show Dots?', 'em'),
                        'default' => 'true',
                        'options' => [
                            'true' => __('Yes', 'em'),
                            'false' => __('No', 'em'),
                        ]
                    ],
                    'lh_arrows' => [
                        'type' => 'select',
                        'label' => __('Show Arrows?', 'em'),
                        'default' => 'false',
                        'options' => [
                            'true' => __('Yes', 'em'),
                            'false' => __('No', 'em'),
                        ]
                    ],
                    'lh_autoplay' => [
                        'type' => 'select',
                        'label' => __('Autoplay?', 'em'),
                        'default' => 'true',
                        'options' => [
                            'true' => __('Yes', 'em'),
                            'false' => __('No', 'em'),
                        ]
                    ],
                    'lh_autoplay_speed' => [
                        'type' => 'text',
                        'label' => __('Autoplay Speed', 'em'),
                        'default' => '3000',
                    ],
                    'lh_speed' => [
                        'type' => 'text',
                        'label' => __('Speed', 'em'),
                        'default' => '2000',
                    ],
                    'lh_dots_color' => [
                        'type' => 'color',
                        'label' => __('Slide Dots Color', 'em'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-testimonial-quotes button',
                            'property' => 'color'
                        ]
                    ],
                    'lh_dots_active_color' => [
                        'type' => 'color',
                        'label' => __('Slide Active Dots Color', 'em'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-testimonial-quotes li.slick-active button',
                            'property' => 'color'
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
                'title' => __('Style', 'em'),
                'fields' => [
                    'lh_box_item_bg' => [
                        'type' => 'color',
                        'label' => __('Testimonial Box Background', 'em'),
                        'default' => 'FFFFFF',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-testimonial-item .em-testimonial-content',
                            'property' => 'background'
                        ]
                    ],
                    'lh_testimonial_padding' => [
                        'type' => 'dimension',
                        'label' => __('Content padding', 'em'),
                        'default' => '30',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-testimonial-item .em-testimonial-content',
                            'property' => 'padding',
                        ],
                    ],
                    'lh_icon_color' => [
                        'type' => 'color',
                        'label' => __('Icon Color', 'em'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-testimonial-content .em-testimonial-icon i',
                            'property' => 'color'
                        ]
                    ],
                    'lh_icon_font_size' => [
                        'type' => 'unit',
                        'label' => __('Icon Size', 'em'),
                        'default' => '24',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-testimonial-content .em-testimonial-icon i',
                            'property' => 'font-size',
                            'unit' => 'px',
                        ],
                    ],
                    'lh_desc_color' => [
                        'type' => 'color',
                        'label' => __('Testimonial Description Text Color', 'em'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-testimonial-item .testimonial-description',
                            'property' => 'color'
                        ]
                    ],
                    'lh_desc_typography' => [
                        'type' => 'typography',
                        'label' => __('Testimonial Description Text Typography', 'em'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-testimonial-item .testimonial-description',
                        ],
                        'responsive' => true
                    ],
                    'lh_name_color' => [
                        'type' => 'color',
                        'label' => __('Name Text Color', 'em'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.testimonial-meta .testimonial-meta-name',
                            'property' => 'color'
                        ]
                    ],
                    'lh_name_typography' => [
                        'type' => 'typography',
                        'label' => __('Name Text Typography', 'em'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.testimonial-meta .testimonial-meta-name',
                        ],
                        'responsive' => true
                    ],
                    'lh_post_color' => [
                        'type' => 'color',
                        'label' => __('Title Text Color', 'em'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.testimonial-meta .testimonial-meta-post',
                            'property' => 'color'
                        ]
                    ],
                    'lh_post_typography' => [
                        'type' => 'typography',
                        'label' => __('Title Text Typography', 'em'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.testimonial-meta .testimonial-meta-post',
                        ],
                        'responsive' => true
                    ],
                ],
            ],
        ],
    ],
]);

/**
 * Register the module and its form settings.
 */
FLBuilder::register_settings_form('lh_testimonial_slider', [
    'title' => __('Stack Slide', 'em'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'em'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_t_icon' => [
                            'type' => 'icon',
                            'label' => __('Quote Icon', 'em'),
                            'default' => 'fa fa-star',
                            'preview' => [
                                'type' => 'none',
                            ],
                        ],
                        'lh_star' => [
                            'type' => 'select',
                            'label' => __('Show Stars', 'em'),
                            'default' => '5',
                            'options' => [
                                '1' => __('1', 'em'),
                                '2' => __('2', 'em'),
                                '3' => __('3', 'em'),
                                '4' => __('4', 'em'),
                                '5' => __('5', 'em'),
                            ]
                        ],
                        'lh_t_desc' => [
                            'type' => 'textarea',
                            'label' => __('Testimonial Description', 'em'),
                            'placeholder' => __('Testimonial description', 'em'),
                            'default' => 'Feugiat donec tempor ac mauris pulvinar aliquam in aliquam. Id at urna, elementum nunc libero. Sit nunc, neque viverra ac felis cursus amet in quis.',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-tech-title h3',
                            ],
                        ],
                        'lh_t_name' => [
                            'type' => 'textarea',
                            'label' => __('Name', 'em'),
                            'placeholder' => __('Name', 'em'),
                            'default' => 'John doe',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-tech-title h3',
                            ],
                        ],
                        'lh_t_title' => [
                            'type' => 'textarea',
                            'label' => __('Designation', 'em'),
                            'placeholder' => __('Designation', 'em'),
                            'default' => 'UI/UX Designer',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.em-tech-title h3',
                            ],
                        ],                        
                        'lh_t_photo' => [
                            'type' => 'photo',
                            'label' => __('Customer Photo', 'em'),
                            'show_remove'   => true,
                        ],
                    ],
                ],
            ],
        ],
    ],
]);




