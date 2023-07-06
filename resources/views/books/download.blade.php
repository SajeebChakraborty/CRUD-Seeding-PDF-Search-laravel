<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>
<body>
    <form method="get" action="{{ route('/search-book')}}">
        @csrf
        <div style="margin-left:970px;">
            <input type="text" name="name" id="" required>
            <input type="submit" value="Search">
        </div>
    </form>
    <table>
        <tr>
            <th>Name</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->quantity }}</td>
            </tr>
        @endforeach

    </table>
</body>
</html>
