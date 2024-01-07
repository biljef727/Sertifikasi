<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Collection</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <h1>Book Collection</h1>
    <h2><a href="/">Log Out</a></h2>
    <table border="1px" class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->Title}}</td>
                    <td>{{$item->Author}}</td>
                    <td>{{$item->Penerbit}}</td>
                    <td>{{$item->Tahun}}</td>
                    <td>{{$item->Status}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <h2><a href="/rental">Rent a Book</a></h2>
</body>
</html>