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

Auth::routes ();

/* SAPA CONTROLLER */

/** ADVOCACY CENTER CONTROLLER */
Route::get ( '/advocacy/report' , 'AdvocacyController@report' )->name ( 'advocacy_report' );
Route::resource ( '/advocacy/report/create' , 'AdvocacyReportView' );
Route::resource ( '/sapa/advocacy' , 'AdvocacyReportView' );
/** ADVOCACY CENTER CONTROLLER */

/** SAPA ADMINISTRATION CONTROLLER (Management Systems) */
Route::get ( '/sapa/cockpit' , 'SapaCockpitController@index' );
Route::get ( '/sapa/login' , 'Auth\LoginController@showLoginForm' );
Route::post ( '/sapa/login' , 'Auth\LoginController@login' );
Route::get ( '/sapa/register' , 'Auth\RegisterController@showRegistrationForm' )->name ( 'register' );
Route::post ( '/sapa/register' , 'Auth\RegisterController@register' );
Route::get ( '/sapa/news_announce' , 'NewsCreateController@index' );
/** SAPA ADMINISTRATION CONTROLLER (Management Systems)*/

/** NEWS CONTROLLER (Management Systems) */
Route::resource ( '/sapa/news/manage' , 'NewsCreateResource' );
/** NEWS CONTROLLER (Management Systems) */

/** NEWS CONTROLLER */
Route::get ( '/news/article/{article_number}' , 'NewsController@articleview' );
/** NEWS CONTROLLER */

/** DISCUSSION CONTROLLER */
Route::post ( '/discuss/create' , 'DiscussionController@createDiscussion' );
Route::get ( '/discuss/view/{id}' , 'DiscussionController@viewDiscussion' );
Route::post ( '/discuss/edit/{id}', 'DiscussionController@editDiscussion' );
/** DISCUSSION CONTROLLER */

/** VOTE CONTROLLER */
Route::post ( '/sapa/vote/{vote_id}' , 'MatiVoteController@vote' );
/** VOTE CONTROLLER */

/** ------------------------------------------------------------------------------ */
/** LANDING PAGE CONTROLLER */

/** Index Page */
Route::get ( '/' , 'IndexController@index' );
/** Index Page */

/** Advocacy Page */
Route::get ( '/advocacy' , 'AdvocacyController@index' );
/** Advocacy Page */

/** News Page */
Route::get ( '/news' , 'NewsController@index' );
/** News Page */

/** Discuss Page */
Route::get ( '/discuss' , 'DiscussionController@index' );
/** Discuss Page */

/** Contact Page */
Route::get ( '/contact' , function () {
    return view ( 'sapa.contact' );
} );
/** Contact Page */

/** About Page */
Route::get ( '/about' , function () {
    return view ( 'sapa.about' );
} );
/** About Page */

/** LANDING PAGE CONTROLLER */
/** ------------------------------------------------------------------------------ */

/* SAPA CONTROLLER */
