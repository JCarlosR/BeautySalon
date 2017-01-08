<?php


// CITAS
    Route::get('/', 'CitaController@index');
    Route::get('/citas/registrar', 'CitaController@panelCita');
    Route::post('/citas/registrar','CitaController@registrarCita');

// CLIENTE

// PANEL DEL ADMINISTRADOR(PERSONAL)
Route::delete('/sistema/administrador/{id}', 'CitaController@eliminarCita');


Auth::routes(); // Login, Register, Logout
Route::get('/home', 'HomeController@index');
