<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Appointments List
	@endsection
	@include('includes.head')
</head>
<body>
@include ('admin.includes.navbar')
<div class="container">
  <h2>Appointments List</h2>
@if(session('danger'))
<div class="alert alert-danger">
	{{session('danger')}}
</div>
@endif
  <table class="table table-hover">
    <thead>
      <tr>
       
        <th>Gurdian Name</th>
        <th>Child Name</th>
        <th>Child Age</th>
        <th>Show</th>
        <th>Delete</th>

      </tr>
    
    </thead>
    <tbody>
    @foreach($appointment as $appoint)
      <tr>
        <td>{{ $appoint->gurdianName }}</td>
        <td>{{ $appoint->childName }}</td>
        <td>{{ $appoint->childAge }}</td>
      
        <td><a href="showappoint/{{ $appoint->id }}">Show</a></td>
        <td><a href="deleteappoint/{{ $appoint->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
</div>

</body>
</html>