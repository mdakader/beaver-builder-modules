<?php

/**
 * Team Module
 * setup necessary to get it working.
 *
 * @class LHTeam
 */
class LHTeam extends FLBuilderModule
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
            'name'              => __('Team', 'em'),
            'description'       => __('Lemon hive Team', 'em'),
            'category'          => __('Easy Modules', 'em'),
            'dir'               => EASY_MODULE_DIR . 'modules/em-team/',
            'url'               => EASY_MODULE_URL . 'modules/em-team/',
            'icon'              => 'team.svg',
            'editor_export'     => true, // Defaults to true and can be omitted.
            'enabled'           => true, // Defaults to true and can be omitted.
            'partial_refresh'   => true,
        ]);
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHTeam', [
    'general' => [ // Tab
        'title' => __('General', 'em'), // Tab title
        'sections' => [ // Tab section
            'general' => [ // Section
                'title' => __('Content', 'em'), // Section title
                'fields' => [ // Section fields
                    'lh_team_items' => [
                        'type' => 'form',
                        'label' => __('Team', 'em'),
                        'form' => 'lh_team_form',
                        'preview_text' => 'label',
                        'multiple' => true,
                    ],                    
                ],
            ],
            'settings' => [ // Section
                'title' => __('Settings', 'em'), // Section title
                'fields' => [ // Section fields
                    'lh_team_columns' => [
                        'type'        => 'select',
                        'label'       => __( 'Team Column', 'em' ),
                        'responsive'  => true,
                        'default'     => '4',
                        'options'     => [
                            '6'       => __( '2 Column', 'em' ),
                            '4'       => __( '3 Column', 'em' ),
                            '3'       => __( '4 Column', 'em' ),
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
                    'lh_team_name_color' => [
                        'type' => 'color',
                        'label' => __('Team Name Text Color', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-team-content h4',
                            'property' => 'color',
                        ],
                        'show_reset'    => true,
                        'default' => '283849'
                    ],
                    'lh_team_name_typography' => [
                        'type' => 'typography',
                        'label' => __('Team Name Text Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-team-content h4'
                        ],
                    ],
                    'lh_team_position_color' => [
                        'type' => 'color',
                        'label' => __('Team Position Text Color', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => '.em-team-content p'
                        ],
                        'show_reset'    => true,
                        'default' => 'F8931F'
                    ],
                    'lh_team_position_typography' => [
                        'type' => 'typography',
                        'label' => __('Team Position Text Typography', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-team-content p'
                        ],
                    ],                    
                    'lh_team_image_overlay' => [
                        'type' => 'color',
                        'label' => __('Team Image Overlay', 'em'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-team-image::after',
                            'property' => 'background-color',
                        ],
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '2c3e50'
                    ],
                    'team_s_icon_size' => [
                        'type' => 'unit',
                        'label' => __('Social Icon Size', 'em'),
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-team-social-btn',
                            'property' => 'font-size',
                            'unit' => 'px',
                        ],
                    ],
                    'lh_team_padding' => [
                        'type' => 'dimension',
                        'label' => __('Team Content', 'em'),
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.em-team-content',
                            'property' => 'padding',
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
FLBuilder::register_settings_form('lh_team_form', [
    'title' => __('Add team', 'em'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'em'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_team_photo' => [
                            'type' => 'photo',
                            'label' => __('Select Team Photo', 'em'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => ''
                            ]
                        ],
                        'lh_team_name' => [
                            'type' => 'textarea',
                            'label' => __('Name', 'em'),
                            'placeholder' => __('Name', 'em'),
                            'default' => __('Name', 'em'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => ''
                            ]
                        ],
                        'lh_team_position' => [
                            'type' => 'textarea',
                            'label' => __('Position', 'em'),
                            'placeholder' => __('Position', 'em'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => ''
                            ]
                        ],
                        'lh_team_social_items' => [
                            'type' => 'form',
                            'label' => __('Social Icons', 'em'),
                            'form' => 'lh_team_social_form',
                            'preview_text' => 'label',
                            'multiple' => true,
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
FLBuilder::register_settings_form('lh_team_social_form', [
    'title' => __('Add social', 'em'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'em'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_team_social_link' => [
                            'type' => 'link',
                            'label' => __('Team Social Link URL', 'em'),
                            'placeholder' => __('https://facebook.com', 'em'),
                            'preview' => [
                                'type' => 'none',
                            ]
                        ],
                        'lh_social_icon' => [
                            'type' => 'icon',
                            'label' => __('Select Team Social Icon', 'em'),
                            'preview' => [
                                'type' => 'none',
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
                    'title' => '',
                    'fields' => [                        
                        'lh_team_icon_color' => [
                            'type' => 'color',
                            'label' => __('Team Social Icon Color', 'em'),
                            'preview' => [
                                'type' => 'css',
                                'property' => 'color',
                                'selector' => 'a.em-team-social-btn i'
                            ],
                            'show_reset'    => true,
                        ],
                        'lh_team_icon_color_h' => [
                            'type' => 'color',
                            'label' => __('Team Social Icon Hover Color', 'em'),
                            'preview' => [
                                'type' => 'css',
                                'property' => 'color',
                                'selector' => 'a.em-team-social-btn:hover i'
                            ],
                            'show_reset'    => true,
                        ],
                        'lh_team_icon_bg' => [
                            'type' => 'color',
                            'label' => __('Team Social Icon Background Color', 'em'),
                            'preview' => [
                                'type' => 'css',
                                'selector' => '.em-team-social-btn',
                                'property' => 'background-color',
    
                            ],
                            'show_reset'    => true,
                        ],
                        'lh_team_icon_bg_h' => [
                            'type' => 'color',
                            'label' => __('Team Social Icon Background Hover Color', 'em'),
                            'preview' => [
                                'type' => 'css',
                                'selector' => '.em-team-social-btn:hover',
                                'property' => 'background-color',
                            ],
                            'show_reset'    => true,
                        ],
                    ],
                ],
            ],
        ],
    ],
]);