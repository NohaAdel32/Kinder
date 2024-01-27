<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Testimonials List
	@endsection
	@include('includes.head')
</head>
<body>
@include ('admin.includes.navbar')
<div class="container">
  <h2>Testimonial List</h2>
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
       
        <th>Client Name</th>
        <th>Profession</th>
        <th>Published</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>

      </tr>
    
    </thead>
    <tbody>
    @foreach($testimonials as $test)
      <tr>
        <td>{{ $test->clientName }}</td>
        <td>{{ $test->profession }}</td>
       
        <td>
        @if($test->published)
          yes
      @else
         No
       @endif
        </td>
        <td><a href="updateTestimonial/{{ $test->id }}">Edit</a></td>
        <td><a href="showTestimonial/{{ $test->id }}">Show</a></td>
        <td><a href="deleteTestimonial/{{ $test->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
  {{$testimonials->links()}}
</div>

</body>
</html>