<?php

/*
Plugin Name: پلاگین پنل کاربری پیشرفته
Plugin URI: https://owebra.com/plugins/wp-expert-panel
Description: پلاگین پنل کاربری پیشرفته
Author: Amirhosein Soltani
Version: 1.0.0
Licence: GPLv2 or Later
Author URI: https://owebra.com/resume
*/

defined('ABSPATH') || exit;

class WepCore
{
    public function __construct()
    {
        $this->define_constants();
        $this->init();
    }
    private function define_constants()
    {
        define('WEP_PLUGIN_DIR', plugin_dir_path(__FILE__));
        define('WEP_PLUGIN_URL', plugin_dir_url(__FILE__));
        define('WEP_PLUGIN_VIEWS', WEP_PLUGIN_DIR . 'view/');
        define('WEP_PLUGIN_ASSETS_STYLE', WEP_PLUGIN_URL . 'assets/css/');
        define('WEP_PLUGIN_ASSETS_JS', WEP_PLUGIN_URL . 'assets/js/');
        define('WEP_PLUGIN_ASSETS_IMG', WEP_PLUGIN_URL . 'assets/img/');
    }
    private function init()
    {
        add_action('wp_enqueue_scripts', [$this, 'wp_wep_register_assets']);

        // Include
        include_once WEP_PLUGIN_DIR . 'class/AutoLoad.php';
        include_once(ABSPATH . 'wp-includes/pluggable.php');
        include_once WEP_PLUGIN_DIR . 'panel/router.php';
    }

    public function wp_wep_register_assets()
    {
        // CSS
        wp_register_style('wep-style', WEP_PLUGIN_URL . '/assets/front/css/style.css', '', '1.0.0');
        wp_enqueue_style('wep-style');

        // JS
        wp_register_script('wep-main-js', WEP_PLUGIN_URL . '/assets/front/js/main.js', ['jquery'], '1.0.0', true);
        wp_enqueue_script('wep-main-js');
    }

    public function is_user_logged_in()
    {
        if (!is_user_logged_in()) {
            wp_redirect(site_url());
        }
    }
}

$core = new WepCore();
$core->is_user_logged_in();
