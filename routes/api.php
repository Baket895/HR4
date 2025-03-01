<?php

use App\Models\tokenModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return "This is my api";
});

Route::get('/getToken', function (){
    $user = tokenModel::where("username","admin")->first();
    $token = $user->createToken("auth_token")->plainTextToken;
    dd($token);
});

Route::get('/secure', function (Request $request) {
    return "secured";
})->middleware(['auth:sanctum']);