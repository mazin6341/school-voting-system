<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;

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
})->name('home');

Route::get('/contvote', function () {
    return view('contvote');
})->name('contvote.show');

Route::get('/schoolcaptain',[VoteController::class,'schoolCaptainResult']);
Route::get('/depschoolcaptain',[VoteController::class,'depSchoolCaptainResult']);
Route::get('/gamescaptain',[VoteController::class,'gamesCaptainResult']);
Route::get('/depgamescaptain',[VoteController::class,'depGamesCaptainResult']);
Route::get('/housecaptains',[VoteController::class,'houseCaptainResult']);

Route::post("votevalidate",[VoteController::class,'codeValidation']);
Route::post("compvote",[VoteController::class,'completeVote']);