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
                        <li>Manager Requester: <strong>{{$data['manager_name']}}</strong><br>Email: <strong>{{$data['manager_email']}}</strong></li>
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
                        <form method="POST" action="/registerClient" enctype="multipart/form-data" autocomplete="off">
                        {{csrf_field()}}
                            <br><br>
                            <div class="row">
                                <div class="column one-half">
                                    <div id="ticket-container">
                                        Ticket No. : &nbsp;<strong>{{$data['ticket']}}</strong>
                                        <input type="hidden" value="{{$data['ticket']}}" name="ticket">
                                    </div>
                                    <div class="custom-textbox">
                                        <label>Full Name &nbsp;<i class="icon-checklist"></i></label>
                                        <input type="text" class="input-form" value="{{$data['user_name']}}" disabled style="background-color: white;">
                                        <input type="hidden" value="{{$data['user_name']}}" name="user_name">
                                        <input type="hidden" value="{{$data['manager_name']}}" name="manager_name">
                                    </div>
                                    <div class="custom-textbox">
                                        <label>Email &nbsp;<i class="icon-checklist"></i></label>
                                        <input type="text" class="input-form" value="{{$data['user_email']}}" disabled style="background-color: white;">
                                        <input type="hidden" value="{{$data['user_email']}}" name="user_email">
                                        <input type="hidden" value="{{$data['manager_email']}}" name="manager_email">
                                    </div>
                                    <div class="custom-textbox">
                                        <label>Department &nbsp;<i class="icon-checklist"></i></label>
                                        <input type="text" class="input-form" value="{{$data['user_department']}}" disabled style="background-color: white;">
                                        <input type="hidden" value="{{$data['user_department']}}" name="user_department">
                                    </div>
                                    <div class="custom-radio">
                                        <div>
                                            <label>
                                                <input type="radio" name="rbTemp" class="tempBtn" class="input-form" value="Permanent" onclick="hideTime()" >
                                                Permanent&nbsp;&nbsp;&nbsp;
                                            </label><label>
                                                <input type="radio" name="rbTemp" class="tempBtn" class="input-form" value="Temporary" id="tmpRadio" onclick="showTime()">
                                                Temporary
                                            </label>
                                        </div>
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
                                            <input type="hidden" value="1" id="countAccessIP" name="accessIpCount">
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
                                    <input type="submit" class="btnRegister" value="Register"/>
                                </div>
                            </div>
                            <br><br><br><br>
                        </form>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style type="text/css">
body{
    font-size: 15px;
	width: 100%;
	height: 100%;
	background: -webkit-linear-gradient(left, #1b9ad7,#88388f);
}
form label{
    font-size: 14px;
}
.wrapper{
	text-align: center;
}
#textboxDiv input{
	margin-bottom: 1.5vh;
}
#textboxDiv2 input{
	margin-bottom: 1.5vh;
}
.addBtnContainer, .removeBtnContainer{
    width: 100%;
    margin: 0px;
    padding: 0px;
}
.addIpBtn{
    width: 100%;
	color: white;
	background-color: #88388f;
    border: none;
	border-radius: 1.5rem;
    padding: 4%;
	cursor: pointer;
}
.removeIpBtn{
    width: 100%;
	color: white;
	background-color: #88388f;
    border: none;
	border-radius: 1.5rem;
    padding: 4%;
	cursor: pointer;
}
.registBtnContainer{
    width: 100%;
}
.btnRegister{
    /* margin-top: 0vh; */
    border: none;
    width: 100%;
    border-radius: 1.5rem;
    padding: 4%;
    background: #0062cc;
    color: #fff;
    /* font-weight: 600; */
    /* width: 50%; */
    cursor: pointer;
}
.row{
	width: 100%;
	height: 100%;
}
.welcome-text{
	text-align: center;
    margin-top: 8%;
    margin-bottom: 0vh;
    color: white;
}
.register-left{
	margin-top: 7vh;
    text-align: center;
    color: #fff;
}
.register-left p{
    font-weight: lighter;
}
.policy-content{
    text-align: left;
    padding: 30px;
}
#ticket-container{
    padding-bottom: 10px;
}
.register-center{
    background: #f8f9fa;
    width: 100%;
    padding: 3% 7% 0% 7%;
    margin-top: 10px;
    margin-bottom: 0px;
    height: auto;
    border-radius : 30% 0%;
}
#myTabContent{
    padding-top: 5%;
}
.custom-textbox, .custom-radio{
    padding-bottom: 10px;
}
.register .register-form{
    padding: 8% 8% 0% 11%;
    padding-left: 8vw;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 30vh;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 15vh;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading {
    text-align: center;
    padding: -10px;
    margin-bottom: -8%;
    color: #495057;
}
.tempBtn{
	text-align: center;
}
.nav-loginTabs a{
	border: none;
    padding: 1vh;
    width: 65vw;
    padding: 0px 6vw 0 6vw;
   /* padding: 0px 12.5vw 0 12.5vw;*/
    color: #88388f;
    text-decoration: none;
}
.nav-loginTabs a:hover{
	border-bottom: 1px solid black;
}
.nav-tabs .nav-item{
	margin: 0;
}
.modal-content{
	align-items: center;
	margin-top: 42%;
}
.alert-danger {
    color: #721c24;
    background: none;
    border: none;
    padding-left: 10vw;
}

@media only screen and (min-width: 768px) {
	.register{
	left: 0px;
	right: 0px;
	height: 100%;
   	width: 100%;
	}
}

@media only screen and (max-width: 767px) {
	.row{
		width: 100vw;
	}
	.btn-primary{
		float: right;
		margin-bottom: 11vh;
	}
	.register{
		left: 0px;
		right: 0px;
		height: 100%;
	   	width: 100%;
	}
	#already-register{
		text-align: right;
		margin-top: 2vh;
	}
	.register-heading {
	    text-align: center;
	    margin-top: 7%;
	    margin-bottom: -8%;
	    color: #495057;
	    padding: 3vh 0vh 0vh 6vh;
	}
	.register-center{
	    margin-top : -10vh;
	    min-height: 100vh;
	}
	.nav-loginTabs a{
	border: none;
    padding: 1vh;
    width: 65vw;
    padding: 0px 6vw 0 6vw;
    color: #88388f;
    text-decoration: none;
	}
}

@media only screen and (max-width: 472px){
	body{
		width: 100vw;
		height: 100%;
		background: -webkit-linear-gradient(left, #1b9ad7,#88388f);
	}
	.register-right {
    	right: -2vw;
	}
}
</style>