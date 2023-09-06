<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group([],function (){
    Route::get('panel',\App\Livewire\Panel\Dashboard::class);
    Route::get('users',\App\Livewire\Panel\Users\Users::class);
    Route::get('add-user',\App\Livewire\Panel\Users\UserAdd::class);
    Route::get('edit-user/{user}',\App\Livewire\Panel\Users\UserEdit::class);
    Route::get('delete-user',\App\Livewire\Panel\Users\Users::class);
});
Route::get('/', \App\Http\Livewire\TestExample::class);
Route::get('/tasks',\App\Livewire\TaskComp::class);
Route::get('/task/create',\App\Livewire\TaskComp::class);
