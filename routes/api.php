<?php

use App\Http\Controllers\MPESAResponsesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return $request->user();
});

Route::post('v1/access/token', 'mpesaController@generateAccessToken');
Route::post('v1/hlab/stk/push', 'mpesaController@STKPush');