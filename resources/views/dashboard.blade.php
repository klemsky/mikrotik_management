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

		// $client = session::get('client');
		session::put('client',$client);
		$util = new RouterOS\Util($client);

		$dataLog = $util->setMenu('/log')->getAll();
		$dataIP = $client->sendSync(new RouterOS\Request('/ip address print'));
	?>
	<button onclick="location.href='/ipall'">IP address</button>
	<div id='data-log'>
		@foreach($dataLog as $data)
			{{$data('time')}} {{$data('topics')}} {{$data('message')}} <br>
			<!-- {{$data('address')}} {{$data('network')}} {{$data('interface')}} <br> -->
		@endforeach
	</div>
	<div id='data-ip' style="display: none;">
		@foreach($dataIP as $data)
			{{$data('time')}} {{$data('topics')}} {{$data('message')}} <br>
			<!-- {{$data('address')}} {{$data('network')}} {{$data('interface')}} <br> -->
		@endforeach
	</div>
	</div>
</body>
</html>

<script type="text/javascript">
	var log=1;
	function changeStation(){
		if(log==1){
			log = 0;
			$("#data-log").css('display','none');
			$("#data-ip").css('display','block');
		}
		else{
			log = 1;
			$("#data-ip").css('display','none');
			$("#data-log").css('display','block');
		}
	}
</script>