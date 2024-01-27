<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Show Testimonial
	@endsection
	@include('includes.head')
</head>
<body>
@include ('admin.includes.navbar')
   <h1>Name : {{$testimonial->clientName}} </h1>
   <h3>Profession : {{$testimonial->profession}} </h3>
   <h3>{{$testimonial->content}} </h3>
   <h5>created at:{{$testimonial->created_at}} </h5>
   <h5>update at:{{$testimonial->updated_at}} </h5>
   <h5>{{($testimonial->published)?"Published":"Not Published"}} </h5>
   <img src="{{ asset('assets/img/'.$testimonial->image) }}" alt="{{$testimonial->clientName}}" style="width:200px;">
</body>
</html>