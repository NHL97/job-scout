<?php

use App\Http\Controllers\WorkController;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    [WorkController::class, 'index']


);
