
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\CheckAdmissionPeriod;
use App\Models\Program;  
use App\Http\Controllers\Admin\ProgramController;   

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/apply', [HomeController::class, 'apply'])->name('apply')->middleware(CheckAdmissionPeriod::class);

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


/*
Route::get('/admin/programs', [ProgramController::class, 'index'])->name('admin.programs.index');
Route::get('/admin/programs/create', [ProgramController::class, 'create'])->name('admin.programs.create');
Route::post('/admin/programs', [ProgramController::class, 'store'])->name('admin.programs.store');
Route::get('/admin/programs/{program}', [ProgramController::class, 'show'])->name('admin.programs.show');
Route::get('/admin/programs/{program}/edit', [ProgramController::class, 'edit'])->name('admin.programs.edit');
Route::put('/admin/programs/{program}', [ProgramController::class, 'update'])->name('admin.programs.update');
Route::delete('/admin/programs/{program}', [ProgramController::class, 'destroy'])->name('admin.programs.destroy');

*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('programs', ProgramController::class);
});