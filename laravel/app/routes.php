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
| Restricted Routes
|--------------------------------------------------------------------------
|
| Rotas restritas, onde Ã© necessÃ¡rio se autenticar
|
*/
//Route::group(array(), function()
Route::group(array('before' => 'auth'), function()
{
	// LISTA TODOS OS USUÃRIOS
	Route::get('/user', function()
	{
		$users = User::all();

		return View::make('user.list')
			->with('users', $users);
	});

	// EXIBE FORMULÃRIO PARA CRIAR USUÃRIO
	Route::get('/user/create', function()
	{
		return View::make('user.create');
	});

	// CRIA NOVO USUÃRIO A PARTIR DOS DADOS DO FORMULÃRIO
	Route::post('/user', function()
	{
		$user = User::create( array(
			'email'		=> Input::get('email'),
			'password'	=> Hash::make( Input::get('password') ),
		));

		return Redirect::to("/user/{$user->id}");
	});

	// EXIBE INFORMAÃ‡Ã•ES DE UM USUÃRIO ESPECÃFICO
	Route::get('/user/{id}', function($id)
	{
		$user = User::find($id);

		return View::make('user.show')
			->with('user', $user);
	});

	// FORMULÃRIO DE EDIÃ‡ÃƒO DE USUÃRIO
	Route::get('/user/{id}/edit', function($id)
	{
		$user = User::find($id);

		return View::make('user.edit')
			->with('user', $user);

	});

	// ATUALIZA INFORMAÃ‡Ã•ES DE ACORDO COM OS DADOS DO FORM ACIMA
	Route::put('/user/{id}', function($id)
	{
		$user = User::find($id);
		if($new_email = Input::get('email'))
		{
			$user->email = $new_email;
		}

		if($new_password = Input::get('password'))
		{
			$user->password = Hash::make($new_password);
		}

		$user->save();

		return Redirect::to("/user/{$user->id}");
	});

	// FORMULÃRIO DE REMOÃ‡ÃƒO DE USUÃRIO
	Route::get('/user/{id}/delete', function($id)
	{
		$user = User::find($id);

		return View::make('user.delete')
			->with('user', $user);

	});

	// REMOVE USUÃRIO
	Route::post('/user/{id}/delete/confirm', function($id)
	{
		$user = User::find($id);
		$user->delete();

		return "User deleted";
	});
});




/*
|--------------------------------------------------------------------------
| Login/Logout Routes
|--------------------------------------------------------------------------
|
| Rotas relacionadas a login e logout
|
*/

// FORMULÃRIO DE LOGIN
Route::get('/login', function()
{
	return View::make('auth.login');
});

// PROCESSA LOGIN
Route::post('/login', function()
{
	$email = Input::get('email');
	$password = Input::get('password');

	if( Auth::attempt(array('email' => $email, 'password' => $password)))
	{
		//return Redirect::intended('/profile');
            return Redirect::to('/user');
	}
});

// FAZ LOGOUT
Route::get('/logout', function()
{
	Auth::logout();

	return View::make('auth.logout');
});

Route::get('/profile/create', function()
{
    return View::make('profile.create');
});

Route::post('/profile', function()
{
    $name       =         Input::get('name');
    $celphone   =     Input::get('celphone');
    $photo      =        Input::file('photo');

    $photo_path = $photo->getRealPath();

    $profile = new Profile;

    $profile->name = $name;
    $profile->celphone = $celphone;
    $profile->photo = $photo_path;

    $profile->save();
});
/*
Route::get('/teste', function()
{
    $user = new User;
    $profile = new Profile;

    $user->email = 'teste@teste.com';
    $user->password = Hash::make('teste');
    $user->save();

    $profile->name = 'Teste da Silva';
    $profile->celphone = '055 5555 5555';
    $profile->photo = 'storage/photos/teste.png';

    $profile->user_id = $user->id;

    $profile->save();
});
