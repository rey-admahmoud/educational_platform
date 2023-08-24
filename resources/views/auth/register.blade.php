<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('admin.layout.head');
    <link rel="stylesheet" href="{{ URL::asset('my_assets/css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="login">
        <div>
            <form action="{{ route('adduser') }}" method="POST">
                @csrf
                <input type="text" placeholder="name" name="name">
                <input type="email" placeholder="email" name="email">
                <input type="password" placeholder="password" name="password">
                <input type="submit" class="btn" value="register">
            </form>
            <p>have acount <a href="{{ route('login') }}">log in</a></p>
        </div>
    </div>
</body>
</html>