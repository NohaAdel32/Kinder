<!DOCTYPE html>
<html lang="en">

	<head>
	@section('title')
	Insert Teacher
	@endsection
	@include('includes.head')
    </head>

	<body>
    @include('admin.includes.navbar')
		<div class="container">
			<form  method = "POST" action="{{route('storeteach')}}" class="m-auto" style="max-width:600px" enctype="multipart/form-data">
            @csrf
				<h3 class="my-4">Insert Teacher</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Teacher Name</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="title2" name="teacherName" value="{{old('teacherName')}}">
					<div style="color : red;">
					@error('teacherName')
                    {{$message}}
                   @enderror</div>
				</div>
                </div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Position</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="position" value="{{old('position')}}">
					<div style="color : red;">
					@error('position')
                    {{$message}}
                   @enderror</div>
				</div>
                </div>
                <hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Facebook</label>
					<div class="col-md-7"><input type="text" class="fab fa-facebook-f" id="price6" name="facebook" value="{{old('facebook')}}"></div>
                </div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Twitter</label>
					<div class="col-md-7"><input type="text" class="fab fa-twitter" id="price6" name="twiter" value="{{old('twiter')}}"></div>
                </div>
                <hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Instagram</label>
					<div class="col-md-7"><input type="text" class="fab fa-linkedin-in" id="price6" name="instagram" value="{{old('instagram')}}"></div>
                </div>
				<hr class="my-4" />
				<div>
					<label for="image" class="col-md-5 col-form-label">Select Image</label>
					<input type="file" id="image" name="image" accept="image/*">
                    <div style="color : red;">
					@error('image')
                    {{$message}}
                   @enderror</div>
                </div>
                <hr class="my-4" />
                <div class="checkbox">
                <label><input type="checkbox" name="active" @checked( old('active'))> Active me</label>
                 </div>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Insert</button></div>
				</div>
			</form>
		</div>
	</body>

</html>