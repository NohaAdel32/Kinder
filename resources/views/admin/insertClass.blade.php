<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
	Insert Class
	@endsection
	@include('includes.head')
</head>
<body>
@include('admin.includes.navbar')
<div class="container">
  <h2>Insert Class</h2>
  <form action="{{route('storeclass')}} " method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Class Name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="className" value="{{old('className')}}">
      <div style="color : red;">
      @error('className')
       {{$message}}
    @enderror</div>
    </div>
    <div class="form-group">
      <label for="title"> From Age</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="fromAge" value="{{old('fromAge')}}">
      <div style="color : red;">
      @error('fromAge')
       {{$message}}
    @enderror</div>
    </div>
    <div class="form-group">
      <label for="title"> To Age</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="toAge" value="{{old('toAge')}}">
      <div style="color : red;">
      @error('toAge')
       {{$message}}
    @enderror</div>
    </div>
    <div class="form-group">
      <label for="title">From Time</label>
      <input type="time" class="form-control" id="title" placeholder="00:00:00" name="fromTime" value="{{old('fromTime')}}">
      <div style="color : red;">
      @error('fromTime')
       {{$message}}
    @enderror</div>
    </div>
    <div class="form-group">
      <label for="title">To Time</label>
      <input type="time" class="form-control" id="title" placeholder="Enter title" name="toTime" value="{{old('toTime')}}">
      <div style="color : red;">
      @error('toTime')
       {{$message}}
    @enderror</div>
    </div>
    <div class="form-group">
      <label for="title">Capacity</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="capacity" value="{{old('capacity')}}">
      <div style="color : red;">
      @error('capacity')
       {{$message}}
    @enderror</div>
    </div>
    <div class="form-group">
      <label for="title">Price</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="price" value="{{old('price')}}">
      <div style="color : red;">
      @error('price')
       {{$message}}
    @enderror</div>
    </div>

    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
      <div style="color : red;">
      @error('image')
        {{ $message }}
      @enderror</div>
    </div>
    <div class="form-group">
      <label for="category">Teacher Name:</label>
      <select name="teacher_id" id="">
        <option value="">Select Teacher</option>
        @foreach($teachers as $teach)
        <option value="{{$teach->id}}">{{$teach->teacherName}}</option>
      @endforeach
      </select>
      <div style="color : red;">
      @error('teacher_id')
        {{ $message }}
      @enderror</div>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="active" @checked( old('active'))> Active me</label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>