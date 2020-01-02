@extends('layouts.dashboard')

@section('title','Admin Dashboard')

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
<div class="input-group">
    <input type="text" class="form-control" onkeydown="searchExtension(event.keyCode)" placeholder="VPN user, VPN name, VPN department..." >
    <div class="input-group-append" onclick="searchExtension('13')">
        <span class="input-group-text">
            <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
            <img src="{{asset('img/search.png')}}" width="20px">
        </span>
    </div>
</div>
@endsection

@section('sidebar-item')
<div class="sidebar-item sidebar-menu">
    <ul>
        <li class="sidebar-dropdown info active" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="show-request" onclick="showRequests()">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Requests</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="show-request">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Edit Account</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="show-request">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Delete Account</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="show-request">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Delete Account</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="show-request">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Delete Account</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="show-request">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Delete Account</span>
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
<div style="width: 80%; margin: 0 auto;">
    <table id="table-data" class="display"></table>
</div>
<div class="table-height" style="display: none;"></div>
@endsection

@section('js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/mikman.js')}}"></script>
<script type="text/javascript">
$('.default-theme .sidebar-wrapper').css('background-color','#762f8d');
</script>
@endsection