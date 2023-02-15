<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Join_RoomController;
use App\Http\Controllers\EventController;
use App\Models\Event;



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

Route::get('/home',function(){
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/room/{roomId}', function ($roomId) {
        $event = DB::table('events')
                ->orderBy('vote', 'desc')
                ->get();
        return view('user_room',compact('roomId','event'));
    })->name('room');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/join-room', [Join_RoomController::class,'joinRoom']);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::post('/submit-question/{roomId}', [EventController::class,'store']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/{roomId}/admin', function ($roomId) {
        $event = DB::table('events')
                ->orderBy('vote', 'desc')
                ->get();
        return view('admin_room',compact('roomId','event'));
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::post('/increase_vote', [EventController::class,'increase_vote'] );
});