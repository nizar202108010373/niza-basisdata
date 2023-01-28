<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->group(['prefix' => 'api'], function() use ($router){
    
    // toko
    $router->get('/toko' , ['uses' => 'TokoController@index'] );
    $router->post('/toko' , ['uses' => 'TokoController@create'] );
    $router->get('/toko/{id}', ['uses' => 'TokoController@show'] );
    $router->put('/toko/{id}', ['uses' => 'TokoController@update'] );
    $router->delete('/toko/{id}', ['uses' => 'TokoController@destroy'] );

    // supplier
    $router->get('/supplier' , ['uses' => 'SupplierController@index'] );
    $router->post('/supplier' , ['uses' => 'SupplierController@create'] );
    $router->get('/supplier/{id}', ['uses' => 'SupplierController@show'] );
    $router->put('/supplier/{id}', ['uses' => 'SupplierController@update'] );
    $router->delete('/supplier/{id}', ['uses' => 'SupplierController@destroy'] );
});