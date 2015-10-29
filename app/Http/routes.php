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

$app->get('/', ['as'=>'welcome','uses'=>'Controller@index']);
$app->get('/page/{slug:.*}', ['as'=>'page','uses'=>'Controller@page']);
$app->get('/post/{slug:.*}', ['as'=>'article','uses'=>'Controller@article']);


