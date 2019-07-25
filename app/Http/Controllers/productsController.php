<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class productsController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index')->with('products', Product::all() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'product'      => 'required|max:255',
           'image'        => 'required|image',
           'price'        => 'required',
           'description'  => 'required'
        ]);

        $image           = $request->image;
        $image_new_name  = time().$image->getClientOriginalName();
        $image->move('uploads/products/',$image_new_name);

        $products = Product::create([
            
            'image'       =>  'uploads/products/'.$image_new_name,
            'product'     =>  $request->product,
            'description' => $request->description,
            'price'       =>  $request->price,
            'slug'        => str_slug($request->product)
        ]);

        Session::flash('success','A new product added successfully');
        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.edit')->with('products',Product::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
             'product'     => 'required|max:255',
             'image'       => 'required|image',
             'description' => 'required',
             'price'       =>  'required'
        ]);

        $products = Product::find($id);

        if($request->hasFile('image')){
              $image = $request->image;
              $image_new_name = time().$image->getClientOriginalName();
              $image->move('uploads/products/',$image_new_name);
        }

        $products->product = $request->product;
        $products->image = 'uploads/products/'.$image_new_name;
        $products->description = $request->description;
        $products->price = $request->price;

        $products->save();
        
        Session::flash('success','Product updated successfully');
        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);

        if(file_exists($products->image))
        {
            unlink($products->image);
        }

        $products->delete();

        Session::flash('success','Product deleted successfully');

        return redirect()->route('products.index');
    }
}
