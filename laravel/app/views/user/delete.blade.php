<h2>Delete User #{{$user->id}}</h2>
{{ Form::open(array( 'url' => "/user/{$user->id}/delete/confirm", 'method' => 'post')) }}

	<p>
		{{ Form::label('email', 'E-mail') }}
		{{ Form::text('email', $user->email) }}
	</p>

	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
	</p>

	<p>
		{{ Form::submit('Delete') }}
	</p>

{{ Form::close() }}