<h2>Create new User</h2>
{{ Form::open(array( 'url' => '/user', 'method' => 'post')) }}

	<p>
		{{ Form::label('email', 'E-mail') }}
		{{ Form::text('email', Input::old('email')) }}
	</p>

	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
	</p>

	<p>
		{{ Form::submit('Create') }}
	</p>

{{ Form::close() }}