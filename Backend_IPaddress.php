<?php

class IPADDRESS {
    private static function get_user_agent() {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public static function get_ip() {
        $mainip = '';
        if (getenv('HTTP_CLIENT_IP'))
            $mainip = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARD_FOR'))
            $mainip = getenv('HTTP_X_FORWARD_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $mainip = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $mainip = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $mainip = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $mainip = getenv('REMOTE_ADDR');
        else
            $mainip = 'UNKNOWN';
        return $mainip;
    }

    public static function get_os() {
        $user_agent = self::get_user_agent();
        $os_platform = "Unknown OS platform";
        $os_array = array(
            '/windows nt 10/i'  => 'Windows 10',
            // Add more OS patterns as needed
        );

        foreach ($os_array as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $os_platform = $value;
                break;
            }
        }

        return $os_platform;
    }

    public static function get_browser() {
        $user_agent = self::get_user_agent();
        $browser = "UNKNOWN Browser";
        $browser_array = array(
            '/chrome/i'  => 'Chrome',
            // Add more browser patterns as needed
        );

        foreach ($browser_array as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $browser = $value;
                break;
            }
        }

        return $browser;
    }
}
?>
