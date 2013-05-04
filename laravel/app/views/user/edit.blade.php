<h2>Edit User #{{$user->id}}</h2>
{{ Form::open(array( 'url' => "/user/{$user->id}", 'method' => 'put')) }}

	<p>
		{{ Form::label('email', 'E-mail') }}
		{{ Form::text('email', $user->email) }}
	</p>

	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
	</p>

	<p>
		{{ Form::submit('Update') }}
	</p>

{{ Form::close() }}