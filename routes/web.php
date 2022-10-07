<?php

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

 use App\Http\Controllers\teste;
 use App\Http\Controllers\QuestionarioController;
 use Illuminate\Support\Facades\Auth;

Route::get('/', function(){
    return view('index');
})->name('index');

Route::get('/Game/gameView', function(){   
    return view('Game.gameView');
});

Route::get('/teste', function(){   
    return view('teste');
});

Route::get('/Questions/create',[QuestionarioController::class, 'create']);

Route::get('home',function(){ 
    $auth = new Auth;
    $user= Auth::User();
    return view('layouts.home',['user'=>$user,'auth'=>$auth]); 
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
