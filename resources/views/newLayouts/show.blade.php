<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		
		
		<div class="container">
			<div class="cards p-2">
				<div class="card-title"> {{ $result->title }} </div>
				<div class="card-text"> {{ $result->description }}</div>
				
			</div>
		</div>
	{{-- 	<form method="POST" class="mt-4" action="{{ route('store_comment') }}">
			@csrf
			<input type="hidden" name="id" value="{{ $result->id }}"/> 
			<label>კომენტარები</label>
			<textarea class="form-control" name="comments" >
				
			</textarea>
			<button class="btn btn-primary">დამატება</button>
		</form>

		@foreach($comments as $comment)
			<div class="container">
				<div class="cards p-2">
					<div class="card-text"> {{  $comment->comments }}</div>	
			</div>
			<small>{{ $comment->created_at}}</small>

		@endforeach --}}

	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>