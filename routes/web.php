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

Route::get('/', function () {
    return view('welcome');
});
//Participant Routes
//Route::get('/participants',\App\Actions\IndexParticipant::class);
Route::get('/participants',\App\Http\Livewire\Participant\Index::class);
Route::get('/participants/create',\App\Http\Livewire\CreateParticipant::class);
Route::get('/participants/{participant}',\App\Actions\ReadParticipant::class);
Route::get('/participants/{participant}',\App\Actions\UpdateParticipant::class);
Route::delete('/participants/{participant}',\App\Actions\DeleteParticipant::class);
