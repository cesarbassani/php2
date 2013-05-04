<h2>Login</h2>
{{ Form::open(array( 'url' => "/login", 'method' => 'post')) }}

	<p>
		{{ Form::label('email', 'E-mail') }}
		{{ Form::text('email') }}
	</p>

	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
	</p>

	<p>
		{{ Form::submit('Login') }}
	</p>

{{ Form::close() }}