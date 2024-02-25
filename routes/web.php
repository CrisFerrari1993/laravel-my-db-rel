<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;

Route::get('/', function () {

    return view('pages.index');
});

Route::get('/project', [ProjectController :: class, 'index'])->name('pages.project.index');
Route::get('/type', [TypeController :: class, 'index'])->name('pages.type.index');

