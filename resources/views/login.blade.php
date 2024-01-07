<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form-control-user {
            width: 100%;
            height:50px;
        }
        .btn-primary {
        font-size: 16px;
        padding: 10px 20px;
        }
    </style>
    <title>Login</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<h1>Login</h1>
    <form action="/login" method="POST" class="user">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="username"placeholder="Enter Username..." required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" name="password"placeholder="Enter Password..." required>
        </div>
        <button type="submit" class="btn-primary">Login</button>
        <a href="/signup">Don't Have Account? Sign Up!</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($error = Session::get('error'))
    <script>
    Swal.fire('{{ $error }}');
    </script>
    @endif
</body>
</html>