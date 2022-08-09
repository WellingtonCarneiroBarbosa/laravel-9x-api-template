<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'data' => [
            'app' => 'Laravel',
            'version' => '9.x',
        ],
    ]);
});
