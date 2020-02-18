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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaires/create', 'QuestionnaireController@create')->name('questionnaire.create');
Route::post('/questionnaires', 'QuestionnaireController@store')->name('questionnaire.store');
Route::get('/questionnaires/{questionnaire}', 'QuestionnaireController@show')->name('questionnaire.show');

Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create')->name('questionnaire.question.create');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store')->name('questionnaire.question.store');

Route::get('/surveys/{questionnaire}-{slug}','SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}','SurveyController@store');
