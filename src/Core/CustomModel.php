<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function getPdfFromUrl($param, &$blockCustom, $vendorUrl){
        $result['query']['access_key'] = $param['access_key'];
        $result['query']['document_url'] = urlencode($param['document_url']);

        return $result;
    }
    public static function getPdfFromHTML($param, &$blockCustom, $vendorUrl){
        $result['query']['access_key'] = $param['access_key'];
        $result['form_params']['document_html'] = file_get_contents($param['document_html']);

        return $result;
    }
}