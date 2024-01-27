<!DOCTYPE html>
<html lang="en">

	<head>
	@section('title')
	Insert Testimonial
	@endsection
	@include('includes.head')
    </head>

	<body>
        @include('admin.includes.navbar')
		<div class="container">
			<form method="post" action="{{route('storetest')}}" class="m-auto" style="max-width:600px" enctype="multipart/form-data">
            @csrf
            
				<h3 class="my-4">Insert Testimonials</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Name</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="title2" name="clientName" value="{{old('clientName')}}">
                    <div style="color : red;">
					@error('clientName')
                    {{$message}}
                   @enderror</div>
                </div>
                   
                </div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Profession</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="profession" value="{{old('profession')}}">
					<div style="color : red;">
					@error('profession')
                      {{$message}}
                    @enderror</div>
                </div>
                </div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
					<div class="col-md-7"><textarea class="form-control form-control-lg" id="content4" name="content" >{{old('content')}}</textarea>
                <div style="color : red;">
                    @error('content')
                      {{$message}}
                    @enderror</div></div>
                </div>
				<hr class="my-4" />
				<div>
					<label for="image" class="col-md-5 col-form-label">Select Image</label>
					<input type="file" id="image" name="image" accept="image/*">
                </div>
				<div style="color : red;">
                @error('image')
                     {{ $message }}
                      @enderror</div>
				<hr class="my-4" />
                <div class="checkbox">
                <label><input type="checkbox" name="published" @checked( old('published'))> Published me</label>
                 </div>
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Insert</button></div>
				</div>
			</form>
		</div>
	</body>

</html>