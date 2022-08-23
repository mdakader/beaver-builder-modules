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
	static public function init() {
		add_action( 'plugins_loaded', __CLASS__ . '::setup_hooks' );
	}
	
	/**
	 * Setup hooks if the builder is installed and activated.
	 */
	static public function setup_hooks() {
		if ( ! class_exists( 'FLBuilder' ) ) {
			return;	
		}
		
		// Load custom modules.
		add_action( 'init', __CLASS__ . '::load_modules' );

        // Enqueue Script and Style
        add_action('wp_enqueue_scripts', __CLASS__ . '::em_modules_assets');
	}
	
	/**
	 * Loads our custom modules.
	 */
	static public function load_modules() {
		require_once EASY_MODULE_DIR . 'modules/em-dual-heading/em-dual-heading.php';
		require_once EASY_MODULE_DIR . 'modules/em-flip-box/em-flip-box.php';
		require_once EASY_MODULE_DIR . 'modules/em-timeline/em-timeline.php';
		require_once EASY_MODULE_DIR . 'modules/em-testimonial-quote/em-testimonial-quote.php';
		require_once EASY_MODULE_DIR . 'modules/em-services/em-services.php';
		require_once EASY_MODULE_DIR . 'modules/em-team/em-team.php';
		require_once EASY_MODULE_DIR . 'modules/em-gallery/em-gallery.php';
		require_once EASY_MODULE_DIR . 'modules/em-cta/em-cta.php';
	}
	

    /**
     * Enqueues custom field assets
     */

    static public function em_modules_assets() {
        wp_register_style( 'bootstrap', EASY_MODULE_URL . 'assets/css/bootstrap.min.css',[],'4.6.0');
        wp_register_script( 'bootstrap', EASY_MODULE_URL . 'assets/js/bootstrap.min.js',['jquery'],'4.6.0', true);
        wp_register_style( 'slick', EASY_MODULE_URL . 'assets/css/slick.css',[],'1.8.1');
        wp_register_style( 'justifiedGallery', EASY_MODULE_URL . 'assets/css/justifiedGallery.min.css',[],'2.5.0');
        wp_register_style( 'magnific', EASY_MODULE_URL . 'assets/css/magnific-popup.css',[],'1.5.0');
        wp_register_script( 'slick', EASY_MODULE_URL . 'assets/js/slick.min.js',['jquery'],'1.8.1', true);
        wp_register_script( 'justifiedGallery', EASY_MODULE_URL . 'assets/js/jquery.justifiedGallery.js',['jquery'],'2.5.0', true);
        wp_register_script( 'magnific', EASY_MODULE_URL . 'assets/js/jquery.magnific-popup.js',['jquery'],'1.5.0', true);
        wp_register_style( 'swiper-css', EASY_MODULE_URL . 'assets/css/swiper.min.css',[],'1.8.1');
        wp_register_script( 'slick', EASY_MODULE_URL . 'assets/js/slick.min.js',['jquery'],'1.8.1', true);
        wp_register_script( 'swiper-js', EASY_MODULE_URL . 'assets/js/swiper.min.js',['jquery'],'8.1.0', false);
    }
}

Easy_Module_Loader::init();