<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::post('test',                                 [AuthController::class, 'test']);

Route::post('/login',                               [AuthController::class, 'login']);
Route::post('/register',                            [AuthController::class, 'register']);
Route::post('/forget',                              [AuthController::class, 'forget']);
Route::get('/documentation',                        [WebController::class, 'documentation']);


Route::middleware(['auth:api', 'authenticated'])->group(function () {
    Route::prefix('users')->group(function () {
        Route::post('/upload-card',                  [AuthController::class, 'uploadCard']);
        Route::post('/upload-nif',                   [AuthController::class, 'uploadNif']);
        Route::get('/current-user',                  [AuthController::class, 'getCurrentUser']);
        Route::get('{id}/get',                       [AuthController::class, 'getUser']);
        Route::post('/change-password',              [AuthController::class, 'changePassword']);
        Route::put('/notifications',                 [AuthController::class, 'editNotifications']);
        Route::delete('/delete',                     [AuthController::class, 'delete']);
        Route::get('/logout',                        [AuthController::class, 'logout']);
        Route::put('/edit',                          [AuthController::class, 'update']);
        Route::get('/journeys',                      [JourneyController::class, 'index']);
        Route::post('/device-token',                 [AuthController::class, 'updateDeviceToken']);
    });

    Route::prefix('vehicles')->group(function () {
        Route::get('/{id}',                          [VehicleController::class, 'show']);
        Route::post('/get-available',                [VehicleController::class, 'getVehiclesAvailable1']);
        Route::post('/{vehicle_id}/book',            [BookController::class, 'bookVehicle']);
        Route::post('/{vehicle_id}/start-journey',   [JourneyController::class, 'createJourney']);
    });

    Route::prefix('issues')->group(function () {
        Route::post('/create',                          [IssueController::class, 'createIssue']);
    });

    Route::put('/book/{id}/cancel',                  [BookController::class, 'cancel']);
    Route::post('/rate',                             [ReviewController::class, 'rate']);

});

Route::prefix('faqs')->group(function () {
    Route::get('/',                         [FaqController::class, 'getFaqs']);
});
