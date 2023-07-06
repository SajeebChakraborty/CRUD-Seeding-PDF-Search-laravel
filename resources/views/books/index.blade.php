<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Book List</title>
</head>
<body>
    <a href="{{ route('/add-book') }}" style="float:left;text-decoration:none;background-color:cadetblue;padding:15px;">Add Books</a>
    <a href="{{ route('/generate-pdf') }}" style="float:left;text-decoration:none;background-color:cadetblue;padding:15px;">Generate PDF</a>
    <h1>Book List</h1>
    @if(Session::has('success'))
        <div style="text-align:center;background-color:aqua;padding:5px;">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
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
                <td>
                    <a href="{{ route('/book-details',['id'=> $book->id]) }}" style="text-decoration:none;color:green;">Details </a>
                    <a href="{{ route('/edit-book',['id'=> $book->id]) }}" style="text-decoration:none;color:blue;margin-left:5px;">Edit </a>
                    <a href="{{ route('/delete-book',['id'=> $book->id]) }}" style="text-decoration:none;color:red;margin-left:5px;">Delete </a>
                </td>
            </tr>
        @endforeach

    </table>
</body>
</html>
