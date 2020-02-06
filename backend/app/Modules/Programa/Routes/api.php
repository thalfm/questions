<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'prefix' => 'programa'
], function ($router) {
    Route::apiResource('examining-board', 'ExaminingBoardController')
        ->only(['index']);
    Route::apiResource('agency', 'AgencyController')
        ->only(['index']);
    Route::apiResource('subject', 'SubjectController')
        ->only(['index']);
});

