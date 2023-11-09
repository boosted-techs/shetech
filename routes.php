<?php
if ( !defined('APPLICATION_LOADED') || !APPLICATION_LOADED ) {
    die(json_encode(array("status" => "fail", "code" => "503", "message" => "Invalid request")));
}
//Less define our simple routes in this file to help us map to the exact methods in our project

$routes = array(
    "/" => "HomeController@index",
    "/contact-us" => "HomeController@contactUs",
    "/about" => "HomeController@about",
    "/projects/digital-skills" => "HomeController@digital",
    "/programs/women-empowement" => "HomeController@women",
    "/programs/girl-child" => "HomeController@girl_child",
    "/projects/nutriotion" => "HomeController@nutriotion",   
    "/about-us" => "HomeController@about_us", 
    "/get-involved" => "HomeController@get_involved", 
    "/donate" => "HomeController@donate", 
    "/projects" => "HomeController@projects", 
    "/our-team" => "HomeController@our_team",
    "/donate-list" => "HomeController@donate_list",
    "/shop" => "HomeController@shop",
    "/programs/health-program" => "HomeController@health_program",
    "/projects/clean-water" =>  "HomeController@cleanWater",
    "/projects/youth-mentorship" => "HomeController@youthMentorship",
    "/send-mail" => "HomeController@sendEmail",
    "/volunteer" => "HomeController@volunteer",
    "/donate-now" => "HomeController@donate",
    );
