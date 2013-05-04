<h2>Create new Profile</h2>
{{ Form::open(array( 'url' => '/profile', 'method' => 'post')) }}

	<p>
		{{ Form::label('name', 'Full name') }}
		{{ Form::text('name', Input::old('name')) }}
	</p>

	<p>
		{{ Form::label('celphone', 'Celphone') }}
		{{ Form::text('celphone', Input::old('celphone')) }}
	</p>

	<p>
		{{ Form::label('photo', 'Photo') }}
		{{ Form::file('photo') }}
	</p>

	<p>
		{{ Form::submit('Create') }}
	</p>

{{ Form::close() }}