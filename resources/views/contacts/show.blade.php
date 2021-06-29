@extends('home')
  
@section('stock')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Contact</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info m-3" href="{{ route('contacts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>First Name : </strong>
                {{ $contact->first_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Last Name : </strong>
                {{ $contact->last_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Email : </strong>
                {{ $contact->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Phone : </strong>
                {{ $contact->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Location : </strong>
                {{ $contact->location }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group m-1">
                <strong>Photo : </strong>
                {{ $contact->photo }}
            </div>
        </div>
    </div>
@endsection