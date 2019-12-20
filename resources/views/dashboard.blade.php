<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

</head>
<body>
	<div>

		<button type="button" id="btnGetIP">Get IP</button>
		<div id="divGetIP">
			@foreach($dataIP as $data)
				{{$data('address')}} {{$data('network')}} {{$data('interface')}} <br>
			@endforeach
		</div>

		<button type="button" id="btnGetLog">Get Log</button>
		<div id="divGetLog">
			@foreach($dataLog as $data)
				{{$data('time')}} {{$data('topics')}} {{$data('message')}} <br>
			@endforeach
		</div>

		<button type="button" id="btnLDAP">LDAP</button>

	</div>
</body>
</html>
<script type="text/javascript">
	// <form method="POST" action="/getlog" enctype="multipart/form-data">
	// {{csrf_field()}}
				    
	 //        <input type="submit" value="Send" class="button button-primary wide">
		    
	  //   </form>

	  //<button type="button" onclick="window.location='{{ url("/getIP") }}'" id="btnGetIP">Get IP</button>
	$(document).ready(function(){
		$("div[id^='divGet']").hide();

		$("#btnGetIP").click(function(){
			$("div[id^='divGet']").hide();
			$("#divGetIP").show();
	  	});

		$("#btnGetLog").click(function(){
			$("div[id^='divGet']").hide();
			$("#divGetLog").show();
	  	});


	});
</script>