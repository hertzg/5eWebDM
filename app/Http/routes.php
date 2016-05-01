<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/sheet', function () {
  $faker = Faker\Factory::create();
  return view('sheet', [
    'name' => $faker->name,
    'classes' => [
      ['name' => 'Druid', 'level' => 8]
    ],
    'background' => [
      'name' => 'Hermit'
    ],
    'player' => [
      'name' => 'Hertz'
    ],
    'race' => [
      'name' => 'Half-Elf'
    ],
    'alignment' => 'Chaotic Neutral',
    'experience' => $faker->numberBetween(3000, 8304),
    'stats' => [
      'str' => 16,
      'dex' => 15,
      'con' => 14,
      'int' => 12,
      'wis' => 10,
      'cha' => 8
    ],
    'inspiration' => '1d6',
    'proficiency' => $faker->numberBetween(2, 10)
  ]);
});