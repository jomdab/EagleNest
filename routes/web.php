<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Join_RoomController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StarController;
use App\Models\Event;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\RoomController;
use App\Models\Vote;
use App\Models\Room;
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
    Route::get('/manage', function () {
        $rooms = DB::table('rooms')
            ->where('user_id',Auth::user()->id)
            ->get();
        return view('manage',compact('rooms'));
    })->name('manage');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/room/{roomId}', function ($roomId,Request $request) {
        $sort = $request->sort;
        $users = DB::table('users')
         ->where('room', $roomId)
         ->get();
        if($sort == null){
            $sort = 'vote';
        }
        $vote = Vote::all();
        return view('user_room',compact('roomId','vote','sort','users'));
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
    Route::middleware(['auth'])->post('/leave-room', function(){
        auth()->user()->update([
            'room'=>'None'
        ]);
        return redirect('/dashboard');
    });
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
        $id = str($roomId);
        $room = Room::where('room_id', $id)->first();
        $room->status = 'progress';
        $room->save(); // save the updated status to the database
        $qrCode = QrCode::size(100)->generate('http://localhost:8000/room/'.$roomId);
        $users = DB::table('users')
         ->where('room', $roomId)
         ->get();
        $sort=$request->sort;
        if($sort == null){
            $sort = 'vote';
        }
        return view('admin_room',compact('roomId','sort','qrCode','users','room'));
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/end-event/{roomId}', function ($roomId) {
        $room = Room::where('room_id', $roomId)->first();
        $room->status = 'finished';
        $room->save();
        return redirect('/dashboard');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::post('/rooms', [RoomController::class,'store'] );
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
    Route::post('/star', [StarController::class,'toggleStar'] );
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
    Route::get('/delete_question', [EventController::class,'delete'] )->name('delete_question');
});
