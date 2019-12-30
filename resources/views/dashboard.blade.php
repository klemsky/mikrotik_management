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


		<button type="button" id="btnGetEmail">SMTP</button>
		<div class="container box" #divGetFormSMTP>
		   <h3 align="center">How Send an Email in Laravel</h3><br />
		   @if (count($errors) > 0)
		    <div class="alert alert-danger">
		     <button type="button" class="close" data-dismiss="alert">×</button>
		     <ul>
		      @foreach ($errors->all() as $error)
		       <li>{{ $error }}</li>
		      @endforeach
		     </ul>
		    </div>
		   @endif
		   <form method="post" action="/sendEmail">
		    {{ csrf_field() }}
<!-- 		    <div class="form-group">
		     <label>Enter Your Name</label>
		     <input type="text" name="name" class="form-control" value="" />
		    </div> -->
<!-- 		    <div class="form-group">
		     <label>Enter Your Email</label>
		     <input type="text" name="email" class="form-control" value="" />
		    </div> -->
		    <div class="form-group" id="allrecipient">
			    <label>Enter Your Recipients Email</label>
		     	<span id="add">ADD</span>
		     	<span id="remove">REMOVE</span>
			    <br> 
			    <input type="hidden" id="countRecipients" name="countRecipients" class="form-control" value="1"/>
			    <input type="text" name="recipientEmail[1]" class="form-control" value="" />
		    </div>

		    <div class="form-group">
		     <label>Enter Your Subject</label>
		     <input type="text" name="subject" class="form-control" value="" />
		    </div>


		    <div class="form-group">
		     <label>Enter Your Message</label>
		     <textarea name="message" class="form-control"></textarea>
		    </div>

		    <div class="form-group">
		     <input type="submit" name="send" class="btn btn-info" value="Send" />
		    </div>
		   </form>
		   
		  </div>

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
	  	$("#btnGetEmail").click(function(){
			$("div[id^='divGet']").hide();
			$("#divGetFormSMTP").show();
	  	});


		$countrecipientsEmail=1;

        $("#add").on("click", function() {  
            $countrecipientsEmail +=1; 
            $("#countRecipients").val($countrecipientsEmail);
            $("#allrecipient").append('<input type="text" name="recipientEmail[' + $countrecipientsEmail +']" class="form-control" value="" />'); 
            if($countrecipientsEmail>=1){
            	if($countrecipientsEmail==1){
            		$("#remove").prop('disabled',false);
            	}
            }
            
        });
        $("#remove").on("click", function() {  
        	if($countrecipientsEmail >1){
        		$countrecipientsEmail -= 1;
        		$("#countRecipients").val($countrecipientsEmail);
            	$("#allrecipient").children().last().remove();
            	if($countrecipientsEmail==1){
            		$("#remove").prop('disabled',true);
            	}
        	}
        });  


	});
</script>