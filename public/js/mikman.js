$(document).ready(function() { 
    $countAccessList=1;
    $countAccessList2=1;
        $("#add-ip").on("click", function() {  
        $countAccessList +=1; 
        $("#countAccessIP").val($countAccessList);
        $("#address-container").append("<input type=\"text\" class=\"input-form\" name=\"txtAccess["+ $countAccessList +"]\" placeholder=\"IP Address "+$countAccessList+"\"  style=\"margin-bottom: 10px\">"); 
    });
    $("#remove-ip").on("click", function() {  
        if($countAccessList >1){
            $countAccessList -= 1;
            $("#address-container").children().last().remove();
        }
    });

    var HowToLoginTitle = "HOW TO LOGIN";
    var HowToLoginContent = `
    <ol style="list-style: decimal;">
        <div style="text-align: center"><img src="https://backaccess.apps.binus.edu/wifi/assets/img/how-to/how-to-1.png" alt="Login Guide" style="display: inline-block; padding-bottom: 10px;"></div>
        <li>
            Fill username with your <strong>username</strong> of binus account email
        </li>
        <li>
            Choose your binus account <strong>email type</strong>
        </li>
        <li>
            Fill password field with your <strong>password</strong> of binus account email
        </li>
        <li>
            Check <strong>"Remember me"</strong> to remember your <strong>username</strong> and <strong>password</strong>
        </li>
        <li>
            Press <strong>Login</strong> button
        </li>
        <div style="text-align: center"><img src="https://backaccess.apps.binus.edu/wifi/assets/img/how-to/how-to-2.png" alt="Login Guide 2" style="display: inline-block; padding-bottom: 10px;"></div>
        <li>
            You will redirected to the page above after sucessfully login.
        </li>
    </ol>`;

    var ChangePasswordTitle = "CHANGE PASSWORD";
    var ChangePasswordContent = `
            <li><strong>Student / Lecture / Alumni</strong></li>
            <p>Your login password is the same as the Binusmaya account password, you can change it by following the steps below:</p>
            <blockquote>
                <ol class="special-ol">
                    <li>
                        Login to Binusmaya
                    </li>
                    <li>
                        After logged in, Click menu <strong>Profile</strong> (Located at the top right with your name written)
                    </li>
                    <li>
                        Click <strong>Account Setting</strong>
                    </li>
                    <li>
                        Press button <strong>Change Password</strong>
                    </li>
                    <li>
                        Fill <i>Current password</i> with your current Binusmaya account password
                    </li>
                    <li>
                        Fill <i>New password</i> with your new password
                    </li>
                    <li>
                        Fill <i>Confirm</i> with your new password as you fill in the field <i>New Password</i>
                    </li>
                    <li>Press button <strong>Save</strong></li>
                    <a target="_blank" href="https://binusmaya.binus.ac.id/" class="button button-primary wide" style="margin: 13px 0 13px 0;">Open Binusmaya</a>
                </ol>
            </blockquote>
            <li><strong>Staff</strong></li>
            <p>You can change login password by following the steps below:</p>
            <blockquote>
                <ol class="special-ol">
                    <li>
                        Open change password page for staff by click button below
                    </li>
                    <li>
                        Fill <i>someone@example.com</i> with your binus.edu email
                    </li>
                    <li>
                        Fill <i>Old password</i> with your current binus.edu email password
                    </li>
                    <li>
                        Fill <i>New password</i> with your new password
                    </li>
                    <li>
                        Fill <i>Confirm New password</i> with your new password as you fill in the field <i>New Password</i>
                    </li>
                    <li>Press button <strong>Submit</strong></li>
                    <a target="_blank" href="https://fs.binus.edu/adfs/portal/updatepassword" class="button button-primary wide" style="margin: 13px 0 13px 0;">Change password for staff</a>
                </ol>
            </blockquote>
    `;

    $('#htloginModal .single-content').find("h1.heading").html(HowToLoginTitle);
    $('#htloginModal .single-content').find("ol").html(HowToLoginContent);
    $('#cpassModal .single-content').find("ul").html(ChangePasswordContent);
    $('#cpassModal .single-content').find("h1.heading").html(ChangePasswordTitle);

    $("#cpassButton").click(function() {
        $('#cpassModal').fadeIn();
    });

    $("#htloginButton").click(function() {
        $('#htloginModal').fadeIn();
    });
});

function showRequest(){
	$('#command').val($("#show-request").children().text());
    showModal();
}

function showVPNs(){
    $('#command').val($("#show-vpn").children().text());
    showModal();
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
        	$("#link").val(response.link);
        },
    });
}

function loginEmail(){
    $.ajax({
        type: "POST",
        url: "/loginEmail",
        dataType: "json",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            user: $("#password_name").val(),
            pass: $("#password_pwd").val(),
            ticket: $("#ticket_number").val()
        },
        success: function (response) {
            
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

function showTime(){
    $("#input-date-container").html('<input type="text" id="tempText" oninput="setTempDate(this)" class="input-form" placeholder="dd/mm/yyyy" />');
    $("#input-date-container").css('padding-top','10px');
}

function hideTime(){
    $("#input-date-container").html('');
    $("#input-date-container").css('padding-top','0px');
}


function setTempDate(ele){
    document.getElementById("tmpRadio").value=ele.value;
}

function setTempDate2(ele){
    document.getElementById("tmpRadio2").value=ele.value;
}