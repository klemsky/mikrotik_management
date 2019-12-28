
function showRequest(){
	$('#command').val($("#show-request").children().text());
    showModal();
}

function showVPNs(){
    $('#command').val($("#show-vpn").children().text());
    showModal();
}

// CODE RELOGIN MIKROTIK
function relogin(){
	$.ajax({
        type: "POST",
        url: '/relog',
        headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
        data: {
            password: $("#password").val(),
            command: $('#command').val(),
        },
        success: function (response) {
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

function showModal(){
    $("#error").css("display", "none");
    $('#modal-action').modal('show');
}