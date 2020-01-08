$(document).ready(function() { 
    $('.toggle').binus_toggle();
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
        $("#address-container").append("<input type=\"text\" class=\"input-form create-vpn-form\" name=\"txtAccess["+ $countAccessList +"]\" placeholder=\"IP Address "+$countAccessList+"\"  style=\"margin-bottom: 10px\">"); 
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

function showRequests(){
    $("#table-data").html("");
    $.ajax({
        type: "GET",
        url: '/vpn-all',
        success: function (response) {
            console.log(response);
            insertDataTables(response);
        },
        error: function (xhr, status, error) {

        }
    });
}

function showAllVPN(){
    $.ajax({
        type: "GET",
        url: '/request',
        success: function (response) {
            insertDataTables(response);
        },
        error: function (xhr, status, error) {

        }
    });
}

function detailRequest(email){
    $.ajax({
        type: "GET",
        url: '/request-detail/' + email,
        // data: { email: email },
        success: function (response) {
            console.log(response);
            showDetailRequest(response);
            showModal();
        },
        error: function (xhr, status, error) {

        }
    });
}

function showDetailRequest(data){
    var strTitle = '<h4>Detail Request No. Ticket ##<strong>'+data['no_ticket']+'##</strong>:</h4>';
    
    var strBody = '';
    
    strBody += '<form id="form-vpn">';

    strBody += '<div class="row">';
    strBody += '<div class="col-md-4" style="border-right: 1px solid black">';
    strBody += '<strong><h5>User Information:</h5></strong><br>';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '<strong><h5>VPN Information:</h5></strong><br>';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '<br>';
    strBody += '</div>';
    strBody += '</div>';
    
    strBody += '<div class="row">';
    strBody += '<div class="col-md-4" style="border-right: 1px solid black">';
    strBody += '<label>Name:</label>';
    strBody += '<input style="background-color: white;" type="text" class="input-form create-vpn-form" name="name" placeholder="Name" value="'+data['name']+'">';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '<label>VPN Name:</label>';
    strBody += '<input type="text" class="input-form create-vpn-form" name="vpn_username" placeholder="VPN Username" value="'+data['vpn_username']+'">';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '<label>Access List Group Name:</label>';
    strBody += '<input type="text" class="input-form create-vpn-form" name="acl_group_name" placeholder="ACL Group Name" value="'+data['acl_group_name']+'">';
    strBody += '</div>';
    strBody += '</div>';

    strBody += '<div class="row">';
    strBody += '<div class="col-md-4" style="border-right: 1px solid black">';
    strBody += '<label>Email:</label>';
    strBody += '<input style="background-color: white;" type="text" class="input-form create-vpn-form" name="email" placeholder="Email" value="'+data['email']+'">';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '<label>Local Address:</label>';
    if(!data["local_address"])
        strBody += '<input type="text" class="input-form create-vpn-form" name="local_address" placeholder="Local Address VPN">';
    else
        strBody += '<input type="text" class="input-form create-vpn-form" name="local_address" placeholder="Local Address VPN" value="'+data["local_address"]+'">';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '<label>Access List Group Allow:</label>';
    strBody += '<input type="text" class="input-form create-vpn-form" name="acl_group_name_allow" placeholder="ACL Group Allow" value="'+data['acl_group_name_allow']+'">';
    strBody += '</div>';
    strBody += '</div>';

    strBody += '<div class="row">';
    strBody += '<div class="col-md-4" style="border-right: 1px solid black">';
    strBody += '<label>Department:</label>';
    strBody += '<input style="background-color: white;" type="text" class="input-form create-vpn-form" name="department_name" placeholder="Department" value="'+data['department_name']+'">';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '<label>Remote Address:</label>';
    if(!data["remote_address"])
        strBody += '<input type="text" class="input-form create-vpn-form" name="remote_address" placeholder="Remote Address VPN">';
    else
        strBody += '<input type="text" class="input-form create-vpn-form" name="remote_address" placeholder="Remote Address VPN" value="'+data["remote_address"]+'">';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '<label>Expiry Date:</label>';
    if(data["expiry_date"] != null)
        strBody += '<input type="text" class="input-form create-vpn-form" name="expiry_date" placeholder="Expiry Date" value="'+data['expiry_date']+'">';
    else
        strBody += '<input type="text" class="input-form create-vpn-form" name="expiry_date" placeholder="Expiry Date" value="Permanent">';
    strBody += '</div>';
    strBody += '</div>';

    strBody += '<div class="row">';
    strBody += '<div class="col-md-4" style="border-right: 1px solid black">';
    strBody += '<br>';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '<strong>Status VPN:</strong><br>';
    strBody += (data['completed']==0 && data['active']==0)?'Not created':'' + '<br>';
    strBody += '</div>';
    strBody += '<div class="col-md-4">';
    strBody += '';
    strBody += '</div>';
    strBody += '</div>';
    strBody += '<input type="hidden" class="input-form create-vpn-form" name="vpn_users_id" value="'+data['id']+'">';
    strBody += '<input type="hidden" class="input-form create-vpn-form" name="department_id" value="'+data['department_id']+'">';

    strBody += '</form>';

    var strFooter = '';

    strFooter += '<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>';
    strFooter += '<button type="button" class="btn btn-primary" onclick=showLoginModal("assign-address")>Assign VPN Address</button>';
    strFooter += '<button type="button" class="btn btn-info" onclick=showLoginModal("create-vpn")>Create VPN Account</button>';
    
    $('#modal-header').html(strTitle);
    $('#modal-body').html(strBody);
    $('#modal-footer').html(strFooter);
    $('.create-vpn-form').css('margin-bottom','10px');
    $('#modal-dialog-detail').css('max-width','1000px');
}

function insertDataTables(datas){
    $('.table-data-container table').empty();
    var strHTML = "";

    strHTML += "<table id='table-data' class='display'>";
    strHTML += "<thead>";
    strHTML += "<tr>";
    $.each(datas[0],function(key,value){
        strHTML += "<th>" + key + "</th>";
    });
    strHTML += "</tr>";
    strHTML += "</thead>";

    strHTML += "<tbody>";
    $.each(datas,function(key,value){
        if(datas[key]['status'] != '4-Closed'){
            strHTML += "<tr ";
            if(datas[key]['acl_lists'] == null)
                strHTML += "ondblclick=detailRequest('"+datas[key]['email']+"') style='cursor:pointer;'";
            else
                strHTML += "ondblclick=detailVPN('"+datas[key]['email']+"') style='cursor:pointer;'";
            strHTML += ">";
            $.each(datas[key],function(key,value){
                strHTML += "<td>";
                if(typeof(value) === 'object')
                    $.each(value,function(key,value){
                        strHTML += value['address'] + '<br>';
                    });
                else
                    strHTML += value;
                strHTML += "</td>";
            });
            strHTML += "</tr>";
        }
    });
    strHTML += "</tbody>";
    strHTML += "</table>";

    $(".table-data-container").html(strHTML);
    $('#table-data').DataTable({
        // scrollX: true,
    });
}

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

function showError(msg){
    Swal.fire({
        type: 'error',
        text: msg,
        confirmButtonColor: '#762F8D',
    });
}

//////////////// CODE RELOGIN MIKROTIK
function relogin(){
    $("#error").html('');
    $("#error").css("display", "none");
	$.ajax({
        type: "POST",
        url: '/admin/' + $('#command').val(),
        headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
        data: {
            form: $('#form-vpn').serialize(),
            command: $('#command').val(),
            password: $("[name=password]").val(),
        },
        success: function (response) {
            if(response.command == 'assign-address'){
                $('#modal-login').modal('hide');
                showDetailRequest(response.data);
                insertDataTables(response.datas);
                // $('[name=local_address]').val(response.local_address_vpn);
                // $('[name=remote_address]').val(response.remote_address_vpn);
            }
            else if(response.command == 'create-vpn'){
                $("#error").css("color", "red");
                $("#error").text(response.message);
                $("#error").css("display", "block");
            }
            // console.log(response.command);
            // if(response.includes("failure")){
            //     
            // }
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
    $('#modal-action').modal('show');
}

function showLoginModal(command){
    $('#command').val(command);
    $("#error").css("display", "none");
    $('#modal-login').modal('show');
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