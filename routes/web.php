<?php
// Main Site
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('quiero-ser-profesional', 'HomeController@gopro');
Route::get('quiero-ser-profesional/review', 'HomeController@review')->name('review');
Route::post('quiero-ser-profesional', 'JugadorController@store');
Route::get('terminos-y-condiciones', 'HomeController@terminos');
Route::get('quiero-ser-profesional/exito', 'HomeController@done');

// Nuevos Miembros
Route::get('agentes-reclutadores', 'HomeController@busquedaReclutadores');
Route::post('agentes-reclutadores', 'HomeController@postBusquedaReclutadores');

Route::get('intermediarios-y-clubs', 'HomeController@busquedaClubs');
Route::post('intermediarios-y-clubs', 'HomeController@postBusquedaClubs');

// Terminos
Route::get('terminos-y-condiciones', 'HomeController@terminos');

// Jugadores Login & Edit Profile
Route::get('editar-mi-perfil', 'Auth\JugadorLoginController@showLogin')->name('jugadores.login');
Route::post('editar-mi-perfil', 'Auth\JugadorLoginController@login')->name('jugadores.login.submit');
Route::get('editar-mi-perfil/{slug}', 'JugadorController@editarPerfil');
Route::patch('editar-mi-perfil/{slug}', 'JugadorController@update' )->name('jugadores.update');

// Master Log IN
//Route::get('login', 'Auth\ManagerLoginController@showLogin')->name('managers.login');
Route::get('manager/login', 'Auth\ManagerLoginController@showLogin')->name('managers.login');
//Route::post('manager/login', 'Auth\ManagerLoginController@login')->name('managers.login.submit');
Route::post('manager/login', 'Auth\ManagerLoginController@login')->name('managers.login.submit');

Route::get('login', 'HomeController@login')->name('home.login');


// Dashboard
Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('dashboard/terminos-y-condiciones', 'DashboardController@terminos')->name('dashboard.terminos');
Route::post('dashboard/terminos-y-condiciones', 'DashboardController@aceptarTerminos')->name('dashboard.aceptarTerminos');
Route::post('cambiarEstadoJugador', 'JugadorController@cambiarEstadp')->name('cambiarEstadoJugador');
Route::get('jugadores/crear-jugador', 'DashboardController@crearJugador')->name('dashboard.crearJugador');
Route::get('jugadores/{jugador}/editar-jugador', 'DashboardController@editarJugador')->name('dashboard.editarJugador');
Route::post('jugadores/crear-jugador', 'DashboardController@storeJugador')->name('dashboard.storeJugador');
Route::patch('jugadores/{jugador}/editar-jugador', 'DashboardController@updateJugador')->name('dashboard.updateJugador');

Route::get('players/{jugador}', 'DashboardController@showPlayer')->name('dashboard.showPlayer');

// Admin
Route::resource('managers', 'ManagerController');
Route::get('managers/edit/{slug}', 'DashboardController@editarPerfil')->name('dashboard.editarPerfil');

// Teest
Route::get('fix', 'HomeController@fix')->name('fix');
Route::get('test', 'AjustesController@test')->name('test');

// Offline
Route::view('offline', 'offline');

//apis
