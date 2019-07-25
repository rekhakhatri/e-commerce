@extends('layouts.app')

@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="text-center text-danger">Add a new Product</h3>
    </div>
    <div class="panel-body">
        <form action="{{ route('products.update', ['id' => $products->id ]) }}" method="post" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="product">Product</label>
                <input type="text" name="product" class="form-control" value="{{ $products->product }}" placeholder="Enter Product name here">
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" value="{{ $products->price }}" placeholder="Enter Price here">
            </div>
            <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" name="description" placeholder="Add product description here..." id="" cols="30" rows="10">{{ $products->description }}</textarea>
            </div>
            <div class="text-center">
                    <button class="btn btn-success" type="submit">
                         Update Product
                    </button>
               </div>
        </form>
    </div>
</div>

@endsection