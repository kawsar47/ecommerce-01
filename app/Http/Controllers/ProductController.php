<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addproductview (){
        $products = product::paginate(3);
        return view('product/view',compact('products'));
    }

    function addproductinsert (Request $request){

      product::insert([
          'product_name'=> $request->product_name,
          'product_description'=> $request->product_description,
          'product_price'=> $request->product_price,
          'product_quantity'=> $request->product_quantity,
          'alert_quantity'=> $request->alert_quantity,

      ]);
      return back()->with('status','Product inserted successfully!');

    }
}
