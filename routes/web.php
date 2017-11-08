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

$router->get('/', 'PostController@getPosts');

//Returns to add a post page
$router->get('/add', function () {
    return view('add');
});

$router->post('/add', 'PostController@addPost');
