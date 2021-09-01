<?php


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
use Illuminate\Http\Request;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

header('Content-Type: application/json; charset=UTF-8', true);


/** Start Auth Route **/

Route::middleware('auth:api')->group(function () {
    //Auth_private
    Route::prefix('Auth_private')->group(function()
    {
        Route::post('/change_password', 'Api\UserController@change_password')->name('user.change_password');
        Route::post('/edit_profile', 'Api\UserController@edit_profile')->name('user.edit_profile');
        Route::post('/change_setting', 'Api\UserController@change_setting')->name('user.change_setting');
        Route::post('/check_password_code', 'Api\UserController@check_password_code')->name('user.check_password_code');
        Route::post('/check_active_code', 'Api\UserController@check_active_code')->name('user.check_active_code');
        Route::get('/my_info', 'Api\UserController@my_info')->name('user.my_info');
        Route::post('/reset_password', 'Api\UserController@reset_password')->name('user.reset_password');
    });

});
/** End Auth Route **/

/** Auth_general */
Route::prefix('Auth_general')->group(function()
{
    Route::post('/register', 'Api\UserController@register')->name('user.register');
    Route::post('/login', 'Api\UserController@login')->name('user.login');
    Route::post('/forget_password', 'Api\UserController@forget_password')->name('user.forget_password');
});

Route::post('/test', 'Api\UserController@test')->name('user.test');
