<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FamiliesController;
use Illuminate\Support\Facades\Route;

route::get('',[AdminController::class,'index'])->name('admin.index');

Route::resource('families', FamiliesController::class)->names('admin.families');

?>