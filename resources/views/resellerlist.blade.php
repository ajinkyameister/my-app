<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<div class="main">

		<ul>


			
			@foreach ($resellers as $reseller)

					<li> <a href="/#">{{$reseller->name}} </a></li>
				
			@endforeach

		</ul>	
	</div>


</body>
</html>