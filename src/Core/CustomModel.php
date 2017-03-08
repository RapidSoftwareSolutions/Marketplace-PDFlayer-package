<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function getPdfFromUrl($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function getPdfFromHTML($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
}