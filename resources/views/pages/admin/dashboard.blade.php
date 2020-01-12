@extends('layouts.dashboard')

@section('title','Admin Dashboard')

@section('css')
<link rel="stylesheet" href="{{asset('binus-bootstrap/css/themes/edu/css/style.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
<link rel="shortcut icon" type="image/png" href="{{asset('img/icon.png')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.css')}}">
@endsection

@section('html-header')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('sidebar-title')
<a href="javascript:;" style="text-align: center">MIKROTIK VPN MANAGEMENT</a>
@endsection

@section('sidebar-header-img')
<img class="img-responsive img-rounded" src="{{asset('img/user.jpg')}}">
@endsection

@section('sidebar-header-user')
<strong>@if(Session::has('username')){{Session::get('username')}}@endif</strong>
@endsection

@section('sidebar-header-role')
    <strong>Role: </strong><br>Network Admin
@endsection

@section('sidebar-search')
@endsection

@section('sidebar-item')
<div class="sidebar-item sidebar-menu">
    <ul>
        <!-- <li class="sidebar-dropdown info active" id="show-requests" style="padding: 0px;border-top: 0px solid #ffffff;">
            <a href="javascript:;" onclick="showRequests()">
                <span class="menu-text" style="padding:10px 0 10px 10px;">VPN Account Requests</span>
            </a>
        </li> -->
        <!-- <li class="sidebar-dropdown site-tab info" id="show-vpn" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="javascript:;" onclick="showVPNs('show-vpn')">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Show All VPN Account</span>
            </a>
        </li> -->
    </ul>
</div>
@endsection

@section('dashboard-image')
<!-- <div class="container-fluid p-5 image">
    <div class="row">
        <img id="syahdanImage" src="{{asset('img/binus_it_old.jpg')}}" class="w-100">
    </div>                        
</div> -->
@endsection

@section('content')
<br><br>
<div style="width: 90%; margin: 0 auto;" class="table-data-container">
</div>
<div class="table-height" style="display: none;"></div>
@endsection

@section('modal')
<iframe name="iframe-dummy" style="display:none;"></iframe>
<div class="modal fade bd-example-modal-lg" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="modal-login-header" class="modal-header">
                <h4>Login MikroTik</h4>
            </div>
            <form id="relogin-mikrotik" onsubmit="relogin()" target="iframe-dummy">
                {{csrf_field()}}
                <div id="modal-login-body" class="modal-body">
                    <label>Password:</label>
                    <input type="password" class="input-form" name="password" placeholder="Password MikroTik" value="owen">
                    <p id="error" style="display:none;">Error Message</p>
                    <input type="hidden" id="command">
                </div>
                <div id="modal-login-footer" class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal" onclick="closeModal()">Cancel</button>
                    <input type="submit" class="input-form btn btn-primary" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/mikman.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.default-theme .sidebar-wrapper').css('background-color','#762f8d');
    showRequests();
    $('.site-tab').remove();
    $(".sidebar-menu ul").append("<li class='sidebar-dropdown info active' id='show-requests' style='padding: 0px;border-top: 0px solid #ffffff;'><a href='javascript:;' onclick='showRequests()'><span class='menu-text' style='padding:10px 0 10px 10px;'>VPN Account Requests</span></a></li>");
    $(".sidebar-menu ul").append("<li class='sidebar-dropdown site-tab' id='show-vpn' style='padding:0; border-top:1px solid #ffffff;'><a href='javascript:;' onclick=showLoginModal('show-vpn')><span class='menu-text' style='padding:10px 0 10px 10px;'>Show All VPN Account</span></a></li>");
});
</script>
@endsection