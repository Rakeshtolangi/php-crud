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


    

    // show the form for creating new resource
    public function create(){
        return view('products.create');
    }



    
    
    // Store a newly created resouce in storage.
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

    

    // Display the specified resouce
    public function show($id){
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    
    
    // Show the form for editing the specified resource
    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    

    // Update the specified resource in storage
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'description' => 'nullable'
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('product.index')->with('success','Product updated successfull!');
        
    }

        // Remove the specified resource from storage
    public function destroy($id)
        {
            $product = Product::findOrFail($id);
            $product->delete();

            return redirect()->route('product.index')->with('success','Product deleted successfully!');
        }
    
    
}