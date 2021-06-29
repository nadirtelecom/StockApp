@extends('home')
  
@section('stock')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-2">
                <strong>Product Name : </strong>
                {{ $product->product_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-2">
                <strong>Product Price : </strong>
                {{ $product->product_price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-2">
                <strong>Product Quantity : </strong>
                {{ $product->product_qty }}
            </div>
        </div>
        <div class="pull-right">
            <a class="m-3 btn btn-info" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
@endsection