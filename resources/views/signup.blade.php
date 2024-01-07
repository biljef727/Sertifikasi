<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Sign-up</title>
    <style>
        .form-control-user {
            width: 100%;
            height:50px;
        }
        .btn-primary {
        font-size: 16px;
        padding: 10px 20px;
        }
        .form-control{
        width: 100%; 
        height: 40px;
        padding: 8px; 
        box-sizing: border-box;
        }
    </style>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<h1>Signup</h1>
<h3><a href="/">Log in</a></h3>
    <form action="/signup" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="Username"placeholder="Enter Username..." required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" name="Password"placeholder="Enter Password..." required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="Name"placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <input type="file" class="form-control btn-primary" name="Profile"placeholder="Choose File">
        </div>
        <button type="submit" class="btn-primary">Sign up</button>
    </form>
</body>
</html>