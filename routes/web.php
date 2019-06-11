<?php

Route::resource('/', 'UsuarioController');

Route::resource('/pet', 'PetController');

Route::get('/logout', function() {
	return view('logout');
});

Route::get('/cadastrarPet', function() {
	return view('cadastrarPet');
});

Route::get('/meuPerfil', function() {
	return view('meuPerfil');
});
Route::get('/editarPerfil', function() {
	return view('editarPerfil');
});

Route::get('/meusPets', function() {
	return view('meusPets');
});

Route::get('/login', 'LoginController@index');
