<!DOCTYPE html>
<head>
    <title>

    </title>
    {{-- <link rel="stylesheet" href="{{url('css/app1.css')}}"> --}}
    
    <link rel="stylesheet" href="{{ url('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
</head>
<div class="container vh-10 d-flex justify-content-center align-items-center">
<body>

    <div class="">
      
        <h1>REGISTRATION</h1>
    <form method="post" action="{{route('product.store')}} ">
        @csrf
        @method('post')
        <table>
                  
    <div class="container">
        
    <div class="row">
       <div class="col">
        <label for="productname" class="form-label">Product Name:</label>
       </div>
        <div class="col">
        <input type="text" class="form-control" name="ProductName" required>
        </div>
    </div>
        <div class="row">
            <div class="col">
        <label for="poducttype" class="form-label">Product Type:</label>
            </div>
        <div class="col">
        <input type="text" class="form-control" name="ProductType">
        </div>
    </div>
    
    
        <div class="row">
            <div class="col">
        <label for="brand" class="form-label">Brand:</label>
            </div>
        <div class="col">
        <input type="text" class="form-control" name="Brand">
        </div>
    </div>
    
        <div class="row">
            <div class="col">
        <label for="model" class="form-label">Model:</label>
            </div>
            <div class="col">
      <input type="text" class="form-control" name="Model">
      
        </div>
    </div>
    
    <div class="row">
        <div class="col">
    <label for="serialnumber" class="form-label">Serial Number:</label>
        </div>
        <div class="col">
    <input type="text" class="form-control" name="SerialNumber">
        </div>
</div>

    <div class="row">
        <div class="col">
    <label for="WarrantyExpiryDate" class="form-label">WarrantyExpiryDate:</label>
        </div>
   <div class="col">
    <input type="text" class="form-control" name="WarrantyExpiryDate">
</div>
    </div>


    
    </div>

        <button type="submit" class="btn btn-info">save</button>
        </div>
        <div class="mt-3 space-y-1">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
    
                <x-responsive-nav-link :href="route('logout')">
                        
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
       
    </form>
    
    
</div>

</body>