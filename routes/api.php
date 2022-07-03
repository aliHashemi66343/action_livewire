<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Actions\CreateParticipant;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Participant Routes
Route::get('/participants',\App\Actions\Participant\ParticipantIndex::class);
Route::post('/participants',CreateParticipant::class);
Route::get('/participants/{participant}',\App\Actions\ReadParticipant::class);
Route::post('/participants/{participant}',\App\Actions\UpdateParticipant::class);
Route::delete('/participants/{participant}',\App\Actions\DeleteParticipant::class);
