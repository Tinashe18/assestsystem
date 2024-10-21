<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>welcome</title>
        <div class="header">
            <h1>site</h1>
        </div>
        <link rel="stylesheet" href="{{url('css/app.css')}}">
        <link rel="stylesheet" href="{{ url('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    </head>
    <body class="antialiased">
        
        <div class=""><a href="{{route('product.create')}}">PROCEED</a><div>
    </body>
</html>
