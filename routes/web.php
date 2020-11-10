<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\LoginController;
Use Illuminate\Support\Facades\Auth;


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

Route::get('/', function (){
    return redirect('index');
});

Route::get('/index', function (){
    if(Auth::check()){
        return view('index', [
            'user' => Auth::user()
        ]);
    } else{
        return redirect('/login');
    }
})->name('index');

Route::get('/logout', function (){
    Auth::logout();
    return redirect('/login');
})->name('logout');

