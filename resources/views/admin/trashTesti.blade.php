<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Trashed Testimonial
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
       
        <th>Client Name</th>
        <th>Profession</th>
        <th>Published</th>
        <th>Delete</th>
        <th>Restore</th>


      </tr>
    
    </thead>
    <tbody>
    @foreach($testi as $testi)
      <tr>
        <td>{{ $testi->clientName }}</td>
        <td>{{ $testi->profession }}</td>
       
        <td>
        @if($testi->published)
          yes
      @else
         No
       @endif
        </td>
        
        <td><a href="forceDeleteTesti/{{ $testi->id }}" onclick="return confirm('Are you sure you want to delete?')">ForceDelete</a></td>
        <td><a href="restoreTesti/{{ $testi->id }}">Restore</a></td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
</div>

</body>
</html>