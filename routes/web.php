<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Join_RoomController;
use App\Http\Controllers\EventController;
use App\Models\Event;
use App\Http\Controllers\VoteController;
use App\Models\Vote;
use Illuminate\Http\Request; 
use SimpleSoftwareIO\QrCode\Facades\QrCode;



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
    Route::get('/room/{roomId}', function ($roomId,Request $request) {
        $sort = $request->sort;
        if($sort == null){
            $sort = 'vote';
        }
        $vote = Vote::all();
        return view('user_room',compact('roomId','vote','sort'));
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
    Route::get('/{roomId}/admin', function ($roomId,Request $request) {
        $qrCode = QrCode::size(100)->generate('http://localhost:8000/room/'.$roomId);
        if($request->sort == 'vote'){
            $event = DB::table('events')
                    ->orderBy('vote', 'desc')
                    ->get();
        }
        else{
            $event = DB::table('events')
                    ->orderBy('created_at', 'desc')
                    ->get();
        }
        $sort=$request->sort;
        return view('admin_room',compact('roomId','event','sort','qrCode'));
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/increase_vote', [VoteController::class,'increase_vote'] )->name('increase_vote');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/delete_vote', [VoteController::class,'delete_vote'] )->name('delete_vote');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::post('/delete_question', [EventController::class,'delete'] );
});
