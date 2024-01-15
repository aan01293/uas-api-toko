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

//generate app key
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

$router->group(['prefix' => 'api'], function() use ($router) {
    //produk    
    $router->get('/produk', 'produkController@index');
    $router->get('/produk/{id}', 'produkController@show');
    $router->post('/produk', 'produkController@store');
    $router->put('/produk/{id}', 'produkController@update');
    $router->delete('/produk/{id}', 'produkController@destroy');
    //kategori produk
     
    $router->get('/kategoriproduk', 'kategoriprodukController@index');
    $router->get('/kategoriproduk/{id}', 'kategoriprodukController@show');
    $router->post('/kategoriproduk', 'kategoriprodukController@store');
    $router->put('/kategoriproduk/{id}', 'kategoriprodukController@update');
    $router->delete('/kategoriproduk/{id}', 'kategoriprodukController@destroy');
});