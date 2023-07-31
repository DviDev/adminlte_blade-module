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

Route::prefix('lte')->group(function () {
    if (config('app.env') == 'local') {
        Route::get('pages/form/advanced', fn() => view('lte.pages.forms.advanced'));
        Route::get('pages/ui/modals', fn() => view('lte.pages.UI.modals'));
        Route::get('pages/tables/simple', fn() => view('lte.pages.tables.simple'));
        Route::get('pages/charts/inline', fn() => view('lte.pages.charts.inline'));
    }
});
