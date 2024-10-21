<?php

namespace App\Http\Controllers;
use App\Models\products; 
use App\Models\prodtypes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts() {
        // Get the authenticated user
        $user = Auth::user();
    
        // Assuming you have a Product model to get the products
        $products = Products::all();
        $prodtypes = prodtypes::all();
    
        return view('products.index', [
            'user' => $user,
            'products' => $products,
            '$prodtypes'=>$prodtypes,
        ]);
    }
    public function show() {
        // Fetch all products from the database
        $products = products::all();
     
            
            // Return the view with the products data
            // return view('pro.show', compact('prodtypes'));
        
        // Return the view with the products data
        return view('product.show', compact('products'));

    }
    public function welcome(){
        return view('product.welcome');
    }

    
    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $data = new products;
        $data->username=Auth::user()->name;
        $data->serialnumber=$request->input('SerialNumber');
        $data->productname=$request->input('ProductName');
        $data->producttype=$request->input('ProductType');
        $data->brand=$request->input('Brand');
        $data->model=$request->input('Model');
        $data->purchasedate=$request->input('PurchaseDate');
        $data->warrantyexpirydate=$request->input('WarrantyExpiryDate');
        

        $data->save();
        
        //  // Redirect to a new page
        return redirect()->route('show');
       

    }
    public function destroy($id) {
        $product = Products::findOrFail($id);
        $product->delete();
    
        return redirect()->route('show')->with('success', 'Product deleted successfully.');
    }
    public function edit($id){
        // dd($product);

        $prodtypes = prodtypes::all();

        $product = products::find($id);
     
   
        return view('product.update', compact('product','prodtypes' ));
    }
    public function update(Request $request) {

        $id = $request->input('id');
        $data = Products::findOrFail($id);
        $data->serialnumber=$request->input('SerialNumber');
        $data->productname=$request->input('ProductName');
        $data->producttype=$request->input('ProductType');
        $data->brand=$request->input('Brand');
        $data->model=$request->input('Model');
        $data->warrantyexpirydate=$request->input('WarrantyExpiryDate');
        // $data->name=$request->input('name');



        $data->save();
        return redirect(route('show'));
        
}
        // public function receipt(products $product){
        //     $totalPrice = $product->qty * $product->price;
        //     return view('product.receipt',['product'=>$product,'totalprice'=>$totalPrice]);
        // // $data->save();
        

        // }
}



