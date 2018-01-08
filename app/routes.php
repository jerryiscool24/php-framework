<?php

$routes->get('', 'UsersController@index');
$routes->get('create', 'UsersController@show');
$routes->post('store', 'UsersController@store');
$routes->get('update', 'UsersController@update');