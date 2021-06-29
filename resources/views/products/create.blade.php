@extends('home')
  
@section('stock')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>New Product</h2>
        </div>
        
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-info" href="{{ route('products.index') }}"> Back </a>
    </div>

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                <input type="text" name="product_name" class="form-control m-2" value="{{old('product_name')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Price:</strong>
                <input class="form-control m-2" name="product_price" value="{{old('product_price')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Qantity </strong>
                <input class="form-control m-2" name="product_qty" value="{{old('product_qty')}}">
            </div>
        </div> <br> <br>
        <div class="row">         
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="m-3 btn btn-success"> Submit </button>
            </div>
        </div>
    </div>
   
</form>
@endsection