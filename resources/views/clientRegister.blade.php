<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>VPN</title>
</head>
<body>

	<div class="register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <h3 class="title-text">VPN</h3>
                        <h8 class="welcome-text"></h8>
                        <p id="already-register">Check Your VPN Account Status</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#loginForm">Login</button>
                    </div>

                    <div class="modal fade" id="loginForm">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- modal header -->
                                <div class="modal-header">
                                    LOGIN
                                </div>
                                <!-- modal body -->
                                <div class="modal-body">
                                            <ul class="nav nav-loginTabs" role="tablist">
                                            		<li role="presentation" class="active"><a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab" >Staff</a></li>
                                                	<li role="presentation"><a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Vendor</a> </li>
                                            </ul>
                                            <br>
                                    	<div role="tabpanel">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                            
                                                <div role="tabpanel" class="tab-pane active" id="uploadTab">
                                                	<form method="POST" action="/submitClient" enctype="multipart/form-data" autocomplete="off">
                           							{{csrf_field()}}
	                                                    <input type="text" class="form-control" name="txtUserLogin" placeholder="Username">
	                                                    <br>
	                                                    <input type="text" class="form-control" name="txtUserPass" placeholder="Password">
	                                                    <br>
	                                                    <div class="wrapper">
	                                                    	<input type="submit" class="btnRegister"  value="Login"/>
	                                                    </div>
                                                    </form>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="browseTab">
                                               		<form method="POST" action="/submitClient" enctype="multipart/form-data" autocomplete="off">
                           							{{csrf_field()}}
		                                                <input type="text" class="form-control" name="txtVendorLogin" placeholder="Vendor Username">
		                                                <br>
	                                                    <input type="text" class="form-control" name="txtVendorPass" placeholder="Vendor Password">
	                                                    <br>
	                                                    <div class="wrapper">
	                                                    	<input type="submit" class="btnRegister"  value="Login"/>	
	                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="new-button" data-toggle="tab-content" href="#new" role="tab" aria-controls="new" aria-selected="true" onclick="showNew()">New Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vendor-button" data-toggle="tab-content" href="#vendor" role="tab" aria-controls="vendor" aria-selected="false" onclick="showVendor()">Vendor</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="new-tab" role="tabpanel" aria-labelledby="new-tab">
                            <form method="POST" action="/registerClient" enctype="multipart/form-data" autocomplete="off">
                            {{csrf_field()}}
                                    <h3 class="register-heading">Request New VPN</h3>
                                    <div class="row register-form">
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="txtTicket" placeholder="Ticket Number">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="txtFullName" placeholder="Your Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="txtEmail" placeholder="Your Email">
                                            </div>
                                            <!-- Ambil dari database -->
                                            <div class="form-group">
                                            	<input list="division" class="form-control" name="txtDivision" placeholder="Your Division">
                                            		<datalist id="division">
                                                  	  	<option value="IT"></option>
                                                  	  	<option value="BOL"></option>
                                                  	 	<option value="SOFTDEV"></option>
                                                  	 	<option value=""></option>t
                                                	</datalist>
                                            	</input>     
                                            </div>
                                            <div class="form-group">
                                            	<input type="radio" class="tempBtn" name="rbTime" value="permanent" onclick="hideTime()" >Permanent</input>
                                            	<input type="radio" class="tempBtn" name="rbTime" value="TempDate" id="tmpRadio" onclick="showTime()">Temporary</input>
                                            	<input type="text" id="tempText" oninput="setTempDate(this)" style="visibility: hidden;" class="form-control" placeholder="dd/mm/yyyy" />
                                            </div>
                                            <div class="form-group">
                                            	<div id="textboxDiv" class="form-group">
                                                    <input type="text" class="form-control" name="txtAccess[1]" placeholder="IP" >
                                            		<input type="hidden" value="1" id="countAccessIP" name="accessIpCount">
                                            	</div> 
                                            	<ul id="Add" class="addIpBtn">Add IP</ul>
                                            	<ul id="Remove" class="removeIpBtn">Remove IP</ul>  
                                            </div>
                                            <input type="submit" class="btnRegister"  value="Register"/>
                                        </div>
                                    </div>
                            </form>
                                </div>

                            <div class="tab-pane fade show" id="vendor-tab" role="tabpanel" aria-labelledby="vendor-tab">
                            <form method="POST" action="/registerVendor" enctype="multipart/form-data" autocomplete="off">
                            {{csrf_field()}}
                                <h3  class="register-heading">Create VPN for Vendor</h3>
                                <div class="row register-form">
                                    <div class="col-md-11">
                                        <div class="form-group">
                                                <input type="number" class="form-control" name="txtTicket" placeholder="Ticket Number">
                                            </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="txtFullName" placeholder="Your Email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="txtVendorName" placeholder="Vendor Name" value="" />
                                        </div>
                                        <div class="form-group">
                                                <input type="radio" class="tempBtn" name="rbTime" value="permanent" onclick="hideTime()" >Permanent</input>
                                                <input type="radio" class="tempBtn" name="rbTime" value="TempDate2" id="tmpRadio2" onclick="showTime()">Temporary</input>
                                                <input type="text" id="tempText2" oninput="setTempDate2(this)" style="visibility: hidden;" class="form-control" placeholder="dd/mm/yyyy" value=""/>
                                            </div> 
                                        <div class="form-group">
                                            <div id="textboxDiv2" class="form-group">
                                                <input type="text" class="form-control" name="txtAccessVendor1" placeholder="IP" value="" >
                                            </div> 
                                            <ul id="Add2" class="addIpBtn">Add IP</ul>
                                            <ul id="Remove2" class="removeIpBtn">Remove IP</ul>  
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

