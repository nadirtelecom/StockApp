@extends('home')
  
@section('stock')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>New Contact</h2>
        </div>
        
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong  class="text-danger">Whoops! There were some problems with your input. </strong> <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger" >{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-info" href="{{ route('contacts.index') }}"> Back </a>
    </div>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>First Name :</strong>
                <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Last Name :</strong>
                <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Email :</strong>
                <input class="form-control" name="email" value="{{old('email')}}"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Phone :</strong>
                <input class="form-control" name="phone" value="{{old('phone')}}"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Location :</strong>
                <input class="form-control" name="location" value="{{old('location')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Photo :</strong>
                <input class="form-control" name="photo" value="{{old('photo')}}">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success m-3">Submit </button> <br>
        </div>
    </div>
   
</form>
@endsection