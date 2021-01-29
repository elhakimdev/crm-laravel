<?php

use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;
use \Spatie\Permission\Models\Permission as Permission;
use \Spatie\Permission\Models\Role as Role;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::prefix('policies')->group(function () {
    Route::get('/permissions', [PermissionsController::class, 'index'])->name('permissions');
    Route::get('/permissions/{permission}', [PermissionsController::class, 'show'])->name('permissions.show');
    Route::get('/permissions/create/from', [PermissionsController::class, 'create'])->name('permissions.create');
    Route::post('/permissions/create/store', [PermissionsController::class, 'store'])->name('permissions.store');
});

Route::prefix('policies')->group(function () {
    Route::get('/roles', [RolesController::class, 'index'])->name('roles');
    Route::get('/roles/{role}', [RolesController::class, 'show'])->name('roles.show');
    Route::get('/roles/create/form', [RolesController::class, 'create'])->name('roles.create');
    Route::post('/roles/create/store', [RolesController::class, 'store'])->name('roles.store');
});
