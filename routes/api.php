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
	Route::post('login', 'AuthController@login');
	Route::get('logout', 'AuthController@logout');
	
	//user login
	Route::post('user/login', 'AuthController@userLogin')->name('login');;
	
	// Route::group(['middleware' => 'verifyUser'], function() {
	// 	Route::post('/reset/password', 'ResetPasswordController@resetPassword');
    // });
  Route::post('reset/password', 'ResetPasswordController@resetPassword');

  Route::middleware('auth:api')->group(function() {
    // Route::post('logout', 'AuthController@logout');
  });
	

	// user registeration
	Route::post('user/register', 'RegisterController@register');
	
	// forget password
	Route::post('forgot/password', 'ForgotPasswordController@forgotPassword');
	
	// OTP
	Route::post('otp/send', 'OtpController@sendOtp');
	Route::post('otp/verify', 'OtpController@verifyOtp');
	Route::get('get/subscriptions', 'SubscriptionPlanController@getLists');

	Route::get('get/payments', 'PaymentMethodController@getLists');
});

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

    Route::get('get_all_estimations_by_user', 'API\EstimationController@getAllEstimationsByUser');
	Route::resource('estimations', 'API\EstimationController');
	Route::post('get_estimations_by_date', 'API\EstimationController@getEstimationsByDate');
	Route::post('get_changes_by_date', 'API\EstimationController@getChangesByDate');
	Route::post('get_percentages_by_date', 'API\EstimationController@getPercentagesByDate');
	Route::post('change_publish', 'API\EstimationController@changePublish');

	Route::get('get_ordered_league', 'API\EstimationController@getOrderedLeagues');
	Route::get('get_estimations_by_id', 'API\EstimationController@getEstimationsById');

	Route::post('change_league_priority', 'API\LeaguesController@changeLeaguePriority');

	Route::post('play-tips-odd', 'API\TipsController@playTipsOdd');
	Route::post('play-tips-over-under', 'API\TipsController@playTipsOverUnder');

	Route::post('add-result', 'API\TipsController@addResult');
	Route::get('get-user-list-byrank', 'API\TipsController@getUserListByRank');

	Route::get('get-user-tips-history', 'API\TipsController@getUserTipsHistory');

	Route::post('user-profile-edit', 'API\UserManageController@userProfileEdit');

	Route::post('fb-login', 'API\UserManageController@fbLogin');

	Route::get('ads/changes', 'API\AdsController@getChanges');
	Route::get('ads/percentages', 'API\AdsController@getPercentages');
	Route::get('ads/estimate', 'API\AdsController@getEstimate');
	Route::get('ads/estimate/detail', 'API\AdsController@getEstimateDetail');
	
	Route::resource('ads', 'API\AdsController');
	Route::post('ads/update', 'API\AdsController@update');

	Route::post('/send-otp', 'API\OtpController@sendOtp');
	Route::post('/verify-otp', 'API\OtpController@verifyOtp');

	

