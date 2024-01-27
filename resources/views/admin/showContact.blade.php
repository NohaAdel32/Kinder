<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Show Contact
	@endsection
	@include('includes.head')
</head>
<body>
@include ('admin.includes.navbar')
   <h1>Name : {{$contact->name}} </h1>
   <h3>Email : {{$contact->email}} </h3>
   <h3>Subject : {{$contact->subject}} </h3>
   <h5>created at : {{$contact->created_at}} </h5>
   <h5>update at : {{$contact->updated_at}} </h5>
   <h3>{{$contact->message}} </h3>
</body>
</html>