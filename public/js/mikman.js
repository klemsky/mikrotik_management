$(document).ready(function() { 
    $countAccessList = 1;

    $("#add-ip").on("click", function() { 
        if($countAccessList > 4)
            $(".register-center").css("height","750px");        
        if($countAccessList > 7)
            $(".register-center").css("height","900px");
        if($countAccessList > 9)
            $(".register-center").css("height","1000px");
        if($countAccessList > 11)
            $(".register-center").css("height","1100px");
        if($countAccessList > 13)
            $(".register-center").css("height","1200px");
        
        $countAccessList += 1; 
        $("#countAccessIP").val($countAccessList);
        $("#address-container").append("<input type=\"text\" class=\"input-form\" name=\"txtAccess["+ $countAccessList +"]\" placeholder=\"IP Address "+$countAccessList+"\"  style=\"margin-bottom: 10px\">"); 
    });
    $("#remove-ip").on("click", function() {
        if($countAccessList == 5)
            $(".register-center").css("height","auto");        
        if($countAccessList == 6)
            $(".register-center").css("height","700px");
        if($countAccessList == 8)
            $(".register-center").css("height","800px");
        if($countAccessList == 10)
            $(".register-center").css("height","900px");
        if($countAccessList == 12)
            $(".register-center").css("height","1000px");

        if($countAccessList > 1){
            $countAccessList -= 1;
            $("#address-container").children().last().remove();
        }
    });
});

function showTime(){
    $("#input-date-container").html('<input type="date" id="tempText" name="expiry_date" placeholder="dd/mm/yyyy"/>');
    $("#input-date-container").css('padding-top','10px');
    $("#input-date-container").css('padding-bottom','5px');
}

function hideTime(){
    $("#input-date-container").html('');
    $("#input-date-container").css('padding-top','0px');
    $("#input-date-container").css('padding-bottom','0px');
}

function showRequest(){
	$('#command').val($("#show-request").children().text());
    showModal();
}

function showVPNs(){
    $('#command').val($("#show-vpn").children().text());
    showModal();
}

function showError(msg){
    Swal.fire({
        type: 'error',
        text: msg,
        confirmButtonColor: '#762F8D',
    });
}

//////////////// CODE RELOGIN MIKROTIK
function relogin(){
	$.ajax({
        type: "POST",
        url: '/relog',
        headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
        data: {
            _token: "{{ csrf_token() }}",
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

function showLink(){
    $.ajax({
        type: "POST",
        url: "/generate",
        dataType: "json",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            number: $("#numberTicket").val(),
        },
        success: function (response) {
            if(response.status=="success"){
                // $('.is-success').show();
                // $('.is-error').hide();
                // $('.is-success').html("Registration Success!");
                // window.setTimeout(function () {
                //     window.location.href = "/ip";
                // },700);
                $("#link").val(response.link);
                // console.log('')
            }else{
                // $('.is-error').show();
                // $('.is-success').hide();
                // $('.is-error').html(data);
                // $('#btn-submit-item').prop('disabled',false);
                // console.log(response.status);
                if(response.status == "Validator Fail")
                    showError(response.errMsg);

                // if(response.status == "Ticket Empty")
                    // showError('Ticket number cannot be empty!');
                // else if(response.status == "apa");
                //     showError('Ticket is not for Network!');
                else
                    showError('Ticket is not for Network!');
            }
        },
    });
}

function showNew(){
    $("#vendor-tab").removeClass("active");
    $("#new-tab").addClass("active");
    $("#vendor-button").removeClass("active");
    $("#new-button").addClass("active");
}

function showVendor(){
    $("#new-tab").removeClass("active");
    $("#vendor-tab").addClass("active");
    $("#new-button").removeClass("active");
    $("#vendor-button").addClass("active");
}

function setTempDate(ele){
    document.getElementById("tmpRadio").value=ele.value;
}

function setTempDate2(ele){
    document.getElementById("tmpRadio2").value=ele.value;
}