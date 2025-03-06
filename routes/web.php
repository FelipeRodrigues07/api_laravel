<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::resource('produto', ProdutoController::class);


Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/produtos/{slug}', [SiteController::class, 'details'])->name('site.details');