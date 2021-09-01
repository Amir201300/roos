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
        Route::post('/change_password', 'UserController@change_password')->name('user.change_password');
        Route::post('/edit_profile', 'UserController@edit_profile')->name('user.edit_profile');
        Route::post('/change_setting', 'UserController@change_setting')->name('user.change_setting');
        Route::post('/check_password_code', 'UserController@check_password_code')->name('user.check_password_code');
        Route::post('/check_active_code', 'UserController@check_active_code')->name('user.check_active_code');
        Route::get('/my_info', 'UserController@my_info')->name('user.my_info');
        Route::post('/reset_password', 'UserController@reset_password')->name('user.reset_password');
        Route::post('/logout', 'UserController@logout')->name('user.logout');
    });

});
/** End Auth Route **/

/** Auth_general */
Route::prefix('Auth_general')->group(function()
{
    Route::post('/register', 'UserController@register');
    Route::post('/login', 'UserController@login');
    Route::post('/forget_password', 'UserController@forget_password');
});


Route::get('/getCountries', 'GeneralController@getCountries');
