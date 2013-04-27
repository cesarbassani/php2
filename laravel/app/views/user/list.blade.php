<h2>Users</h2>
<hr>
@foreach ($users as $user)
<p>
    <b>E-mail:  </b> {{$user->email}} <br>
    <b>Created at: </b> {{$user->created_at}} <br>
    <b>Updated at: </b> {{$user->updated_at}}<br>
</p>

@endforeach