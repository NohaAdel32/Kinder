<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Trashed Teacher
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
       
        <th>Teacher Name</th>
        <th>Position</th>
        <th>active</th>
        <th>Delete</th>
        <th>Restore</th>


      </tr>
    
    </thead>
    <tbody>
    @foreach($teacher as $teacher)
      <tr>
        <td>{{ $teacher->teacherName }}</td>
        <td>{{ $teacher->position }}</td>
       
        <td>
        @if($teacher->active)
          yes
      @else
         No
       @endif
        </td>
        
        <td><a href="forceDeleteTeacher/{{ $teacher->id }}" onclick="return confirm('Are you sure you want to delete?')">ForceDelete</a></td>
        <td><a href="restoreTeacher/{{ $teacher->id }}">Restore</a></td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
</div>

</body>
</html>