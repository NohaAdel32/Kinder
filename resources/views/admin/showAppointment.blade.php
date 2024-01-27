<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Show Appointment
	@endsection
	@include('includes.head')
</head>
<body>
@include ('admin.includes.navbar')
   <h1>Gurdian Name : {{$appointment->gurdianName}} </h1>
   <h3>Gurdian Email : {{$appointment->gurdianEmail}} </h3>
   <h3>Child Name : {{$appointment->childName}} </h3>
   <h3>Child Age : {{$appointment->childAge}} </h3>
   <h5>created at : {{$appointment->created_at}} </h5>
   <h5>update at : {{$appointment->updated_at}} </h5>
   <h3>{{$appointment->message}} </h3>
</body>
</html>