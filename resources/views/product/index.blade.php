<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Welcome, {{ $user->name }}</h1> <!-- Display the user's name -->
    
    <h2>Products</h2>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - ${{ number_format($product->price, 2) }}</li>
        @endforeach
    </ul>
</body>
</html>