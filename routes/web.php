<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

Route::get('petlinks/', function(){
    return view('proyectos/petlinks');
});
Route::get('neverforget/', function(){
    return view('proyectos/neverforget');
});
Route::get('tareas/', function(){
    return view('proyectos/tareas');
});
Route::get('recetas/', function(){
    return view('proyectos/recetas');
});
Route::get('cookingmate/', function(){
    return view('proyectos/cookingmate');
});
