<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
|
| Rotas para manipulaÃ§Ã£o dos usuÃ¡rios
| CRUD: Create, Read, Update and Delete
|
*/

Route::get('/users', function()
{
    // LISTA TODOS OS USUARIOS
    $users = User::all();

    return View::make('user.list')
        ->with('users', $users);

    print_r($users);
});

Route::get('/users/create', function()
{
    // CRIA UM NOVO USUÃRIO
    return 'Criando novo usuÃ¡rio';
});

Route::get('/users/read/{id}', function($id)
{
    // LISTA O USUÃRIO DE ID = $id
    return "Listando usuÃ¡rio $id";
});

Route::get('/users/update/{id}', function($id)
{
    // ATUALIZA O USUÃRIO DE ID = $id
    return "Atualizando usuÃ¡rio $id";
});

Route::get('/users/delete/{id}', function($id)
{
    // REMOVE O USUÃRIO DE ID = $id
    return "Removendo usuÃ¡rio $id";
});