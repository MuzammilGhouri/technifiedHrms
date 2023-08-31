<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Api_Controller;
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
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::post('login','Api\Api_Controller@login');

Route::get('attendance/{id?}','Api\Api_Controller@userAttendance');

Route::get('employee/{id?}','Api\Api_Controller@Employee');

Route::get('all-notices','Api\Api_Controller@notes');

//  Route::get('home', 'HomeController@index');