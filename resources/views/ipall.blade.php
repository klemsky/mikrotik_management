<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

</head>
<body>
	<div>
		
	<?php
		use PEAR2\Net\RouterOS;
		use Illuminate\Support\Facades\Session;

		// $util = session::get('util');
		// $util = new RouterOS\Util($client);
		
		$datas = $util->setMenu('/log')->getAll();
		// $datas = $client->sendSync(new RouterOS\Request('/ip address print'));
	?>
	@foreach($datas as $data)
		{{$data('time')}} {{$data('topics')}} {{$data('message')}} <br>
		<!-- {{$data('address')}} {{$data('network')}} {{$data('interface')}} <br> -->
	@endforeach
	</div>
</body>
</html>