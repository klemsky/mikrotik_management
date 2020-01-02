<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Mikman</title>

    {{--Custom Button--}}
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/clientDashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar-themes.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/icon.png')}}" />

    {{--Swall Fire--}}
    {{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>--}}
    <script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>

    <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery/jquery.mCustomScrollbar.concat.min.js')}}"></script>


    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>

    <!-- <script type="text/javascript" src="{{asset('js/mikman.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('js/clientDashboard.js')}}"></script>
</head>

<body>
	<div style="display: none;">
		
//	<?php
//		use PEAR2\Net\RouterOS;
//		use Illuminate\Support\Facades\Session;

		// $client = session::get('client');
		// $util = new RouterOS\Util($client);

		// $dataLog = $util->setMenu('/log')->getAll();
		// $dataIP = $client->sendSync(new RouterOS\Request('/ip address print'));
//	?>
	<!-- <button onclick="changeStation()" id="change-button">IP Address</button> -->
	</div>

	<div class="page-wrapper default-theme bg1 toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand">
                    <img src="{{asset('img/binus_it.png')}}" width="200px">
                </div>
                <div class="sidebar-item sidebar-brand" >
                    <a href="javascript:;" onclick="showInfo()" style="text-align: center">VPN DASHBOARD</a>
                </div>
                <!-- sidebar-header  -->
                @if(Session::get('login'))
                <div class="sidebar-item sidebar-header d-flex flex-nowrap" style="align-content: center;text-align: center">
                    <!-- <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/{{Session::get("image")}}" onerror="this.src='img/user.jpg';">
                    </div> -->
                    <div class="user-info">
                        <span class="user-name">Hello,
                            <strong>{{Session::get('login')}}</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                        <span style="margin-top: 10px">
                            <a href="/logout">
                                <button class="btn btn-danger">Logout</button>
                            </a>
                        </span>
                    </div>
                </div>
                @endif
                <!-- sidebar-menu  -->
                <div class="sidebar-item sidebar-menu">
                    <ul>
                        <li class="sidebar-dropdown info active" id="dashboardBtn" style="padding: 0px;border-top: 1px solid #ffffff;">
                            <a href="javascript:;" onclick="showDashboard()" data-toggle="dashboardContent"> 
                                <span class="menu-text" style="padding:10px 0 10px 10px;">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown info" id="accessBtn" style="padding: 0px;border-top: 1px solid #ffffff;">
                            <a href="javascript:;" onclick="showAddAccess()" data-toggle="dashboardContent">
                                <span class="menu-text" style="padding:10px 0 10px 10px;">Add Access</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown info" id="passwordBtn" style="padding: 0px;border-top: 1px solid #ffffff;">
                            <a href="javascript:;" onclick="showUpdatePassword()" data-toggle="dashboardContent">
                                <span class="menu-text" style="padding:10px 0 10px 10px;">Update Password</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <!-- sidebar-footer  -->
        </nav>
        
        <!-- page-content  -->
        <main class="page-content pt-2">
            <!-- <div id="toggle-sidebar"><img id="arrowImg" src="img/prev.png"></div> -->
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-0" >
             	<img src="{{asset('img/spiritBackground.png')}}" class="contentBackground">
              <!-- <div class="header"> -->
                 <a onclick="openNav()" class="sideBarBtn">
                <div class="sidebar-icon"></div>
                <div class="sidebar-icon"></div>
                <div class="sidebar-icon"></div>
                </a>
              <!-- </div> -->
             
      				<div class="dashboardContent" style=" display: block;" id="clientDashboard">
      					<div class="vpnInfo">
      						<h3 class="vpnName" style="color: white">VPN Name : {{ $vpnUsername }}</h3>
      						<h3 class="vpnStatus"> Status :  </h3>
                            <h3 style="color: white"> LIST ACCESS VPN : </h3>
                              @foreach($vpnAclAllow as $aclAllow)
                              <h4 style="color: white">{{$aclAllow}}</h4>
                              @endforeach
      					</div>

                <div class="vpnAccess">
                  vpnAccess
                </div>
      					
      				</div>
      				<div class="dashboardContent" style="display: none;" id="addAccess">
      					<div class="vpnInfo">
                  <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="new-tab">
                          <form method="POST" action="/submitClient" enctype="multipart/form-data" autocomplete="off">
                            {{csrf_field()}}
                                            <h3 class="register-heading">Request New VPN</h3>
                                            <div class="row register-form">
                                                <div class="col-md-11">
                                                <div class="custom-textbox">
                                                <label>Full Name &nbsp;<i class="icon-checklist"></i></label>
                                                <input type="text" class="form-control" value="{{$data['user_name']}}" disabled style="background-color: white;">
                                                <input type="hidden" value="{{$data['user_name']}}" name="user_name">
                                            </div>
                                            <div class="custom-textbox">
                                                <label>Email &nbsp;<i class="icon-checklist"></i></label>
                                                <input type="text" class="form-control" value="{{$data['user_email']}}" disabled style="background-color: white;">
                                                <input type="hidden" value="{{$data['user_email']}}" name="user_email">
                                            </div>
                                            <div class="custom-textbox">
                                                <label>Department &nbsp;<i class="icon-checklist"></i></label>
                                                <input type="text" class="form-control" value="{{$data['user_department']}}" disabled style="background-color: white;">
                                                <input type="hidden" value="{{$data['user_department']}}" name="user_department">
                                            </div>
                                            <div class="custom-textbox">
                                                <div class="custom-radio">
                                                    <input type="radio" class="tempBtn" name="rbTime" class="input-form" value="permanent" onclick="hideTime()" > Permanent</input>&nbsp;&nbsp;&nbsp;
                                                    <input type="radio" class="tempBtn" name="rbTime" class="input-form" value="TempDate" id="tmpRadio" onclick="showTime()"> Temporary</input>
                                                </div>
                                                <div id="input-date-container"></div>
                                            </div>
                                            <div id="address-container" class="form-group">
                                                  <input type="text" class="form-control" name="txtAccess[1]" placeholder="IP Address 1" style="margin-bottom: 10px">
                                                  <input type="hidden" value="1" id="countAccessIP" name="accessIpCount">
                                              </div>
                                              <ul id="add-ip-clientDashboard" class="addIpBtn">Add IP</ul>
                                              <ul id="remove-ip-clientDashboard" class="removeIpBtn">Remove IP</ul>
                                            <br>
                                            <input type="submit" class="btnRegister"  value="Add Access"/>
                                        </div>
                                    </div>
                            </form>
                          </div>
                        </div>
                  
                </div>
      				</div>
      				<div class="dashboardContent" style="display: none;" id="updatePassword">
      					<div class="vpnInfo">
                  <h3 class="vpnName">TEST!#!@#!@#!</h3>
                  
                </div>
      				</div>
            </div>
        </main>

    </div>
    <!-- page-wrapper -->

