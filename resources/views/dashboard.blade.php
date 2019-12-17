<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

</head>
<body>
	<div>
		
	<?php
		$datas = $util->setMenu('/log')->getAll();
	?>	
	@foreach($datas as $data)
		{{$data('time')}} {{$data('topics')}} {{$data('message')}} <br>
		<!-- {{$data('address')}} {{$data('network')}} {{$data('interface')}} <br> -->
	@endforeach
	</div>
</body>
</html>