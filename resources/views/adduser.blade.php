<htmL>
    <head>
        <title>Add User Form
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

<body>

<div class='container'>
    <div class='row'>
        <div class='col-4'>
            <h1>Add New User</h1>
            <form action="{{route('addUser')}}" method='POST'>
            @csrf
            <div class="mb-3">
                <label class='form-label'>Name</label>
                <input type='text' class='form-control' name='username'>
            </div>
                <div class="mb-3">
                <label class='form-label'>Email</label>
                <input type='email' class='form-control' name='useremail'>
            </div>
            <div class="mb-3">
                <label class='form-label'>Age</label>
                <input type='text' class='form-control' name='userage'>
            </div>
            <div class="mb-3">
                <label class='form-label'>Address</label>
                <input type='text' class='form-control' name='useraddress'>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>

            </form>




        </div>
    </div>

</div>






</body>
</htmL>