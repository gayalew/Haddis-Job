<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/posts', function () {
    return response()->json([
            'posts' => [
                'title' => 'Post One'
            ],
        ]
    );
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});