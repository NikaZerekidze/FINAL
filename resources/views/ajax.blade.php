<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<button onclick="getData()" id="button" class="btn">click</button>
<script src="https://code.jquery.com/jquery-3.5.1.js"   integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="></script>

<script>
	function getData($argument)
	{
		$.ajax([
			method:"get",
			url:"/test/ajax",
			data:{},
			success: function(data)
			{
				console.log(data);
			}

			])
	}


</script>
</body>
</html>