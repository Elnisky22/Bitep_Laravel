<?php

Route::redirect('/','/index');

Route::resources([
	'index' => 'UsuarioController',
	'pet' => 'PetController'
]);

Route::get('/signin', 'LoginController@index')->name('signin');

Route::post('/cadastrarPet', 'PetController@store');

Route::post('/login', 'LoginController@store');

Route::get('/buscaPet','PetController@searchPet'); //chama o metodo de busca

Route::get('/logout', function() {
	return view('logout');
});

Route::get('/meuPerfil', function() {
	return view('meuPerfil');
});

Route::get('/editarPerfil', function() {
	return view('editarPerfil');
});

Route::get('/cadastrarPet', function() {
	return view('cadastrarPet');
});

Route::get('/meusPets', function() {
	return view('meusPets');
});

Route::post('/loadCidades/{estado_id}', 'LoginController@loadCidades')->name('loadCidades');