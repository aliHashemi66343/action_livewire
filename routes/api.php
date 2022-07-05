<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Actions\Participant\ParticipantIndex;
use \App\Actions\Participant\ParticipantCreate;
use \App\Actions\Participant\ParticipantUpdate;
use \App\Actions\Participant\ParticipantDelete;
use \App\Actions\Participant\ParticipantRead;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user2', function (Request $request) {
    return $request->user();
});
//Participant Routes
//Route::get('/test',function (){dd('khodaaaaa');});
Route::get('/participants',ParticipantIndex::class);
Route::post('/participants',ParticipantCreate::class);
Route::get('/participants/{participant}',ParticipantRead::class);
Route::post('/participants/{participant}',ParticipantUpdate::class);
Route::delete('/participants/{participant}',ParticipantDelete::class);
