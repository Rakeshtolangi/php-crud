<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    public function index(){
        
        $products = Product::all(); 
        return view('products.index', compact('products'));
    }


    // create data
    public function create(){
        return view('products.create');
    }

    // store data
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'description' => 'nullable'
        ]);
    
        Product::create($request->all());
        return redirect()->route('product.create')
                        ->with('success','Product created successfully.');
    }

    // edit existing data
    public function edit($id){
        // Product::findOrFail($id);
     
        return view('Products.edit', compact('products'));
    }

    

    // update existing data
    public function update(Request $request){
   
        Product::update($request->all());
        return redirect()->route('product.edit')
                        ->with('success','Product edit successfully.');
    }

    // delete data 
    public function delete(Request $request){
      
    
        Product::delete($product);
     
        return redirect()->route('product.create')
                        ->with('success','Product delete successfully.');
    }
    
}