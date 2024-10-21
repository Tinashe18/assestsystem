<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
        <!-- Styles -->
        <style>
            .lgn{
            text-align: center;
            
        }
           </style>
           

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    
    <body class="p-3 mb-2 bg-body-secondary">
        
        <nav class="navbar " style="background-color:whitesmoke">
            
        <div class="lgn">
            @if (Route::has('login'))
            <ul class="nav justify-content-end">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link active">Log in</a><br><br>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link active">Register</a>
                        </li>
                        @endif
                    @endauth
                    @endif
            </ul>
                </div>
           
        </nav>
    
    </body>
</html>
