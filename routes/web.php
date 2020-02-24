<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

// Vacancies
Route::get('/vacancies', 'VacanciesController@index');
Route::get('/vacancies/create', 'VacanciesController@create');
Route::post('/vacancies', 'VacanciesController@store');
// Route::post('/vacancies', 'VacanciesController@store');

// Skills
Route::get('/skills', 'SkillsController@index');
Route::get('/skills/create', 'SkillsController@create');
Route::post('/skills', 'SkillsController@store');
// Route::post('/skils', 'SkillsController@store');

