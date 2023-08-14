<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function getProducts()
    {
     $products=Product::get();
    // //  dd($products); dump and die
    //   dump($products);
      return view('index',['products'=>$products]);
    }
}
