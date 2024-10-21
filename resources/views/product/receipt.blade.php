<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>recipt</title>
        <div class="header">
            <h1>RECEIPT</h1>
        </div>
        {{-- <link rel="stylesheet" href="{{url('css/app.css')}}"> --}}
    </head>
    <body class="antialiased">
        
        
            <label for="name">NAME:</label>
                <input type="text" name="name" {{ $product->name }}><br><br>
                <label for= "qty">QTY:</label>
                    <input type="text" name="qty" {{ $product->qty }}><br><br>
                    <label for= "price">PRICE:</label>
                    <input type="text" name="price" {{ $product->price }}><br><br>
                    <label for= "total">TOTAL:</label>
                        <input type="text" name="total" {{ $product->total }}><br><br>
                        <p>Thank you for your purchase!</p>
    </body>
</html>