<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS | Request VPN</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/icon.png')}}" />
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/style-edu.css">
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/login-edu.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="{{asset('js/mikman.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/client/clientRegister.css')}}">

</head>
<body>
	<div class="register">
        <div class="row">
            <div class="register-left column one-third">
                <h3 class="title-text">BINUS VPN</h3>
                <h8 class="welcome-text">VPN Policy</h8>
                <div class="policy-content">
                    By creating VPN account, you have agreed to the terms and policies of using Binus VPN account. VPN account will be created once the required approval have been approved through the IT Helpdesk System. Approval stage for a single account VPN requires three stages of approval:
                    <ul>
                        @if(isset($data['head_name']))
                            <li>Section Head Requester: <strong>{{$data['head_name']}}</strong><br>Email: <strong>{{$data['head_email']}}</strong></li>
                        @endif
                        @if(isset($data['manager_name']))
                            <li>Manager Requester: <strong>{{$data['manager_name']}}</strong><br>Email: <strong>{{$data['manager_email']}}</strong></li>
                        @endif
                        <li>Section Head IT Infrastructure and Unified Communication: <strong>Budi Ariyanto</strong><br>Email: <strong>binus_ay@binus.edu</strong></li>
                        <li>IT Infrastructure and Unified Communication Manager: <strong>Frantina Andri Widanto</strong><br>Email: <strong>sdp.dcmgr@binus.edu</strong></li>
                    </ul>
                    
                    VPN account username and password will be sent to requester email.<br>Email: <strong>{{$data['user_email']}}</strong>.
                </div>
            </div>
            <div class="register-center column two-thirds">
                <div class="register-heading">
                    <h2>Request New VPN</h2>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="new-tab" role="tabpanel" aria-labelledby="new-tab">
                        <form method="POST" action="" enctype="multipart/form-data" autocomplete="off" id="form-registration">
                        {{csrf_field()}}
                            <br><br>
                            <div class="row">
                                <div class="column one-half">
                                    <div id="ticket-container">
                                        Ticket No. : &nbsp;<strong>{{$data['ticket']}}</strong>
                                        <input type="hidden" value="{{$encryptedData['ticket']}}" name="ticket">
                                    </div>
                                    <div class="custom-textbox">
                                        <label>Full Name &nbsp;<i class="icon-checklist"></i></label>
                                        <input type="text" class="input-form" value="{{$data['user_name']}}" disabled style="background-color: white;">
                                        <input type="hidden" value="{{$encryptedData['user_name']}}" name="user_name">
                                        <input type="hidden" value="{{$encryptedData['user_binusianid']}}" name="binusianid">
                                    </div>
                                    <div class="custom-textbox">
                                        <label>Email &nbsp;<i class="icon-checklist"></i></label>
                                        <input type="text" class="input-form" value="{{$data['user_email']}}" disabled style="background-color: white;">
                                        <input type="hidden" value="{{$encryptedData['user_email']}}" name="user_email">
                                        @if(isset($data['head_email']))
                                        <input type="hidden" value="{{$encryptedData['head_email']}}" name="head_email">
                                        @endif
                                        <input type="hidden" value="{{$encryptedData['manager_email']}}" name="manager_email">
                                    </div>
                                    <div class="custom-textbox">
                                        <label>Department &nbsp;<i class="icon-checklist"></i></label>
                                        <input type="text" class="input-form" value="{{$data['user_department']}}" disabled style="background-color: white;">
                                        <input type="hidden" value="{{$encryptedData['user_department']}}" name="user_department">
                                    </div>
                                    <div class="custom-radio">
                                            <input type="radio" class="inputInlineBlock" class="input-form" id="rbPermanent" name="rbTemp" onclick="hideTime()" value="perm">
                                            <label for="rbPermanent" class="inputInlineBlock">Permanent</label>
                                            <input type="radio" class="inputInlineBlock" class="input-form" id="rbTemporary" name="rbTemp" onclick="showTime()" value="temp">
                                            <label for="rbTemporary" class="inputInlineBlock">Temporary</label>
                                        <div id="input-date-container"></div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <div class="headerIP">
                                        <h4 style="padding: 0 0 21px 0;">
                                            Destination IP Address :
                                        </h4>
                                    </div>
                                    <div class="custom-textbox">
                                        <div id="address-container" class="form-group">
                                            <input type="text" class="input-form" name="txtAccess[1]" placeholder="IP Address 1" style="margin-bottom: 10px">
                                        </div>
                                    </div>
                                </div>
                                <div id="add-ip" class="addBtnContainer column one-third">
                                    <input type="button" class="addIpBtn" value="Add IP"/> 
                                </div>
                                <div id="remove-ip" class="removeBtnContainer column one-third">
                                    <input type="button" class="removeIpBtn" value="Remove IP"/> 
                                </div>
                                <div id="submit-container" class="registBtnContainer column one-third">
                                    <input type="submit" class="btnRegister" value="Register" id="btn-submit-form"/>
                                </div>
                            </div>
                            <br><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
$(document).ready(function(){


    function insertRegistrationForm(){
        var form = $('#form-registration')[0];
        var formData = new FormData(form);

        $.ajax({
            type: 'POST',
            url: '/registerClient',
            data: formData,
            success: function(response){
                if(response.status == 'success'){
                    showSuccess(response.succMsg);
                    $('.swal2-confirm').click(function(e){
                        window.location.href = "/login";
                    });
                }else{
                    if(response.status == 'failed')
                        showError(response.errMsg);
                    $('#btn-submit-form').prop('disabled',false);
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }

    function showSuccess(msg){
        Swal.fire({
            type: 'success',
            text: msg,
            confirmButtonColor: '#762F8D',
        });
    }
});

</script>