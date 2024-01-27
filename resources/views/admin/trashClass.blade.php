<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Trashed Class
	@endsection
	@include('includes.head')
</head>
<body>
@include ('admin.includes.navbar')
<div class="container">
@if(session('danger'))
<div class="alert alert-danger">
	{{session('danger')}}
</div>
@endif
  <h2>Trashed</h2>
  <table class="table table-hover">
    <thead>
      <tr>
       
        <th>Class Name</th>
        <th>Teacher Name</th>
        <th>active</th>
        <th>Delete</th>
        <th>Restore</th>


      </tr>
    
    </thead>
    <tbody>
    @foreach($class as $class)
      <tr>
        <td>{{ $class->className }}</td>
        <td>{{ $class->teacher->teacherName }}</td>
       
        <td>
        @if($class->active)
          yes
      @else
         No
       @endif
        </td>
        
        <td><a href="forceDeleteClass/{{ $class->id }}" onclick="return confirm('Are you sure you want to delete?')">ForceDelete</a></td>
        <td><a href="restoreClass/{{ $class->id }}">Restore</a></td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
  {{$class->links()}}
</div>

</body>
</html>