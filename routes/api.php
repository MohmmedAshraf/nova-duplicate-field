<?php
use Illuminate\Support\Facades\Route;
use OutheBox\DuplicateField\Http\Controllers\DuplicateController;

Route::post('/', DuplicateController::class . '@duplicate');
