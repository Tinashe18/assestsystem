<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <script src="{{ url('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!DOCTYPE html>
<head>
    <title>

    </title>
    {{-- <link rel="stylesheet" href="{{url('css/app1.css')}}"> --}}
    <link rel="stylesheet" href="{{ url('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">

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
            <div class="row">
            <div class="col">
                <label for="producttype" class="form-label">Product Type:</label>
                </div>
                <div class="col">
            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <select name="producttype">
            @foreach ($prodtypes as $prodtype)
                <option value="{{ $prodtype->name}}">{{ $prodtype->name}}</option>
            @endforeach
           </select>
        </button>
    </div>
              </div>
            </div>
           {{-- <select name="producttype">
            @foreach ($prodtypes as $prodtype)
                <option value="{{ $prodtype->name}}">{{ $prodtype->name}}</option>
            @endforeach
           </select> --}}
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>