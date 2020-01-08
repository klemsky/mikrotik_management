@extends('layouts.dashboard')

@section('title','Admin Dashboard')

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
        <li class="sidebar-dropdown info active" style="padding: 0px;border-top: 0px solid #ffffff;">
            <a href="#" id="show-request" onclick="showRequests()">
                <span class="menu-text" style="padding:10px 0 10px 10px;">VPN Account Requests</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info" style="padding: 0px;border-top: 0px solid #ffffff;">
            <a href="#" id="show-request" onclick="showAllVPN()">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Show All VPN</span>
            </a>
        </li>
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
                    <input type="password" class="input-form" name="password" placeholder="Password MikroTik">
                    <p id="error" style="display:none;">Error Message</p>
                    <input type="hidden" id="command">
                </div>
                <div id="modal-login-footer" class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
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
});
</script>
@endsection