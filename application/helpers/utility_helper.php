<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * File to hold utility functions used in the application
 * @author: Ashiqur Rahman
 * @url: http://ghumkumar.com
 **/

if(!function_exists('assets_url')) {

    /**
     * @param string $path
     * @return string
     */
    function assets_url($path = '') {
        $return_url = base_url() . 'assets/';
        if(strlen($path) > 0) {
            $return_url .= $path;
        }
        return $return_url;
    }
}