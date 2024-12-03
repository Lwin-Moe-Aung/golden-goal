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
// Route::post('register', 'API\RegisterController@register');
// Route::post('login', function(Request $request) {
//     return "hello world";
// });
Route::get('/', 'API\HomeController@index');


Route::group(['namespace' => 'API'], function () {
	Route::post('v1/login', 'AuthController@login');
	Route::get('v1/logout', 'AuthController@logout');
	
  //dinger
  Route::post('v1/process/payment', 'DingerController@processPayment');
  Route::post('merchant/callback', 'DingerController@handleCallback');

  Route::get('v1/profile', 'AuthController@getProfile');
  Route::get('v1/get/user-with-phone', 'AuthController@getUserByPhone');
  Route::post('v1/admin/subscribe', 'SubscriptionPlanController@adminSubscribeForUser');




	//user login
	Route::post('v1/user/login', 'AuthController@userLogin')->name('login');;
	
	// Route::group(['middleware' => 'verifyUser'], function() {
	// 	Route::post('/reset/password', 'ResetPasswordController@resetPassword');
    // });
  Route::post('v1/reset/password', 'ResetPasswordController@resetPassword');

  Route::middleware('auth:api')->group(function() {
    // Route::post('logout', 'AuthController@logout');
  });
	

	// user registeration
	Route::post('v1/user/register', 'RegisterController@register');
	
	// forget password
	Route::post('v1/forgot/password', 'ForgotPasswordController@forgotPassword');
	
	// OTP
	Route::post('v1/otp/send', 'OtpController@sendOtp');
	Route::post('v1/otp/verify', 'OtpController@verifyOtp');
	Route::get('v1/get/subscriptions', 'SubscriptionPlanController@getLists');

	Route::get('v1/get/payments', 'PaymentMethodController@getLists');
});

  

	Route::resource('v1/products', 'API\ProductController');
	Route::resource('v1/changes', 'API\ChangeController');
	Route::delete('v1/changes_all_delete', 'API\ChangeController@changesAllDelete');
	Route::resource('v1/changes_descriptions', 'API\ChangesDescriptionController');
	Route::delete('v1/changes_des_all_delete', 'API\ChangesDescriptionController@changesDesAllDelete');
	Route::get('v1/generate-user', 'API\UserManageController@generateUser');
	Route::get('v1/limit-member-time', 'API\UserManageController@limitMemberTime');
	Route::get('v1/profile/{id}', 'API\UserManageController@getProfile');
	Route::get('v1/user-list', 'API\UserManageController@getUserList');
	Route::resource('v1/leagues', 'API\LeaguesController');

	Route::resource('v1/percentages', 'API\PercentagesController');
	Route::delete('v1/percentages_all_delete', 'API\PercentagesController@percentagesAllDelete');

	Route::resource('v1/percentages_descriptions', 'API\PercentagesDescriptionController');
	Route::delete('v1/percentage_des_all_delete', 'API\PercentagesDescriptionController@percentagesDesAllDelete');
	Route::post('v1/leagues_update', 'API\LeaguesController@leagueUpdate');

	Route::resource('v1/football_teams', 'API\FootballTeamController');
	Route::post('fv1/ootball_team_update', 'API\FootballTeamController@footballTeamUpdate');
	Route::get('v1/get_team_by_leg_id/{id}', 'API\FootballTeamController@getTeamByLeagueid');

  Route::get('v1/get_all_estimations_by_user', 'API\EstimationController@getAllEstimationsByUser');
	Route::resource('v1/estimations', 'API\EstimationController');
	Route::get('v1/get_win_lose_history', 'API\EstimationController@getWinLoseHistory');

	Route::post('get_estimations_by_date', 'API\EstimationController@getEstimationsByDateOld');

	Route::post('v1/get_estimations_by_date', 'API\EstimationController@getEstimationsByDate');
	Route::post('v1/get_changes_by_date', 'API\EstimationController@getChangesByDate');
	Route::post('v1/get_percentages_by_date', 'API\EstimationController@getPercentagesByDate');
	Route::post('v1/change_publish', 'API\EstimationController@changePublish');

	Route::get('v1/get_ordered_league', 'API\EstimationController@getOrderedLeagues');
	Route::get('v1/get_estimations_by_id', 'API\EstimationController@getEstimationsById');

	Route::post('v1/change_league_priority', 'API\LeaguesController@changeLeaguePriority');

	Route::post('v1/play-tips-odd', 'API\TipsController@playTipsOdd');
	Route::post('v1/play-tips-over-under', 'API\TipsController@playTipsOverUnder');

	Route::post('v1/add-result', 'API\TipsController@addResult');
	Route::get('v1/get-user-list-byrank', 'API\TipsController@getUserListByRank');

	Route::get('v1/get-user-tips-history', 'API\TipsController@getUserTipsHistory');

	Route::post('v1/user-profile-edit', 'API\UserManageController@userProfileEdit');

	Route::post('v1/fb-login', 'API\UserManageController@fbLogin');

	Route::get('ads/changes', 'API\AdsController@getChanges');
	Route::get('ads/percentages', 'API\AdsController@getPercentages');
	Route::get('ads/estimate', 'API\AdsController@getEstimate');
	Route::get('ads/estimate/detail', 'API\AdsController@getEstimateDetail');
	
	Route::resource('v1/ads', 'API\AdsController');
	Route::post('v1/ads/update', 'API\AdsController@update');

	Route::post('v1/send-otp', 'API\OtpController@sendOtp');
	Route::post('v1/verify-otp', 'API\OtpController@verifyOtp');

	

