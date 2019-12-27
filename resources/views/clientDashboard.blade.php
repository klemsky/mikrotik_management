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

    <script type="text/javascript" src="{{asset('js/mikman.js')}}"></script>
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
            <div class="container-fluid p-5">
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
      						<h3 class="vpnName">NAMA VPN</h3>
      						<h3 class="vpnStatus"> Status :  </h3>
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
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="txtFullName" placeholder="Your Name *">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="txtPassword" placeholder="Password *">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"  name="txtPasswordConfirmation" placeholder="Confirm Password *">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="txtEmail" placeholder="Your Email *">
                                            </div>
                                            <!-- Ambil dari database -->
                                            <div class="form-group">
                                              <input list="division" class="form-control" name="txtDivision" placeholder="Your Division *">
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
                                              <input type="radio" class="tempBtn" name="rbTime" value="temporary" onclick="showTime()">Temporary</input>
                                              <input type="text" id="tempText"style="visibility: hidden;" class="form-control" placeholder="dd/mm/yyyy" />
                                            </div>
                                            <div class="form-group">
                                              <div id="textboxDiv" class="form-group">
                                                <input type="text" class="form-control" name="txtAccess1" placeholder="IP *">
                                              </div> 
                                              <ul id="Add" class="addIpBtn">Add IP</ul>
                                              <ul id="Remove" class="removeIpBtn">Remove IP</ul>  
                                            </div>
                                            <input type="submit" class="btnRegister"  value="Register"/>
                                        </div>
                                    </div>
                            </form>
                          </div>
                        </div>
                  
                </div>
      				</div>
      				<div class="dashboardContent" style="display: none;" id="updatePassword">
      					<div class="vpnInfo">
                  <h3 class="vpnName">PASWORDADSADSADAD</h3>
                  
                </div>
      				</div>
            </div>
        </main>

    </div>
    <!-- page-wrapper -->

</body>
</html>

