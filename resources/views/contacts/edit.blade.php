@extends('home')
   
@section('stock')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Contact </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info m-3" href="{{ route('contacts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong class="text-danger ">Whoops! There were some problems with your input.</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger"> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('contacts.update',$contact->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> First Name : </strong>
                    <input type="text" name="first_name" value="{{ $contact->first_name }}" class="form-control"> <br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name : </strong>
                    <input class="form-control"  name="last_name" value="{{ $contact->last_name }}"> <br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email :</strong>
                    <input class="form-control" name="email" value="{{$contact->email }}"> <br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone :</strong>
                    <input class="form-control" name="phone" value="{{ $contact->phone }}"> <br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location :</strong>
                    <input class="form-control" name="location" value="{{ $contact->location }}"> <br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Photo :</strong> 
                    <input class="form-control" name="photo" value="{{ $contact->photo }}"> <br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success m-3">Submit</button> <br>
            </div>
        </div>
   
    </form>
@endsection
