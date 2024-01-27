<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Show Class
	@endsection
	@include('includes.head')
</head>
<body>
   @include ('admin.includes.navbar')
   <h1>Class Name : {{$class->className}} </h1>
   <h3>Age : {{$class->fromAge}} - {{$class->toAge}} </h3>
   <h3>Time : {{date('h:i a', strtotime($class['fromTime']))}} to {{date('h:i a', strtotime($class['toTime']))}} </h3>
   <h3>Capacity : {{$class->capacity}} </h3>
   <h3>Price : {{$class->price}} </h3>
   <h3>Teacher Name : {{$class->teacher->teacherName}} </h3>
   <h5>created at:{{$class->created_at}} </h5>
   <h5>update at:{{$class->updated_at}} </h5>
   <h5>{{($class->active)?"Active":"Not Active"}} </h5>
   <img src="{{ asset('assets/img/'.$class->image) }}" alt="{{$class->className}}" style="width:200px;">
</body>
</html>