<script type="text/javascript">
	var log=1;
	function changeStation(){
		if(log==1){
			log = 0;
			$("#data-log").css('display','none');
			$("#data-ip").css('display','block');
			$("#change-button").text("Log");
		}
		else{
			log = 1;
			$("#data-ip").css('display','none');
			$("#data-log").css('display','block');
			$("#change-button").text("IP Address");
		}
	}
  function openNav() {
    document.getElementById("sidebar").style.left = "0px";
  }
  function closeNav() {
    document.getElementById("sidebar").style.left = "-280px";
  }

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
	.default-theme .sidebar-wrapper {
  /*background-color: #0090d1; }*/
  background-color: #9e3fbe; }
  .default-theme .sidebar-wrapper .sidebar-item {
    border-top: 1px solid #ffffff;
    margin: 0px 18px; }
    .default-theme .sidebar-wrapper .sidebar-item:first-child {
      border-top: none; }
  .default-theme .sidebar-wrapper .sidebar-item .sidebar-dropdown:first-child {
    border-top: none; }
  .default-theme .sidebar-wrapper .sidebar-item .sidebar-dropdown{
    border-top: 2px solid #ffffff;
    padding: 18px 0px;
    font-size: 14px;}
  .default-theme .sidebar-wrapper .sidebar-item .sidebar-dropdown:last-child {
    border-bottom: 1px solid #ffffff; }
  .default-theme .sidebar-wrapper .sidebar-search input,
  .default-theme .sidebar-wrapper .sidebar-search i {
    color: black; }
  .default-theme .sidebar-wrapper .sidebar-header,
  .default-theme .sidebar-wrapper a:not(.dropdown-item){
    color: #ffffff; }
  .default-theme .sidebar-wrapper a:not(.dropdown-item):hover,
  .default-theme .sidebar-wrapper .sidebar-menu li.active > a {
    color: #d8d8d8; }
  .default-theme .sidebar-wrapper .sidebar-search input.search-menu,
  .default-theme .sidebar-wrapper .sidebar-search .input-group-text {
    background-color: #ffffff;
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    margin-left: 1px; }
  .default-theme .sidebar-wrapper .sidebar-menu a:hover i,
  .default-theme .sidebar-wrapper .sidebar-menu a:hover:before,
  .default-theme .sidebar-wrapper .sidebar-menu li.active a i {
    color: #22ff16; }
  .default-theme .sidebar-wrapper .sidebar-menu ul li a i {
    background-color: #2b2b2b; }
  .default-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
    background-color: #2b2b2b; }
  .default-theme .sidebar-wrapper .sidebar-menu .header-menu span {
    color: #868686; }
  .default-theme .sidebar-wrapper .sidebar-footer {
    background-color: #2b2b2b;
    -webkit-box-shadow: 0px -1px 5px #762f8d;
    box-shadow: 0px -1px 5px #762f8d;
    border-top: 1px solid #ffffff;
    padding: 20px; }
  .default-theme .sidebar-wrapper .sidebar-footer > div:first-child {
    border-left: none; }
  .default-theme .sidebar-wrapper .sidebar-footer > div:last-child {
    border-right: none; }

  .default-theme.toggled #close-sidebar {
    color: #ffffff; }

  .default-theme.toggled #close-sidebar:hover {
    color: #d8d8d8; }

  .default-theme .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
  .default-theme .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
  .default-theme .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #525965;
    border-radius: 0; }

  .default-theme .mCSB_scrollTools .mCSB_draggerRail {
    background-color: transparent; }

  .default-theme.sidebar-bg .sidebar-wrapper:before {
    background-color: rgba(42, 42, 42, 0.9); }

  .default-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item),
  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-header,
  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-search input,
  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-search i {
    color: #c7c7c7; }

  .default-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item):hover,
  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-menu li.active > a {
    color: #f2f2f2; }

  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-item {
    border-color: #454545; }

  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-search input.search-menu,
  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-search .input-group-text {
    background-color: rgba(81, 81, 81, 0.5); }

  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
    background-color: rgba(81, 81, 81, 0.5); }

  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-menu ul li a i {
    background-color: rgba(81, 81, 81, 0.5); }

  .default-theme.sidebar-bg .sidebar-wrapper .sidebar-footer {
    background-color: rgba(56, 56, 56, 0.5);
    -webkit-box-shadow: 0px -1px 5px rgba(29, 29, 29, 0.8);
    box-shadow: 0px -1px 5px rgba(29, 29, 29, 0.8);
    border-top: 1px solid #383838; }


/*----------------------------------------------------Main----------------------------------------------------------------*/
@-webkit-keyframes swing {
  0%, 30%, 50%, 70%, 100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  10% {
    -webkit-transform: rotate(10deg);
    transform: rotate(10deg); }
  40% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg); }
  60% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); }
  80% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg); } }

@keyframes swing {
  0%, 30%, 50%, 70%, 100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  10% {
    -webkit-transform: rotate(10deg);
    transform: rotate(10deg); }
  40% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg); }
  60% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); }
  80% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg); } }

@-webkit-keyframes sonar {
  0% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
    opacity: 1; }
  100% {
    -webkit-transform: scale(2);
    transform: scale(2);
    opacity: 0; } }

@keyframes sonar {
  0% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
    opacity: 1; }
  100% {
    -webkit-transform: scale(2);
    transform: scale(2);
    opacity: 0; } }

.sidebar-wrapper {
  width: 280px;
  height: 100%;
  max-height: 100%;
  position: fixed;
  top: 0;
  z-index: 999;
  -webkit-transition: left .3s ease, width .3s ease;
  transition: left .3s ease, width .3s ease; }
  .sidebar-wrapper ul {
    list-style-type: none;
    padding: 0;
    margin: 0; }
  .sidebar-wrapper a {
    text-decoration: none;
    -webkit-transition: color .3s ease;
    transition: color .3s ease; }
  .sidebar-wrapper .sidebar-item {
    -webkit-transition: all .3s linear;
    transition: all .3s linear; }
  .sidebar-wrapper .sidebar-content {
    /*max-height: calc(100% -35px);*/
    max-height: calc(100%);
    /*height: calc(100% - 35px);*/
    height: calc(100%);
    /*overflow-y: scroll;*/
    position: relative; }
    .sidebar-wrapper .sidebar-content.desktop {
      overflow-y: hidden; }
  .sidebar-wrapper .badge {
    border-radius: 0; }

.sidebar-bg .sidebar-wrapper {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat; }
  .sidebar-bg .sidebar-wrapper:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0; }

.sidebar-wrapper .sidebar-brand {
  padding: 1rem 0rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  height: 55px; }
  .sidebar-wrapper .sidebar-brand > a {
    text-transform: uppercase;
    font-weight: bold;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis; }

