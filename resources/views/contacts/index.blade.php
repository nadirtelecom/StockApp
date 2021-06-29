@extends('home')
 
@section('stock')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Contacts Manager </h3>
                <hr>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create New Contact</a> <br> <br>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert-success">
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Location </th>
            <th>Photo</th>
            <th width="280px"> Action </th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->location }}</td>
            <td>{{ $contact->photo }}</td>
            <td>
                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('contacts.show',$contact->id) }}">Show</a>
    
                    <a class="btn btn-warning" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    <div>
        {{ $contacts->links() }} 
    </div>
      
    </table>   
@endsection