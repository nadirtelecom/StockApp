@extends('home')
 
@section('stock')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3> Products Manager </h3>
            </div>

            <hr>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product </a> <br> <br>
            </div>
        </div>
    </div>
    
        @if ($message = Session::get('success'))
            <div class="alert-info">
              <p>{{ $message }}</p>
            </div>
        @endif
    
    
        @if ($message = Session::get('danger'))
        <div class="alert-danger">
            <p>{{ $message }}</p>
        </div>
        @endif
    
    
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Product Name </th>
            <th>Product Price </th>
            <th>Product Qantity </th>
            <th width="280px">Action</th>
        </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_price }}</td>
            <td>{{ $product->product_qty }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
<div>
    {{ $products->links()}}
</div>
@endsection