.sidebar-wrapper .sidebar-header {
  padding: 20px;
  overflow: hidden; }
  .sidebar-wrapper .sidebar-header .user-pic {
    width: 90px;
    padding: 2px;
    margin-right: 15px;
    overflow: hidden; }
    .sidebar-wrapper .sidebar-header .user-pic img {
      -o-object-fit: cover;
      object-fit: cover;
      height: 100%;
      width: 100%; }
  .sidebar-wrapper .sidebar-header .user-info {
    overflow: hidden; }
    .sidebar-wrapper .sidebar-header .user-info > span {
      display: block;
      white-space: nowrap;
      text-overflow: ellipsis; }
    .sidebar-wrapper .sidebar-header .user-info .user-role {
      font-size: 12px; }
    .sidebar-wrapper .sidebar-header .user-info .user-status {
      font-size: 11px;
      margin-top: 4px; }
      .sidebar-wrapper .sidebar-header .user-info .user-status i {
        font-size: 8px;
        margin-right: 4px;
        color: #5cb85c; }

.sidebar-wrapper .sidebar-search > div {
  padding: 1rem 0rem; }

.sidebar-wrapper .sidebar-search input {
  border-radius: 0; }

.sidebar-wrapper .sidebar-search .input-group {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap; }

.sidebar-wrapper .sidebar-search .input-group-append .input-group-text {
  border-radius: 0;
  border-left: 0; }

.sidebar-wrapper .sidebar-menu {
  padding-bottom: 10px; }
  .sidebar-wrapper .sidebar-menu .header-menu span {
    font-weight: bold;
    font-size: 14px;
    padding: 15px 20px 5px 20px;
    display: inline-block; }
  .sidebar-wrapper .sidebar-menu ul li a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-decoration: none;
    position: relative;
    padding: 5px 30px 5px 0px;
    width: 100%; }
    .sidebar-wrapper .sidebar-menu ul li a:hover > i::before {
      display: inline-block;
      -webkit-animation: swing ease-in-out .5s 1 alternate;
      animation: swing ease-in-out .5s 1 alternate; }
    .sidebar-wrapper .sidebar-menu ul li a i {
      margin-right: 10px;
      font-size: 12px;
      width: 35px;
      height: 35px;
      line-height: 35px;
      text-align: center;
      -ms-flex-negative: 0;
      flex-shrink: 0; }
    .sidebar-wrapper .sidebar-menu ul li a .menu-text {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      white-space: nowrap;
      text-overflow: ellipsis;
      -ms-flex-negative: 1;
      flex-shrink: 1;
      overflow: hidden; }
/*  .sidebar-wrapper .sidebar-menu .sidebar-dropdown > a:after {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    content: "\f105";
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    background: 0 0;
    position: absolute;
    right: 15px;
    top: 14px;
    -webkit-transition: -webkit-transform .3s ease;
    transition: -webkit-transform .3s ease;
    transition: transform .3s ease;
    transition: transform .3s ease, -webkit-transform .3s ease; }*/
  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu {
    display: none; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
      padding: 5px 0; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
      padding-left: 25px;
      font-size: 13px; }
      .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis; }
        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
          content: "\f111";
          font-family: "Font Awesome 5 Free";
          font-weight: 400;
          font-style: normal;
          display: inline-block;
          text-align: center;
          text-decoration: none;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
          margin-right: 10px;
          font-size: 8px; }
        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
          margin-left: auto; }
  .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a:after {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    right: 15px; }