</body>
</html>

<script type="text/javascript">

	// var log=1;
	// function changeStation(){
	// 	if(log==1){
	// 		log = 0;
	// 		$("#data-log").css('display','none');
	// 		$("#data-ip").css('display','block');
	// 		$("#change-button").text("Log");
	// 	}
	// 	else{
	// 		log = 1;
	// 		$("#data-ip").css('display','none');
	// 		$("#data-log").css('display','block');
	// 		$("#change-button").text("IP Address");
	// 	}
	// }
  // function openNav() {
  //   document.getElementById("sidebar").style.left = "0px";
  // }
  // function closeNav() {
  //   document.getElementById("sidebar").style.left = "-280px";
  // }

  var clientDashboard = document.getElementById('clientDashboard');
  var addAcess = document.getElementById('addAccess');
  var updatePassword = document.getElementById('updatePassword');
  function showDashboard(){
    clientDashboard.style.display = "block";
    addAccess.style.display = "none";
    updatePassword.style.display = "none";
    // $("#dashboardBtn").addClass("active");
    // $("#accessBtn").removeClass("active");
    // $("#passwordBtn").removeClass("active");
  }
  function showAddAccess(){
    clientDashboard.style.display = "none";
    addAccess.style.display = "block";
    updatePassword.style.display = "none";
    // $("#dashboardBtn").("active");
    // $("#accessBtn").addClass("active");
    // $("#passwordBtn").removeClass("active");
  }
  function showUpdatePassword(){
    clientDashboard.style.display = "none";
    addAcess.style.display = "none";
    updatePassword.style.display = "block";
    // $("#dashboardBtn").removeClass("active");
    // $("#accessBtn").removeClass("active");
    // $("#passwordBtn").addClass("active");
  }
</script>

<script src="{{asset('js/main.js')}}"></script>
<style type="text/css">
/*-----------------------------------------------------sidebar--------------------------------------------------------------------*/



/*----------------------------------------------------Main----------------------------------------------------------------*/



</style>