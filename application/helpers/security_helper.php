<?php defined('BASEPATH') OR exit('No direct script access allowed');


if (!function_exists('sanitizeData')) {
    function sanitizeData($arr) {
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                // Recursively sanitize nested arrays
                $arr[$key] = sanitizeData($value);
            } else {
                // Sanitize individual values
                $arr[$key] = cleanInput($value);
            }
        }

        return $arr;
    }

    function cleanInput($input) {
        // Remove potential HTML, JavaScript, and PHP tags
        $input = strip_tags($input);

        // Escape special characters to prevent SQL injection
        $input = addslashes($input);

        return $input;
    }
}

?>