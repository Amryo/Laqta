<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\ContactsController as AdminContactsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\RulesController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SocialsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController as ControllersProjectsController;
use App\Http\Controllers\ServicesController as ControllersServicesController;
use App\Http\Controllers\SrController;
use App\Http\Controllers\Website\HomeHeadersController;
use App\Models\Social;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    $socials = Social::all();
    return view('front.home.home', [
        'socials' => $socials
    ]);
})->name('index');
Route::post('contacts', [ContactsController::class, 'store'])->name('contacts.store');
Route::get('services', [ControllersServicesController::class, 'index'])->name('services.index');
Route::get('projects', [ControllersProjectsController::class, 'index']);
Route::get('projects/show/{project}', [ControllersProjectsController::class, 'show'])->name('fproject.show');
Route::get('category/projects/{category}', [ControllersProjectsController::class, 'showCategoryProjects'])->name('projects.category');
Route::get('fearured/projects/{feature}', [ControllersProjectsController::class, 'showFeatureProjects'])->name('fearured.category');

Route::get('search', [SrController::class, 'search']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


Route::prefix('admins')->group(function () {


    Route::prefix('applications')->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('projects', ProjectsController::class);
        Route::resource('services', ServicesController::class);
        Route::resource('socials', SocialsController::class);
        Route::resource('rules', RulesController::class);
        Route::resource('contacts', AdminContactsController::class);
    });
    Route::prefix('pages')->group(function () {
        Route::resource('clients', ClientsController::class);
    });
});

Route::prefix('home')
    ->as('home.')
    ->group(function () {
        // home/header/
        Route::resource('header', HomeHeadersController::class);
    });
require __DIR__ . '/auth.php';
