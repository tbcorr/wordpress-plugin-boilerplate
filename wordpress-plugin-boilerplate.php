<?php

/**
 * Plugin Name: WordPress Plugin Boilerplate.
 * Description: WordPress plugin boilerplate.
 * Version: 0.1.0
 * Author: tbcorr
 * Author URI: http://www.timcorr.com
 */

namespace Plugin;

class Plugin {

    private static $instance = null;

    private function __construct(){

        $this->setup_autoload();

        $this->setup_actions();
        $this->setup_filters();
    }

    public static function instance(){

        if( self::$instance === null ){

            self::$instance = new Plugin();
        }

        return self::$instance;
    }

    public static function get_plugin_dir(){

        return plugin_dir_path( __FILE__ );
    }

    public static function get_plugin_url(){

        return plugin_dir_url( __FILE__ );
    }

    public static function get_css_url(){

        return self::get_plugin_url() . 'css/';
    }

    public static function get_js_url(){

        return self::get_plugin_url() . 'js/';
    }

    public static function get_vendor_dir(){

        return self::get_plugin_dir() . 'vendor/';
    }

    private function setup_autoload(){

        $autoloader = self::get_vendor_dir() . 'autoload.php';

        if( file_exists( $autoloader ) ){

            require_once( $autoloader );
        }
    }

    private function setup_actions(){

    }

    private function setup_filters(){

    }
}

Plugin::instance();