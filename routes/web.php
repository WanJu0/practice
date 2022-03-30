<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Database\Eloquent\Model;

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

$router->get('/', function () {
    return 'index';
});

$router->get('/practice1', function () {
    return view('Practice_1');
});

