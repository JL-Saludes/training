
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/apply', [HomeController::class, 'apply'])->name('apply');

Route::get('/sampleform', [HomeController::class, 'sampleform'])->name('sampleform');

Route::post('/sample/request', [HomeController::class, 'request'])->name('sample');

/*
Route::get('/admin/programs/{id}/college/{collegeid}', function ($id, $collegeid) {
    return 'Program ID: ' . $id . ' | College ID: ' . $collegeid;
});

Route::get('/admin/programs/{id}', function ($id) {
    return 'Program ID: ' . $id;
});

Route::get('/admin/user/{page?}', function ($page = 1) {
    return 'Page: ' . $page;
});
*/

Route::get('/admin/dashboard', DashboardController::class)->name('admin.dashboard');