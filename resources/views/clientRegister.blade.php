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
            <div class="register-center">
                <div class="register-heading">
                    <h2>Request New VPN</h2>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="new-tab" role="tabpanel" aria-labelledby="new-tab">
                        <form method="POST" action="/registerClient" enctype="multipart/form-data" autocomplete="off">
                        {{csrf_field()}}
                            <br><br>
                            <div class="row register-form">
                                <div class="col-md-11">
                                    <div id="ticket-container">
                                        Ticket No. : &nbsp;<strong>{{$ticket}}</strong>
                                    </div>
                                    <div class="custom-textbox">
                                        <input type="text" placeholder="Your Name" class="input-form" name="txtFullName">
                                    </div>
                                    <div class="custom-textbox">
                                        <input type="text" placeholder="Your Email" class="input-form" name="txtEmail">
                                    </div>
                                    <div class="custom-textbox">
                                        <input type="text" placeholder="Your Department" class="input-form" name="txtDivision">
                                    </div>
                                    <div class="custom-textbox">
                                        <div class="custom-radio">
                                            <label>
                                                <input type="radio" class="tempBtn" name="rbTime" class="input-form" value="permanent" onclick="hideTime()" >
                                                Permanent
                                            </label>
                                            <label>
                                                <input type="radio" class="tempBtn" name="rbTime" class="input-form" value="TempDate" id="tmpRadio" onclick="showTime()">
                                                Temporary
                                            </label>
                                        </div>
                                        <div id="input-date-container"></div>
                                        <!-- <input type="text" id="tempText" oninput="setTempDate(this)" style="visibility: hidden;" class="input-form" placeholder="dd/mm/yyyy" /> -->
                                    </div>
                                    <div class="custom-textbox">
                                        <div id="address-container" class="form-group">
                                            <input type="text" class="input-form" name="txtAccess[1]" placeholder="IP Address 1" style="margin-bottom: 10px">
                                            <input type="hidden" value="1" id="countAccessIP" name="accessIpCount">
                                        </div>
                                        <ul id="add-ip" class="addIpBtn">Add IP</ul>
                                        <ul id="remove-ip" class="removeIpBtn">Remove IP</ul>  
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Register"/>
                                </div>
                            </div>
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
	width: 100%;
	height: 100%;
	background: -webkit-linear-gradient(left, #1b9ad7,#88388f);
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
.addIpBtn{
	font-weight: 600;
	color: white;
	background-color: #88388f;
	margin-right: 70%;
	padding: 1%;
	border-radius: 1.5rem;
	text-align: center;
	cursor: pointer;
}
.removeIpBtn{
	font-weight: 600;
	color: white;
	background-color: #88388f;
	margin-right: 70%;
	padding: 1%;
	border-radius: 1.5rem;
	text-align: center;
	cursor: pointer;
}
.row{
	width: 100%;
	height: 100%;
}
#ticket-container{
    padding-bottom: 10px;
}
.register-center{
    background: #f8f9fa;
    width: 650px;
    height: auto;
    margin: 0 auto;
    border-radius : 30% 0%;
    min-height: 100vh;
}
.custom-textbox, .custom-radio{
    padding-bottom: 10px;
}
.register .register-form{
    padding: 8% 8% 0% 11%;
    padding-left: 8vw;
}
.btnRegister{
    margin-top: 0vh;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
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
    padding-top: 5%;
    margin-bottom: -10%;
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

