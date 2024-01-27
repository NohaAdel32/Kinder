<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Show Teacher
	@endsection
	@include('includes.head')
</head>
<body>
   @include ('admin.includes.navbar')
   <h1>Name : {{$teacher->teacherName}} </h1>
   <h3>Profession : {{$teacher->position}} </h3>
   <h3>Facebook : {{$teacher->facebook}} </h3>
   <h3>Instagram : {{$teacher->instagram}} </h3>
   <h3>Twitter : {{$teacher->twiter}} </h3>
   <h5>created at:{{$teacher->created_at}} </h5>
   <h5>update at:{{$teacher->updated_at}} </h5>
   <h5>{{($teacher->active)?"Active":"Not Active"}} </h5>
   <img src="{{ asset('assets/img/'.$teacher->image) }}" alt="{{$teacher->teacherName}}" style="width:200px;">
</body>
</html>