<?php

use App\Http\Controllers\MeetingController;

use Illuminate\Support\Facades\Route;

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


//
Route::get('/meeting/{id}', [MeetingController::class, 'show']);
Route::put('/meeting/{id}', [MeetingController::class, 'edit']);
Route::post('/meeting/new', [MeetingController::class, 'new']);
Route::delete('/meeting/delete/{id}', [MeetingController::class, 'delete']);


Route::get('/meeting/view/list', [MeetingController::class, 'listView']);
Route::get('/meeting/view/{id}', [MeetingController::class, 'editView']);
Route::get('/view/new', [MeetingController::class, 'newView']);
