<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

</head>
<body>
	<div>
		<form method="post" action="/sendEmail">
			{{ csrf_field() }}
			<!-- <div class="form-group">
			    <label>Enter Your Name</label>
			    <input type="text" name="name" class="form-control" value="" />
			</div>
		 	   <div class="form-group">
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
</body>
</html>

<script>
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
</script>
