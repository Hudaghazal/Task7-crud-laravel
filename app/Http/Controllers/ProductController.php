<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
       $product= Product::all();
       return $product;

}

public function show($name)
{
    $product= Product::where('name',$name)->get();
    return $product ;
} 
public function create (Product $product)
{
    return $product;

}

public function store(Request $request ,Product $product)
{
    $product=Product::create([
        'name' => $request->name,
        'price' => $request->price,
    ]);
       return $product;
}
public function edit(Product $product)
{
    return $product;

}
public function update($id)
{
    $product = Product::where("id", $id)->update(['name' => 'Updated name','price'=> 'Updated price']);
    return $product;
}

public function destroy(Product $product ,$price)
{
    $product= Product::where('price',$price)->delete();
    return $product ;

}


}
