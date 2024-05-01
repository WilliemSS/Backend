<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MatkulController;
use App\Http\Controllers\APILinksController;

Route::get('/', function () {
    return view('welcome');
});
