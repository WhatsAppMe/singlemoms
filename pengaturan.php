<?php 
   /*
   | -------------------------------------------------------------------------------
   | Author            : G-Silvers
   | Template Name     : G-Silvers Landing Page
   | -------------------------------------------------------------------------------
   */
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);
    /*
    |--------------------------------------------------------------------------
    | Website Linkoffer,
    |--------------------------------------------------------------------------
    */
$linkOffer    = 'https://www.briiilantsdate.com/?utm_source=da57dc555e50572d&s1=74105&s2=1209684&s3=BUEDJO&click_id=Buedjo&ban=other&j1=1'; // Untuk Link Offer Anda contoh //hlock.com/ref=345346




   /* |--------------------------------------------------------------------------
    | DO NOT MODIFY OPTIONS BELOW. UNTIL YOU KNOW WHAT ARE YOU DOING.
    |--------------------------------------------------------------------------
    */
$ip = $_SERVER['HTTP_CLIENT_IP'];
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));
$url_web = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URL]";

define('TOPPATH', $_SERVER['DOCUMENT_ROOT'] );
