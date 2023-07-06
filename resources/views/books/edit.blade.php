<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Edit Books</title>
</head>
<body>
    <h1>Edit Book</h1>
    @if(count($errors)>0)
        <div style="text-align:center;background-color:red;padding:5px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    @if(Session::has('success'))
        <div style="text-align:center;background-color:aqua;padding:5px;">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
    <form method="post" action="{{ route('/update-book',['id'=>$book->id]) }}">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $book->name }}" id="" required>
        <br>
        <label for="">Author</label>
        <input type="text" name="author" value="{{ $book->author }}" id="" required>
        <br>
        <label for="">ISBN</label>
        <input type="text" name="isbn" value="{{ $book->isbn }}" id="" required>
        <br>
        <label for="">Quantity</label>
        <input type="text" name="quantity" value="{{ $book->quantity }}" id="" required>
        <br>
        <label for="">Price</label>
        <input type="text" name="price" value="{{ $book->price }}" id="">
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
