<?php
defined("ABSPATH") || exit;

add_shortcode('SE_project_admin_chart' , 'SE_project_admin_chart_function');

function SE_project_admin_chart_function()
{
    if( !is_user_logged_in() ){
        wp_redirect( home_url().'/se_login' );
        exit;
    }elseif(!current_user_can('administrator'))
    {
        wp_redirect( home_url().'/se_login' );
    }
    else
    {
        require_once( plugin_dir_path(__FILE__) . 'shortcodes-content/admin/se_project_admin_chart_content.php' );
    }

}

