<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	  <div class="btn-info" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
              </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
               </form>
        </div>
	<div>
		<table class="table">
			<tr>
			<td>#</td>
			<td>სახელი</td>
			<td>აღწერა</td>
			<td>მოქმედება</td>			
		</tr>
		@foreach($news as $element)
			<tr>
				<td>{{ ++$loop->index }}</td>
				<td>{{ $element->title }}</td>
				<td>{{ $element->description }}</td>
				<td>

					<form action="{{  route('admindelete') }} " method="POST">
						@csrf
						<input type="hidden" name="id" value={{ $element->id }}/>
						<button class="btn btn-danger">წაშლა</button>
					</form>
					
					<a class="btn btn-primary" href="{{ route('adminshow',['id'=> $element->id ]) }}">დათვალიერება</a>
					<a class="btn btn-warning" href="{{ route('adminedit',['id'=> $element->id ]) }}">განახლება</a>
				</td>
			</tr>
		@endforeach
			
		</table>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>