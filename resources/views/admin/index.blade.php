@extends('layouts.app')

@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="text-center text-danger">Products</h3>
    </div>
    <div class="panel-body">
        <table class="table table-dark">
            <thead>
               <tr>
                   <th>S.No</th>
                   <th>Image</th>
                   <th>Product</th>
                   <th>Price</th>
                   <th>View</th>
                   <th>Edit</th>
                   <th>Delete</th>
               </tr>
            </thead>
            <tbody>
                @if($products->count() > 0)
                    @foreach($products as $key=>$product):
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                <img src="{{ $product->image }}" alt="{{ $product->product }}" width="70px" height="60px">
                            </td>
                            <td>{{ $product->product }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a href="" class="btn btn-xs btn-info">View</a>
                            </td>    
                            <td>
                                <a href="{{ route('products.edit',[ 'id' => $product->id ] ) }}" class="btn btn-xs btn-primary">Edit</a>
                            </td>
                            <td>    
                                <form action="{{ route('products.destroy',['id' => $product->id ]) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                     <button class="btn btn-danger btn-xs">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                     <tr>
                         <td class="text-center" colspan="7">
                             NO DATA AVAILABLE HERE...
                         </td>
                     </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection