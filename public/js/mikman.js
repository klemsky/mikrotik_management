function showRequest(){
	console.log("test");
}

function showVPNs(){
	$("#error").css("display", "none");
	$('#modal-action').modal('show');
}

function submitShowVPNs(){
	$.ajax({
        type: "POST",
        url: '/relog',
        headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
        data: {
            password: $("#password").val(),
            command: "showAllVPN",
        },
        success: function (response) {
        	console.log(response.data['name'].length);
        	$("#data-request").css('display','block');
        },
        error: function (xhr, status, error) {
        	var response = JSON.parse(xhr.responseText);
        	$("#error").css("color", "red");
        	$("#error").text(response.message);
        	$("#error").css("display", "block");
        }
    });
}