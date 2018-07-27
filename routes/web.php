<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/members/list', 'MembersController@list');
$router->get('/members/list/{active_status}', 'MembersController@list_active_status');
$router->get('/members/{id}', 'MembersController@detail');

$router->get('/stats/statuses', 'StatisticsController@active_statuses');

$router->get('/locale/list', 'LocalesController@list');
$router->get('/locale/{locale_id}', 'LocalesController@show_locale');