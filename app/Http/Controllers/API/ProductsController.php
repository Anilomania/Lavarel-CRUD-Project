<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Image;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function get_all_product()
    {
        $products = Products::all()
       
        return response()->json ([
          'products'  $products ],200);


}
{
public function add_product(request){
$product = new Product();
$product->name = $request->name;
$product->description = $request->description;

$product->photo = = $request->photo;
$strpos = strpos($request->photo,0,strpos)
$ex = explode('/',$sub)[1];
$name = time(). "/upload/";
$img->save($upload_path.$name);
$product->photo =$name;
}
}
$product->photo = $name;
$product->type = $request->type;
$product->Quantity = $request->quantity;
$product->save();
}

public function get_edit_product($id){
    $product = Product::find($id);
    return response()->json([
        'product' => $product
    ],200)
}
public function update_product(Request $request , $id){
    $product = Product::find($id);
    $product->name = $request->name;
    $product->description = $request->description; 
    
    if($products->photo!$request->photo)
        $strpos = strpos($request->photo,0,strpos)
        $ex = explode('/',$sub)[1];
        $name = time(). "/upload/";
        $img->save($upload_path.$name);
        $product->photo =$name;
}
{
    # code...
}
{
    # code...
}

