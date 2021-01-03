<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	{{-- <form action="{{ route('adminstore') }}" method="POST">
		@csrf
		<input type="text" name="title" class="form-control" placeholder="title">
		<textarea name="description" class="form-control" placeholder="short description"></textarea>
		<button class="btn btn-primary">save</button>
		
	</form>
 --}}


@extends('layouts.app')
@section('content')
	<div class="container">
		<form action="{{ route('adminstore') }}" method='POST' enctype="multipart/form-data">
			@csrf
			<input type="text" name="title" placeholder="title" class="form-control mt-2  @error('title') is-invalid @enderror">
		

                 @error('title')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror
            
                            

			<textarea type="text" name="description" placeholder="description" class="form-control mt-2  @error('description') is-invalid @enderror"></textarea>

                 @error('description')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror

			<input type="text" name="short_description" placeholder="short descritpion" class="form-control mt-2  @error('short_descritpion') is-invalid @enderror "></input>


                 @error('short_descritpion')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror

			<input type="date" name="time" placeholder="upload time" class="form-control mt-2  @error('time') is-invalid @enderror "></input>

                 @error('time')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror


			<input type="file" name="image" placeholder="image" class="form-control mt-2  @error('image') is-invalid @enderror"></input>


                 @error('image')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror

                 

			<button class="btn btn-primary mt-2">save</button>

		</form>

		

	</div>
	
@endsection

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>


