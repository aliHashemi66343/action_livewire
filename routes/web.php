<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\Participants\Create;
use App\Http\Livewire\Participants\Update;
use App\Http\Livewire\Participants\Read;
use App\Http\Livewire\Participants\Index;
use App\Http\Livewire\Participants\Delete;
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
//Participant Routes
Route::get('/participants',Index::class);
Route::get('/participants/create',Create::class);
Route::get('/participants/{participant}',Read::class);
Route::get('/participants/edit/{participant}',Update::class);
Route::get('/participants/delete/{participant}',Delete::class);
