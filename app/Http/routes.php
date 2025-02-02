<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$router->get('/', "DemoController@welcome");

foreach(config('demo.navigation') as $item) {
    $router->get("/{$item['uri']}", "DemoController@{$item['uri']}");
}
