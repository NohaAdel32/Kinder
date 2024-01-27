<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Classes List
	@endsection
	@include('includes.head')
</head>
<body>
@include ('admin.includes.navbar')
<div class="container">
  <h2>Class List</h2>
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
       
        <th>Class Name</th>
        <th>Age</th>
        <th>Time</th>
        <th>Capacity</th>
        <th>Teacher Name</th>
        <th>Active</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>

      </tr>
    
    </thead>
    <tbody>
    @foreach($class as $class)
      <tr>
        <td>{{ $class->className }}</td>
        <td>{{ $class->fromAge }} - {{ $class->toAge }} </td>
        <td>{{date('h:i a', strtotime($class['fromTime']))}} to {{date('h:i a', strtotime($class['toTime']))}}
        <td>{{ $class->capacity }}</td>
        <td>{{ $class->teacher->teacherName }}</td>
        <td>
        @if($class->active)
          yes
      @else
         No
       @endif
        </td>
        <td><a href="updateClass/{{ $class->id }}">Edit</a></td>
        <td><a href="showClass/{{ $class->id }}">Show</a></td>
        <td><a href="deleteClass/{{ $class->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
  {{$class->links()}}
</div>

</body>
</html>