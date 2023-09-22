<html>
<head>
<title>
All Users
</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    nav .w-5{
        display:none;
    }
</style>
</head>

<body>

    <div class='container'>
        <div class='row'>
            <div class='col-6'>
                    <h1>Users List</h1>
                
                <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New</a>

                <table class='table table-bordered table-striped'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>View</th>
                    <th>Delete</th>
                     <th>Update</th>
                
                
                </tr>
                @foreach ($data as $id=>$user)
                    <tr>
                        <td> {{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->age}}</td>
                        <td>{{$user->email}}</td>
                        <td> {{$user->address}}</td>
                        <td> <a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        <td> <a href="{{route('delete.user',$user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td> <a href="{{route('update.page',$user->id)}}" class="btn btn-warning btn-sm">Update</a></td>

                    </tr>
                    @endforeach
    
                </table>
            <div class='mt-5'>
            {{$data->links()}}
            
            </div>
            
            </div>
        
        </div>
    
    
    </div>


</body>




</html>

