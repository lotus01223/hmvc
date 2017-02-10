<?php 

/*
|--------------------------------------------------------------------------
| Candidate Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo 'Candidate Home Page';
});

Route::get('home', ['as' => 'candidate.home', 'uses' => 'CandidateController@getHome']);

Route::get('contact-us', ['as' => 'candidate.contact', 'uses' => 'CandidateController@getContactUs']);
Route::post('contact-us', ['as' => 'candidate.contact', 'uses' => 'CandidateController@postContactUs']);
Route::get('upload', ['as' => 'candidate.upload', 'uses' => 'CandidateController@getUpload']);
Route::post('upload', ['as' => 'candidate.upload', 'uses' => 'CandidateController@postUpload']);
?>