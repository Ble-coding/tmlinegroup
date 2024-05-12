<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SitemapController;


// Route::get('/', function () {
//     return view('welcome');
// });

 // Route pour la page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route pour le formulaire de contact
Route::post('/envoyer-email', [EmailController::class, 'envoyerEmail'])->name('envoyerEmail');
Route::get('/sitemap.xml', [SitemapController::class, 'generate']);
