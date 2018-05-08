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

/**
 * Guest routes
 */
Route::namespace('Guest')->name('guest.')->group(function() {
    // home
    Route::get('/', 'HomeController@index')->name('home');

    // Expédier colis-form
    Route::namespace('Colis')->prefix('colis')->name('colis.')->group(function() {

      Route::get('expedier-colis', 'ColisController@form')->name('formColis');
      //Route::post('expedier-colis', 'ColisController@form_2')->name('formColis2');
      Route::post('expedier-colis', 'ColisController@handle')->name('handle');

    });

    // Proposer trajet-form
    Route::namespace('Trajet')->prefix('trajet')->name('trajet.')->group(function() {

      Route::get('proposer-trajet', 'TrajetController@form')->name('formTrajet');
      //Route::post('expedier-colis', 'ColisController@form_2')->name('formColis2');
      Route::post('proposer-trajet', 'TrajetController@handle')->name('handle');

    });

    // Vue des annonces

    Route::namespace('Annonce')->prefix('annonce')->name('annonce.')->group(function() {

      Route::get('vue-annonces', 'AnnonceController@form')->name('vueAnnonce');
      //Route::post('expedier-colis', 'ColisController@form_2')->name('formColis2');
      Route::post('vue-annonces', 'AnnonceController@handle')->name('handle');

    });

    // auth
    Route::namespace('Auth')->prefix('auth')->name('auth.')->group(function() {
        // login
        Route::name('login.')->group(function() {
            Route::get('login', 'LoginController@form')->name('form');
            Route::post('login', 'LoginController@handle')->name('handle');
        });
        // register
        Route::name('register.')->group(function() {
            Route::get('register', 'RegisterController@form')->name('form');
            Route::post('register', 'RegisterController@handle')->name('handle');

        });
    });

    // paramètres
    Route::namespace('Parametre')->prefix('parametre')->name('parametre.')->group(function() {

      Route::get('vue-parametre', 'ParametreController@form')->name('vueParametre');
      //Route::post('expedier-colis', 'ColisController@form_2')->name('formColis2');
      Route::post('vue-parametre', 'ParametreController@handle')->name('handle');

    });

    // profil
    Route::namespace('Profil')->prefix('profil')->name('profil.')->group(function() {

      Route::get('vue-profil', 'ProfilController@form')->name('vueProfil');
      //Route::post('expedier-colis', 'ColisController@form_2')->name('formColis2');
      Route::post('vue-profil', 'ProfilController@handle')->name('handle');

    });


});
