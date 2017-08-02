<?php
namespace TSIPBlocker;

if ( ! defined( 'ABSPATH' ) ) exit;

class Util {
    public static function hasWoocommerce() {
        return in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')));
    }

    public static function hasMfes() {
        return in_array('mcafeesecure/mcafeesecure.php', apply_filters('active_plugins', get_option('active_plugins')));
    }

 	public static function getBaseURL(){
        return plugins_url() . '/ts-ip-blocker';
    }

    public static function isIPv6($ip_address) {
        return !!filter_var($ip_address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
    }

    public static function isIPv4($ip_address) {
        return !!filter_var($ip_address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    }

    public static function isHostname($hostname){
        $parsed = parse_url($hostname);
        return !!$parsed;
    }

    public static function getAdminEmail(){
        return get_option("admin_email");
    }

    public static function getHost(){
        $arrHost = parse_url(home_url('', $scheme = 'http'));
        return $arrHost['host'];
    }

    public static function getAdminPostUrl(){
        return admin_url('admin-post.php');
    }

    public static function getAdminUrl(){
        return admin_url();
    }
}
?>