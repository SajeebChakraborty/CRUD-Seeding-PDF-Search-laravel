<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Add Books</title>
</head>
<body>
    <h1>Add Books</h1>
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
    <form method="post" action="{{ route('/store-book') }}">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" id="" required>
        <br>
        <label for="">Author</label>
        <input type="text" name="author" id="" required>
        <br>
        <label for="">ISBN</label>
        <input type="text" name="isbn" id="" required>
        <br>
        <label for="">Quantity</label>
        <input type="text" name="quantity" id="" required>
        <br>
        <label for="">Price</label>
        <input type="text" name="price" id="">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
