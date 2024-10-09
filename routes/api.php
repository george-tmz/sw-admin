<?php

use App\Http\Controllers\Wechat\TicketReceiveController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/wx-callback/platform', [TicketReceiveController::class, 'receive']);