.sidebar-wrapper .sidebar-footer {
  position: absolute;
  width: 100%;
  bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .sidebar-wrapper .sidebar-footer > div {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    text-align: center;
    height: 35px;
    line-height: 35px;
    position: static;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
    .sidebar-wrapper .sidebar-footer > div > a {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1; }
    .sidebar-wrapper .sidebar-footer > div a .notification {
      position: absolute;
      top: 0; }
    .sidebar-wrapper .sidebar-footer > div.pinned-footer {
      display: none; }
  .sidebar-wrapper .sidebar-footer .dropdown-menu {
    bottom: 36px;
    left: 0 !important;
    top: initial !important;
    right: 0;
    -webkit-transform: none !important;
    transform: none !important;
    border-radius: 0;
    font-size: .9rem; }
  .sidebar-wrapper .sidebar-footer .messages .dropdown-item {
    padding: .25rem 1rem; }
  .sidebar-wrapper .sidebar-footer .messages .messages-header {
    padding: 0 1rem; }
  .sidebar-wrapper .sidebar-footer .messages .message-content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
    .sidebar-wrapper .sidebar-footer .messages .message-content .pic {
      width: 40px;
      height: 40px;
      overflow: hidden; }
      .sidebar-wrapper .sidebar-footer .messages .message-content .pic img {
        -o-object-fit: cover;
        object-fit: cover;
        height: 100%; }
    .sidebar-wrapper .sidebar-footer .messages .message-content .content {
      line-height: 1.6;
      padding-left: 5px;
      width: calc(100% - 40px); }
      .sidebar-wrapper .sidebar-footer .messages .message-content .content .message-title {
        font-size: 13px; }
      .sidebar-wrapper .sidebar-footer .messages .message-content .content .message-detail {
        font-size: 12px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; }
  .sidebar-wrapper .sidebar-footer .notifications .dropdown-item {
    padding: .25rem 1rem; }
  .sidebar-wrapper .sidebar-footer .notifications .notifications-header {
    padding: 0 1rem; }
  .sidebar-wrapper .sidebar-footer .notifications .notification-content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
    .sidebar-wrapper .sidebar-footer .notifications .notification-content .icon {
      width: 40px;
      height: 40px; }
      .sidebar-wrapper .sidebar-footer .notifications .notification-content .icon i {
        width: 35px;
        height: 35px;
        text-align: center;
        line-height: 35px; }
    .sidebar-wrapper .sidebar-footer .notifications .notification-content .content {
      line-height: 1.6;
      padding-left: 5px;
      width: calc(100% - 40px); }
      .sidebar-wrapper .sidebar-footer .notifications .notification-content .content .notification-time {
        font-size: .7rem;
        color: #828282; }
      .sidebar-wrapper .sidebar-footer .notifications .notification-content .content .notification-detail {
        font-size: 12px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; }
  .sidebar-wrapper .sidebar-footer .badge-sonar {
    display: inline-block;
    background: #980303;
    border-radius: 50%;
    height: 8px;
    width: 8px;
    position: absolute;
    top: 0; }
    .sidebar-wrapper .sidebar-footer .badge-sonar:after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      border: 2px solid #980303;
      opacity: 0;
      border-radius: 50%;
      width: 100%;
      height: 100%;
      -webkit-animation: sonar 1.5s infinite;
      animation: sonar 1.5s infinite; }

body {
  font-size: .9rem; }

/*----------------page-wrapper----------------*/
	.page-wrapper {
	  height: 100vh; 
	  overflow: hidden;
	}
  .page-wrapper .theme {
    width: 40px;
    height: 40px;
    display: inline-block;
    margin: 2px;
    background-size: cover; }
  .page-wrapper .theme.selected {
    border: 2px solid #00c7ff; }
  .page-wrapper .theme.default-theme {
    background: #762f8d; }
  .page-wrapper .theme.chiller-theme {
    background: #374140; }
  .page-wrapper .theme.legacy-theme {
    background: #2e333c; }
  .page-wrapper .theme.ice-theme {
    background: #3a4d56; }
  .page-wrapper .theme.cool-theme {
    background: #46454c; }
  .page-wrapper .theme.light-theme {
    background: #ececec; }
  .page-wrapper .page-content {
    display: inline-block;
    width: 100%;
    -webkit-transition: padding-left .3s ease;
    transition: padding-left .3s ease;
    overflow-x: hidden; }
    /*.page-wrapper .page-content .overlay {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 998;
      background: #000;
      opacity: .5;
      display: none; }*/
  .page-wrapper.toggled .sidebar-wrapper {
    left: 0px; }
  @media screen and (min-width: 768px) {
    .page-wrapper.toggled .page-content {
      padding-left: 272px; 
      height: 100vh;
      } 
      .sidebar-wrapper{
        left: 0px !important;
      }
      .dashboardContent{
        height: 100vh;
        width: 100vw;
        padding-top: 1px;
        z-index: -1;
        padding-left: 8px;
      }
      .sideBarBtn{
        display: none;
      }
      .contentBackground{
        margin-top: -22px;
        width: 84%;
        height: 104vh;
        -webkit-filter: blur(4px);
        position: fixed;
        z-index: -9999;
      }
      .tab-content{
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.30);
        text-align: center;
      }
    }
  @media screen and (max-width: 768px) {
    .page-wrapper.toggled .page-content .overlay {
      display: block; } 
      .dashboardContent{
        height: 100vh;
        width: 100vw;
        margin-top: -15px;
        z-index: -1;
      }
      .sidebar-icon {
        width: 35px;
        height: 5px;
        background-color: white;
        margin: 6px 10px;
        border-radius: 1.5rem;
      }
      .sideBarBtn{
        z-index: -1;
      }
      .contentBackground{
      	margin-top: -22px;
        margin-left: -5px;
        width: 102%;
        height: 104vh;
        -webkit-filter: blur(4px);
        position: fixed;
        z-index: -999;
      }
      .page-wrapper.toggled .sidebar-wrapper {
      left: -280px; 
      }
      .sidebar-wrapper .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
      }
      .tab-content{
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.30);
        text-align: center;
      }
  }
  @media screen and (min-width: 768px) {
    .page-wrapper.toggled.pinned .page-content {
      padding-left: 80px; } }
  .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper {
    width: 80px; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-header {
      padding: 10px; }
      .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-header .user-pic {
        margin: 0 auto;
        width: 50px;
        float: none; }
        .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-header .user-pic img {
          margin: auto; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-search input,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-header .user-info,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-menu .header-menu,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-menu .sidebar-submenu,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-menu ul > li > a > span,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-menu ul > li > a::after,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-footer > div:not(.pinned-footer) {
      display: none !important; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-search .input-group-text {
      height: 35px; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-footer > div.pinned-footer {
      display: block; }
  .page-wrapper .mCSB_scrollTools {
    width: 6px; }
  .page-wrapper .mCSB_inside > .mCSB_container {
    margin-right: 0px; }

/*---- border-radius ------*/
.boder-radius-on .sidebar-header .user-pic {
  border-radius: 12px; }

.boder-radius-on .badge {
  border-radius: 8px; }

.boder-radius-on .sidebar-menu ul li i {
  border-radius: 4px; }

.boder-radius-on .sidebar-footer .dropdown-menu {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px; }
  .boder-radius-on .sidebar-footer .dropdown-menu .notification-content i,
  .boder-radius-on .sidebar-footer .dropdown-menu .message-content .pic {
    border-radius: 4px; }

.boder-radius-on .sidebar-search input {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px; }

.boder-radius-on .sidebar-search .input-group-append .input-group-text {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px; }

/*Toggle Button*/
#toggle-sidebar{
  margin-top:-10px;
  width: 60px;
  height: 60px;
  position: fixed;
}

.transform{
  transform: rotate(180deg);
}

/*
#toggle-sidebar>img:before{
  width: 100%;
  height: 100%;
}

#toggle-sidebar>img:after{
  transform: rotate(180deg);
}*/


/*Home Page*/
#syahdanImage{
  width: 70%;
  height: 30%;
}

/*.container-fluid.p-5{
  height: 100vh;
  width: 100vw;
}
*/
/* Table CSS*/
.table-data tr td, tr th{
  padding: 5px;
    font-size: 14px;
}

a{
    cursor: pointer;
}

.button-reorder{
    position: fixed;
    bottom: 10px;
    right: 10px;
}

body, #modal-action{
  font-size: 13px;
  margin: 0;
}

.sidebar-menu li{
  transition: 0.3s;
}

.sidebar-menu li:hover{
  background: #f8f9fa;
  border-radius: 1px;
}

.sidebar-menu .active{
  background: #f2960b;
  border-radius: 1px;
}

.sidebar-menu .active span{
  color: #ffffff;
}

.sidebar-menu a:hover>span{
  color: black;
}

.sidebar-menu a:hover span{
  color: black;
}

.table-sticky { border-collapse: collapse; border: 1px solid black; width: 85%; }

th,tr , td { padding: 8px 16px; border: 1px solid black;}

.table-sticky>.title>tr>th,
.table-sticky>.title>tr>td {
  top: 0px;
  position: sticky;
}

.table-sticky>.column-name>tr>th,
.table-sticky>.column-name>tr>td {
  background-color: white;
  top: 55px;
  position: sticky;
}

.table-sticky>.group-unit>tr>th,
.table-sticky>.group-unit>tr>td {
  top: 85px;
  position: sticky;
}

.table-height {
  height: 1000px;
  display: block;
  overflow: scroll;
}

.container{
	left: 280px;
}


</style>