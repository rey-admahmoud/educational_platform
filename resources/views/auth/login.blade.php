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
            <form action="{{ route('checklogin') }}" method="POST">
                @csrf
                <input type="email" placeholder="email" name="email">
                @error('email')
                    <pre class="text-danger">th email required</pre>
                @enderror
                <input type="password" placeholder="password" name="password">
                @error('password')
                    <pre class="text-danger">th password required</pre>
                @enderror
                <input type="submit" class="btn" value="login">
            </form>
            <p>don't have acount <a href="{{ route('register') }}">create account</a></p>
        </div>
    </div>
</body>
</html>