<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('vendor.index', ['products' => Product::paginate(3)]);
    }

    public function singleProduct($id)
    {
        return view('vendor.single', ['product' => Product::find($id) ]);
    }
}
