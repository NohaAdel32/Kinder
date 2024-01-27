<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Contacts List
	@endsection
	@include('includes.head')
</head>
<body>
@include ('admin.includes.navbar')
<div class="container">
  <h2>Contacts List</h2>
@if(session('danger'))
<div class="alert alert-danger">
	{{session('danger')}}
</div>
@endif
  <table class="table table-hover">
    <thead>
      <tr>
       
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Show</th>
        <th>Delete</th>
        <th>UnreadMessage</th>

      </tr>
    
    </thead>
    <tbody>
    @foreach($contact as $cont)
      <tr>
        <td>{{ $cont->name }}</td>
        <td>{{ $cont->email }}</td>
        <td>{{ $cont->subject }}</td>
      
        <td><a href="showcontact/{{ $cont->id }}">Show</a></td>
        <td><a href="deletecontact/{{ $cont->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        <td>
          @if($cont->read_at == 0)
          <a href="showMessage/{{ $cont->id }}">UnreadMessage</a>
          @endif

        </td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
</div>

</body>
</html>