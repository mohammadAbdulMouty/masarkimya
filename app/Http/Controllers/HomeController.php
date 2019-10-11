<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
    public function showproducts(){
        $products = Product::paginate(9);
        return view('products',compact('products'));
    }
}
