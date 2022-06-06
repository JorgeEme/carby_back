<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerUserController;

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


Route::get('/contact',                        [WebController::class, 'contact']);

Route::any('/password',                       [AuthController::class, 'validateToken']);
Route::any('/password/recovered',             [AuthController::class, 'recoverPassword']);

Route::any('/journey/{id}',                   [JourneyController::class, 'setupPay']);
Route::any('/journey/{id}/pay',               [JourneyController::class, 'pay'])->name('pay');
Route::get('/admin/issues/{id}/manage',       [IssueController::class, 'manageView'])->name('manage-issue-view');
Route::post('/admin/issues/{id}/manage',      [IssueController::class, 'manage'])->name('manage-issue');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('validate/users',              [AuthController::class, 'validateUserView'])->name('validate-user-view');
    Route::get('validate/{id}/users',         [AuthController::class, 'validateUser'])->name('validate-user');
});
