<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        </style>
        <div class="text-center">
            <h1>Products</h1>
        </div>
        {{-- <link rel="stylesheet" href="{{url('css/app.css')}}"> --}}
        <link rel="stylesheet" href="{{ url('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    </head>
    
    <body class="p-3 mb-2 bg-body-secondary">
        
            <form class="form-container" >
        <table class="table table-sm table-striped-columns">
        <thead>
            <th>Username </th>
            <th>SerialNumber</th>
            <th>Product Name </th>
            <th>Product Type </th>
            <th>brand</th>
            <th>model</th>
            <th>PurchaseDate</th>
            <th>WarrantyExpiryDate</th>
            <th>Actions</th>
           
        </thead>
        <tbody>
        @foreach ($products as $product)
        <tr class="">
            <td>{{$product->username}}</td>
            <td>{{$product->SerialNumber}}</td>
            <td>{{$product->ProductName}}</td>
            <td>{{$product->Brand}}</td>
            <td>{{$product->Model}}</td>
            <td>{{$product->PurchaseDate}}</td>
            <td>{{$product->WarrantyExpiryDate}}</td>
            
            <td><a href="{{route('product.destroy',$product->id)}}"class="link-offset-2 link-underline link-underline-opacity-0"><button type="button" class="btn btn-light" >delete</a></button>
             <a href="{{route('edit',['product'=>$product])}}" class="link-offset-2 link-underline link-underline-opacity-0"><button type="button" class="btn btn-light" > edit</a></button>
            </td>
            {{-- <td> <a href="{{route('receipt',$product->id)}}">PRINT RECEIPT</a></td> --}}
        </tr>
        @endforeach
        @foreach($prodtypes as $prodtype)
        <td>{{$prodtype->name}}</td>
        @endforeach
        </tbody>
        </table>
        </form>
        {{-- <div class="mvc"><a href="{{route('product.create')}}">return to form</a><div> --}}
        
    </body>
    
</html>