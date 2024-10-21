<!DOCTYPE html>
<head>
    <title>

    </title>
    {{-- <link rel="stylesheet" href="{{url('css/app1.css')}}"> --}}
    <link rel="stylesheet" href="{{ url('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <div class="text-center">
        <h1>EDIT</h1>
    </div>
</head>
<div class="container vh-10 d-flex justify-content-center align-items-center">
<body class="p-3 mb-2 bg-body-secondary">
    <form class=""  method="post" action="{{route('product.update',$product->id)}}">
        @csrf
        @method('put')
        
            <input type="hidden" name="id" value="{{$product->id}}">
        <div class="row">
            <div class="col">
            <label for="serialnumber" class="form-label">SerialNumber:</label>
            </div>
            <div class="col">
            <input type="text" class="form-control" name="SerialNumber"value="{{$product->SerialNumber}}">
        </div>
        </div>
            <div class="row">
                <div class="col">
                <label for="productname" class="form-label">Product Name:</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="ProductName"value="{{$product->ProductName}}">
            </div>
            </div>
           <select name="producttype">
            @foreach ($prodtypes as $prodtype)
                <option value="{{ $prodtype->name}}">{{ $prodtype->name}}</option>
            @endforeach
           </select>
            <div class="row">
                <div class="col">
                <label for="brand" class="form-label">brand:</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="Brand"value="{{$product->Brand}}">
            </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="model" class="form-label">Model:</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="Model"value="{{$product->Model}}">
            </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="warranty" class="form-label">WarrantyExpiryDate:</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="WarrantyExpiryDate"value="{{$product->WarrantyExpiryDate}}">
            </div>
            </div>
        <br>
        <input class="btn btn-primary" type="submit" value="Update">
        
        </div>
        </div>
    </form>
</div>
</div>
</body>