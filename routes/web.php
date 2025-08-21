<?php

use Illuminate\Support\Facades\Route;
use AlexKassel\PackageTemplate\Http\Controllers\ExampleController;

Route::prefix('package-template')->group(function () {
    Route::get('/', [ExampleController::class, 'index']);
});