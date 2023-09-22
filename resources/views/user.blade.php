<h1>User Detail</h1>

@foreach ($data as $id=>$user )
<h3>Name:{{$user->name}}</h3>
<h3>Age:{{$user->age}}</h3>
<h3>Email:{{$user->email}}</h3>
<h3>Address:{{$user->address}}</h3>
    
@endforeach