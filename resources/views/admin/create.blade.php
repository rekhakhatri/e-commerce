@extends('layouts.app')

@section('content')
{{-- @if(count($errors) > 0)
<ul class="list-group">
     @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">
           {{ $error }}
        </li>
     @endforeach
 </ul>   
@endif --}}
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="text-center text-danger">Add a new Product</h3>
    </div>
    <div class="panel-body">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="product">Product</label>
                <input type="text" name="product" class="form-control" value="{{ old('product') }}" placeholder="Enter Product name here">
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" value="{{ old('price') }}" placeholder="Enter Price here">
            </div>
            <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" name="description" placeholder="Add product description here..." id="" cols="30" rows="10">{{ old('description') }}</textarea>
            </div>
            <div class="text-center">
                    <button class="btn btn-success" type="submit">
                         Store Product
                    </button>
               </div>
        </form>
    </div>
</div>

@endsection