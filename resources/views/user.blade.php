<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>User</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <p>
          <a class="nav-link active" aria-current="page" href="/history">History</a>
          <br>
          <a class="nav-link active" aria-current="page" href="/user">User</a>
          <p>
      
      <a class="nav-link" href="/">Log Out</a>
    </div>
  </div>
</nav>
<h1>User</h1>
<table border="1px" class="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Name</th>
                <th>Status</th>
                <th>Delete</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data->where('Status', 'user') as $item)
                <tr>
                    <td>{{$item->Username}}</td>
                    <td>{{$item->Password}}</td>
                    <td>{{$item->Name}}</td>
                    <td>{{$item->Status}}</td>
                    <td>
                        <a href="{{ route('delete.user', ['id' => $item->id]) }}" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                    <td><img src="{{url('public/signup' . $item->Profile)}}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>