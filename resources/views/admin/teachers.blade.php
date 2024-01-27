<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Teachers List
	@endsection
	@include('includes.head')
</head>
<body>
@include ('admin.includes.navbar')
<div class="container">
  <h2>Teacher List</h2>
  @if(session('success'))
<div class="alert alert-success">
	{{session('success')}}
</div>
@endif
@if(session('danger'))
<div class="alert alert-danger">
	{{session('danger')}}
</div>
@endif
  <table class="table table-hover">
    <thead>
      <tr>
       
        <th>Teacher Name</th>
        <th>Position</th>
        <th>Active</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>

      </tr>
    
    </thead>
    <tbody>
    @foreach($teacher as $teach)
      <tr>
        <td>{{ $teach->teacherName }}</td>
        <td>{{ $teach->position }}</td>
       
        <td>
        @if($teach->active)
          yes
      @else
         No
       @endif
        </td>
        <td><a href="updateTeacher/{{ $teach->id }}">Edit</a></td>
        <td><a href="showTeacher/{{ $teach->id }}">Show</a></td>
        <td><a href="deleteTeacher/{{ $teach->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
</div>

</body>
</html>