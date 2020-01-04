<?php
	if (!defined('ABSPATH')) exit;
/*
    Plugin Name: Agro Cal
    Plugin URI: http://www.lsoft.info/ntlazarova/
    description: Agro Cal
    Version: 0.0.1
    Author: Nedialka Lazarova
    Author URI: http://www.lsoft.info/ntlazarova/
    License: GPL2
*/

class AgroCalPlugin{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'adminMenu'));
        add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));
        add_action('admin_post', array($this, 'save'));
        add_shortcode('agro-cal-plugin', array($this, 'shortcodeAction'));
}
    public function adminMenu()
    {
            add_options_page(
            'Agro Cal Administration Page',
            'Agro Cal',
            'manage_options',
            'agro-cal-admin-page',
            array($this, 'renderPage')
        );
    }

    public function renderPage()
    {
        include_once 'views/admin-page.php';
    }

    public function enqueueScripts()
    {
        wp_enqueue_style('agro-cal-plugin-styles', plugins_url('assets/styles.css', __FILE__));
    }

    public function shortcodeAction()
    {
        ob_start();
        include_once 'views/frontend-page.php';
        $html = ob_get_contents();
        ob_end_clean();
        return $html; 
    }

    public function save()
    {
        // First, validate the nonce and verify the user as permission to save.
        if (!($this->has_valid_nonce() && current_user_can('manage_options'))) {
            echo 'Not a valid nonce';
        }
        if (isset($_POST['agro-cal-admin-form'])) {
            $data = array(
                'gm_code' => $_POST['gm_code'],
                'name_table' => sanitize_text_field($_POST['name_table']),
                'table_info' => sanitize_text_field($_POST['table_info']),                
                
                'plant' => sanitize_text_field($_POST['plant']),
                'pltime' => sanitize_text_field($_POST['pltime']),
                'plant2' => sanitize_text_field($_POST['plant2']),
                'pltime2' => sanitize_text_field($_POST['pltime2']),
                'plant3' => sanitize_text_field($_POST['plant3']),
                'pltime3' => sanitize_text_field($_POST['pltime3']),
                'plant4' => sanitize_text_field($_POST['plant4']),
                'pltime4' => sanitize_text_field($_POST['pltime4']),
            );
            update_option('agro-cal-data', json_encode($data));
        }
        $this->redirect();
    }

    public function getOption($name) //email
    {
        $data = get_option('agro-cal-data');
        if (empty($data)) {
            return false;
        }
        $data = json_decode($data);
        if (isset($data->$name)) {
            return stripslashes($data->$name);
        }
        return false;
    }

    private function has_valid_nonce()
    {
        // If the field isn't even in the $_POST, then it's invalid.
        if (!isset($_POST['agro-cal-message'])) {
            return false;
        }
        $field  = wp_unslash($_POST['agro-cal-message']);
        $action = 'agro-cal-save';
        return wp_verify_nonce($field, $action);
    }

    private function redirect()
    {
        // To make the Coding Standards happy, we have to initialize this.
        if (!isset($_POST['_wp_http_referer'])) {
            $_POST['_wp_http_referer'] = wp_login_url();
        }
        // Sanitize the value of the $_POST collection for the Coding Standards.
        $url = sanitize_text_field(
            wp_unslash($_POST['_wp_http_referer'])
        );
        // Finally, redirect back to the admin page.
        wp_safe_redirect($url);
        exit;
    }

}
$agroCalPlugin = new AgroCalPlugin();