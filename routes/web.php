<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CGEG Website Routes
|--------------------------------------------------------------------------
| All routes for CJ Global Express Group Unlimited website.
| Developer editing only — no CMS. All content is managed in controllers.
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Divisions
Route::get('/divisions', [PageController::class, 'divisions'])->name('divisions');
Route::get('/divisions/{slug}', [PageController::class, 'division'])->name('division');

// Corporate Pages
Route::get('/foundation', [PageController::class, 'foundation'])->name('foundation');
Route::post('/foundation/partner', [PageController::class, 'foundationPartnerSubmit'])->name('foundation.partner.submit');
Route::get('/global-footprint', [PageController::class, 'footprint'])->name('footprint');
Route::get('/leadership', [PageController::class, 'leadership'])->name('leadership');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');

// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');