<script type="text/javascript">
		$(document).ready(function() { 
			$countAccessList=1;
			$countAccessList2=1;
             $("#Add").on("click", function() {  
                $countAccessList +=1; 
                $("#countAccessIP").val($countAccessList);
                console.log($("#countAccessIP").val());
                $("#textboxDiv").append("<input type=\"text\" class=\"form-control\" name=\"txtAccess["+ $countAccessList +"]\" placeholder=\"IP *\" value=\"\" >"); 
                
            });
            $("#Remove").on("click", function() {  
            	if($countAccessList >1){
            		$countAccessList -= 1;
                	$("#textboxDiv").children().last().remove();
            	}
            });  
            $("#Add2").on("click", function() {  
                $countAccessList2 +=1; 
                $("#textboxDiv2").append("<input type=\"text\" class=\"form-control\" name=\"txtAccessVendor"+ $countAccessList2 +"\" placeholder=\"IP *\" value=\"\" >"); 
            });
            $("#Remove2").on("click", function() {  
            	if($countAccessList2 >1){
            		$countAccessList2 -= 1;
                	$("#textboxDiv2").children().last().remove();
            	}
       		});  
        });  

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
		var e = document.getElementById("tempText");
        var x = document.getElementById("tempText2");
			e.style.visibility = "visible";
            x.style.visibility = "visible";
			
	}

	function hideTime(){
		var e = document.getElementById("tempText");
        var x = document.getElementById("tempText2");
			e.style.visibility = "hidden";
            x.style.visibility = "hidden";
	}


    function setTempDate(ele){
        document.getElementById("tmpRadio").value=ele.value;
    }

    function setTempDate2(ele){
        document.getElementById("tmpRadio2").value=ele.value;
    }

    
</script>


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
	display: inline-flex;
}
.welcome-text{
	text-align: center;
    margin-top: 8%;
    margin-bottom: 0vh;
    color: white;
}
.register-left{
	margin-top: 20vh;
    text-align: center;
    color: #fff;
}
.register-left input{
	margin-top: 20vh;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 5%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
	vertical-align: center;
    background: #f8f9fa;
    border-radius : 30% 0%;
    margin : 0;
    margin-left: 2vw;
    min-height: 100vh;
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}

.register .register-form{
    padding: 10% 11% 0% 11%;
    padding-left: 10vw;
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
    margin-top: 11%;
    margin-bottom: -15%;
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
	.register-left{
		margin-top: 1vh;
	    text-align: center;
	    color: #fff;
	    flex-wrap: wrap;
		}
	.register-left input {
	    /* margin-top: 20vh; */
	    border: none;
	    border-radius: 1.5rem;
	    padding: 1%;
	    width: 15%;
	    background: #f8f9fa;
	    font-weight: bold;
	    color: #383d41;
	    /*CEK YANG INI*/
	    margin-bottom: -20vh;
	    /* margin-top: 30%; */
	    margin-left: 80vw;
	    margin-top: -20%;
	    cursor: pointer;
	    padding-right: 1;
	}

	.register-left p{
	    font-weight: lighter;
	    padding: 0;
	    margin-top: -9%;
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
	.register-right{
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

