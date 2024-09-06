<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\DevisController;
use App\Http\Controllers\backend\EquipeController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SettingsController;
use App\Http\Controllers\backend\ApparenceController;
use App\Http\Controllers\backend\PortfolioController;


Route::get('/admin', function () {
    return view('backend.auth.login');
});
Route::get('/login', [AuthController::class, 'index'])->name('index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/btp', [HomeController::class, 'btp'])->name('btp');
Route::get('/imprimerie', [HomeController::class, 'imprimerie'])->name('imprimerie');
Route::get('/gestion-immobiliere', [HomeController::class, 'gestionImmobiliere'])->name('gestion-immobiliere');
Route::get('/construction-metallique', [HomeController::class, 'constructionMetallique'])->name('construction-metallique');
Route::get('/entretien-nettoyage', [HomeController::class, 'entretienNettoyage'])->name('entretien-nettoyage');
Route::get('/service/detail/{id}', [HomeController::class, 'serviceDetail'])->name('service.detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/store', [HomeController::class, 'contactStore'])->name('contact.submit');
Route::get('/portefeuille', [HomeController::class, 'portefeuille'])->name('portefeuille');
Route::get('/news', [HomeController::class, 'blog'])->name('blog');
Route::get('/demande/devis', [HomeController::class, 'demandeDevis'])->name('demande_devis');
Route::get('/blog/detail/{id}', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/portefeuile/detail/{id}', [HomeController::class, 'portfolioDetail'])->name('portfolio_detail');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::prefix('service')->name('service.')->group(function () {
    Route::get('communication-digitale',[ServiceController::class, 'communicationVisuelle'])->name('communication-visuelle');
    Route::get('web-developpement',[ServiceController::class, 'webDeveloppement'])->name('web-developpement');
    Route::get('marketing-digital',[ServiceController::class, 'marketingDigital'])->name('marketing-digital');
    Route::get('community-manager',[ServiceController::class, 'communityManager'])->name('community-manager');
});
// begin new route
Route::prefix('domaine_activite')->name('domaine_activite.')->group(function () {
    Route::get('education',[HomeController::class, 'education'])->name('education');
    Route::get('btp',[HomeController::class, 'btp'])->name('btp');
    Route::get('immobilier',[HomeController::class, 'immobilier'])->name('immobilier');
    Route::get('fintech',[HomeController::class, 'fintech'])->name('fintech');
});
Route::prefix('expertise')->name('expertise.')->group(function () {
    Route::get('software-and-app-development',[HomeController::class, 'softareAppDevelopment'])->name('software_app_development');
    Route::get('data-enrichment-management',[HomeController::class, 'dataManagement'])->name('data_enrichment_management');
    Route::get('cyber-security',[HomeController::class, 'cyberSecurity'])->name('cyber_security');
});
Route::get('/nos-offres-emplois', [HomeController::class, 'nosOffresEmplois'])->name('nos_offres_emplois');
Route::get('/devenir-actionnaire', [HomeController::class, 'devenirActionnaire'])->name('devenir_actionnaire');

//end new routes
Route::post('/validate/devis', [HomeController::class, 'storeDemandeDevis'])->name('store.devis');

Route::middleware(['auth'])->group(function () {
    Route::prefix('profil')->name('profil.')->group(function () {
        Route::get('index',[ProfileController::class, 'index'])->name('index');
        Route::get('create',[ProfileController::class, 'create'])->name('create');
        Route::get('edit/{id}',[ProfileController::class, 'edit'])->name('edit');
        Route::put('update/{id}',[ProfileController::class, 'update'])->name('update');
    });
        
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('isAdmin')->group(function () {
        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('contact',[ContactController::class, 'index'])->name('contact.index');
            Route::get('supprimer/contact/{id}',[ContactController::class, 'deleteContact'])->name('contact.delete');
            Route::post('/send-mail/{id}', [ContactController::class, 'sendMail'])->name('send.mail');

            Route::prefix('service')->name('service.')->group(function () {
                Route::get('index',[ServiceController::class, 'index'])->name('index');
                Route::get('create',[ServiceController::class, 'create'])->name('create');
                Route::post('store',[ServiceController::class, 'store'])->name('store');
                Route::get('edit/{id}',[ServiceController::class, 'edit'])->name('edit');
                Route::post('update/{id}',[ServiceController::class, 'update'])->name('update');
            });
            Route::prefix('portfolio')->name('portfolio.')->group(function () {
                Route::get('index',[PortfolioController::class, 'index'])->name('index');
                Route::get('create',[PortfolioController::class, 'create'])->name('create');
                Route::post('store',[PortfolioController::class, 'store'])->name('store');
                Route::get('edit/{id}',[PortfolioController::class, 'edit'])->name('edit');
                Route::post('update/{id}',[PortfolioController::class, 'update'])->name('update');
            });
            Route::prefix('blog')->name('blog.')->group(function () {
                Route::get('index',[BlogController::class, 'index'])->name('index');
                Route::get('create',[BlogController::class, 'create'])->name('create');
                Route::post('store',[BlogController::class, 'store'])->name('store');
                Route::get('show/{id}',[BlogController::class, 'show'])->name('show');
                Route::get('edit/{id}',[BlogController::class, 'edit'])->name('edit');
                Route::put('update/{id}',[BlogController::class, 'update'])->name('update');
            });
            Route::prefix('equipe')->name('equipe.')->group(function () {
                Route::get('index',[EquipeController::class, 'index'])->name('index');
                Route::get('create',[EquipeController::class, 'create'])->name('create');
                Route::get('edit/{id}',[EquipeController::class, 'edit'])->name('edit');
                Route::put('update/{id}',[EquipeController::class, 'update'])->name('update');
            });
            Route::prefix('devis')->name('devis.')->group(function () {
                Route::get('index',[DevisController::class, 'index'])->name('index');
                Route::get('create',[DevisController::class, 'create'])->name('create');
                Route::get('edit/{id}',[DevisController::class, 'edit'])->name('edit');
                Route::put('update/{id}',[DevisController::class, 'update'])->name('update');

                Route::post('change/status/{id}',[DevisController::class, 'changeStatus'])->name('change.status');
                Route::get('delete/{id}',[DevisController::class, 'delete'])->name('delete');

                Route::post('/send-mail/{id}', [DevisController::class, 'sendMail'])->name('send.mail');

            });
            Route::prefix('apparence')->name('apparence.')->group(function () {
                Route::get('index',[ApparenceController::class, 'index'])->name('index');
                Route::post('update',[ApparenceController::class, 'update'])->name('update');
            });
            Route::prefix('settings')->name('settings.')->group(function () {
                Route::get('index',[SettingsController::class, 'index'])->name('index');
                Route::post('update',[SettingsController::class, 'update'])->name('update');
            });

            Route::get('profile', [AdminController::class, 'profile'])->name('profile');
            Route::put('update', [AdminController::class, 'update'])->name('update');

        });
    });
    Route::middleware('isClient')->group(function () {
        Route::prefix('client')->name('client.')->group(function () {
            Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
           
        });
    });

    
});