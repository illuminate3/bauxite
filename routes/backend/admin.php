<?php

/**
 * All route names are prefixed with 'admin.'.
 */
// Route::redirect('/', '/admin/dashboard', 301);
// Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::group([
    'namespace' => 'App\Http\Controllers\Backend',
], function () {
    Route::redirect('/', '/admin/dashboard', 301);
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
