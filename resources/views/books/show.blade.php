<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Book Details</title>
</head>
<body>
    <h1>Book Details</h1>
    <div class="details">
        <p><b>Book Name : </b>{{ $book->name }}</p>
        <p><b>Author : </b>{{ $book->author }}</p>
        <p><b>ISBN : </b>{{ $book->isbn }}</p>
        <p><b>Qunatity : </b>{{ $book->quantity }}</p>
        <p><b>Price: </b>{{ $book->price }}</p>
    </div>
</body>
</html>
