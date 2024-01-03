<?php
if ( !defined('APPLICATION_LOADED') || !APPLICATION_LOADED ) {
    die(json_encode(array("status" => "fail", "code" => "503", "message" => "Invalid request")));
}
//Less define our simple routes in this file to help us map to the exact methods in our project

$routes = array(
    "/" => "HomeController@index",
    "/contact-us" => "HomeController@contactUs",
    "/about" => "HomeController@about",

    "/about-us" => "HomeController@about_us", 
    "/get-involved" => "HomeController@get_involved", 
    "/donate" => "HomeController@donate", 

    "/our-team" => "HomeController@our_team",
    "/gawah" => "HomeController@gawah",
    "/send-mail" => "HomeController@sendEmail",
    "/volunteer" => "HomeController@volunteer",
    "/donate-now" => "HomeController@donate",
    );
