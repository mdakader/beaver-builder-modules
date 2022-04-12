<?php

/**
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 */
class Easy_Module_Loader
{

    /**
     * Initializes the class once all plugins have loaded.
     */
    static public function init()
    {
        add_action('plugins_loaded', __CLASS__ . '::setup_hooks');
    }

    /**
     * Setup hooks if the builder is installed and activated.
     */
    static public function setup_hooks()
    {
        if (!class_exists('FLBuilder')) {
            return;
        }

        // Load custom modules.
        add_action('init', __CLASS__ . '::load_modules');


        // Enqueue Script and Style
        add_action('wp_enqueue_scripts', __CLASS__ . '::em_modules_assets');
    }

    /**
     * Loads our custom modules.
     */
    static public function load_modules()
    {
        require_once EASY_MODULE_DIR . 'modules/em-gallery/em-gallery.php';
    }


    /**
     * Enqueues custom field assets
     */

    static public function em_modules_assets()
    {
        wp_register_style('justifiedGallery', EASY_MODULE_URL . 'assets/css/justifiedGallery.min.css', [], '2.5.0');
        wp_register_style('venobox', EASY_MODULE_URL . 'assets/css/venobox.css', [], '2.0.4');
        wp_register_script('justifiedGallery', EASY_MODULE_URL . 'assets/js/jquery.justifiedGallery.js', ['jquery'], '2.5.0', true);
        wp_register_script('venobox', EASY_MODULE_URL . 'assets/js/venobox.js', ['jquery'], '2.0.4', true);
    }
}

Easy_Module_Loader::init();