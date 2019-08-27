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

$router->get('/key', function() {
    return str_random(32);
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('regions',  ['uses' => 'RegionController@index']);

  $router->get('regions/{id}', ['uses' => 'RegionController@show']);


  //departements
  $router->get('departements',  ['uses' => 'DepartementController@index']);

  $router->get('departements/{id}', ['uses' => 'DepartementController@show']);


  //arrondissements
  $router->get('arrondissements',  ['uses' => 'ArrondissementController@index']);

  $router->get('arrondissements/{id}', ['uses' => 'ArrondissementController@show']);


  //communes
  $router->get('communes',  ['uses' => 'CommuneController@index']);

  $router->get('communes/{id}', ['uses' => 'CommuneController@show']);


  //elus
  $router->get('elus',  ['uses' => 'EluController@index']);

  $router->get('elus/{id}', ['uses' => 'EluController@show']);

});

$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {

  $router->post('regions', ['uses' => 'RegionController@create']);

  $router->delete('regions/{id}', ['uses' => 'RegionController@delete']);

  $router->put('regions/{id}', ['uses' => 'RegionController@update']);

  //departements

  $router->post('departements', ['uses' => 'DepartementController@create']);

  $router->delete('departements/{id}', ['uses' => 'DepartementController@delete']);

  $router->put('departements/{id}', ['uses' => 'DepartementController@update']);


  //arrondissements

  $router->post('arrondissements', ['uses' => 'ArrondissementController@create']);

  $router->delete('arrondissements/{id}', ['uses' => 'ArrondissementController@delete']);

  $router->put('arrondissements/{id}', ['uses' => 'ArrondissementController@update']);

  //communes

  $router->post('communes', ['uses' => 'CommuneController@create']);

  $router->delete('communes/{id}', ['uses' => 'CommuneController@delete']);

  $router->put('communes/{id}', ['uses' => 'CommuneController@update']);

  //elus

  $router->post('elus', ['uses' => 'EluController@create']);

  $router->delete('elus/{id}', ['uses' => 'EluController@delete']);

  $router->put('elus/{id}', ['uses' => 'EluController@update']);
});
