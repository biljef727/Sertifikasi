<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Rental</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<h1>Rental</h1>
<h3><a href="/book">Back?</a></h3>
<form action="/rental" method="POST" class="user">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="Name" placeholder="Enter Name" required>
    </div>
    <select name="book">
        @foreach($data->where('Status', 'Available') as $row)
            <option value="{{$row->id}}">{{$row->Title}}</option>
        @endforeach
    </select>
    <button type="submit" name="rent btn-primary">Rent Book</button>
</form>
</body>
</html>