<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\AuthController@login');
Route::get('logout', 'API\AuthController@logout');

	Route::resource('products', 'API\ProductController');
	Route::resource('changes', 'API\ChangeController');
	Route::delete('changes_all_delete', 'API\ChangeController@changesAllDelete');
	Route::resource('changes_descriptions', 'API\ChangesDescriptionController');
	Route::delete('changes_des_all_delete', 'API\ChangesDescriptionController@changesDesAllDelete');
	Route::get('generate-user', 'API\UserManageController@generateUser');
	Route::get('limit-member-time', 'API\UserManageController@limitMemberTime');
	Route::get('profile/{id}', 'API\UserManageController@getProfile');
	Route::get('user-list', 'API\UserManageController@getUserList');
	Route::resource('leagues', 'API\LeaguesController');

	Route::resource('percentages', 'API\PercentagesController');
	Route::delete('percentages_all_delete', 'API\PercentagesController@percentagesAllDelete');	

	Route::resource('percentages_descriptions', 'API\PercentagesDescriptionController');
	Route::delete('percentage_des_all_delete', 'API\PercentagesDescriptionController@percentagesDesAllDelete');
	Route::post('leagues_update', 'API\LeaguesController@leagueUpdate');

	Route::resource('football_teams', 'API\FootballTeamController');
	Route::post('football_team_update', 'API\FootballTeamController@footballTeamUpdate');
	Route::get('get_team_by_leg_id/{id}', 'API\FootballTeamController@getTeamByLeagueid');

	Route::resource('estimations', 'API\EstimationController');
	Route::post('get_estimations_by_date', 'API\EstimationController@getEstimationsByDate');

	Route::get('get_ordered_league', 'API\EstimationController@getOrderedLeagues');
	Route::get('get_estimations_by_id/{id}', 'API\EstimationController@getEstimationsById');

	Route::post('change_league_priority', 'API\LeaguesController@changeLeaguePriority');

	Route::post('play-tips', 'API\TipsController@playTips');
	Route::post('add-result', 'API\TipsController@addResult');
	