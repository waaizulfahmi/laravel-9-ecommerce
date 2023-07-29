<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function create_product()
    {
        return view('create_product');
    }
    public function store_product(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
       
        $file = $request->file('image');
        $path = time()."_". $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $request->image
        ]);

        return Redirect::route('create_product');
    }

    public function index_product(){
        $product = Product::all();
      
        // dd($product);
        return view('index_product', compact('product'));

    }

    public function show_product($id){
        $product = Product::find($id);

        return view('show_product', compact('product'));
    }
}
