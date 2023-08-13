<?php defined('BASEPATH') OR exit('No direct script access allowed');

defined('MAX_LENGTH') OR define('MAX_LENGTH', 255);

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
        // Truncate input to a safe length to prevent buffer overflow
        $sanitizedInput = substr($input, 0, MAX_LENGTH);
        // Remove potentially harmful characters
        $sanitizedInput = filter_var($sanitizedInput, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
        return $sanitizedInput;
    }
}

?>