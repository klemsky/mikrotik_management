@extends('layouts.dashboard')

@section('title','Client Dashboard')

@section('sidebar-title')
<a href="javascript:;" onclick="showInfo()" style="text-align: center">VPN ACCOUNT</a>
@endsection

@section('sidebar-header-img')
<img class="img-responsive img-rounded" src="{{asset('img/user.jpg')}}">
@endsection

@section('sidebar-header-user')
<strong>User</strong>
@endsection

@section('sidebar-header-role')
    Role: Finance Officer
@endsection

@section('sidebar-search')
<div class="input-group">
    <input type="text" class="form-control search-menu" onkeydown="searchExtension(event.keyCode)" placeholder="Search your data..." >
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
            <a href="#" id="show-request" onclick="showRequest(this)">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Request New Account</span>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('dashboard-image')
<div class="row">
    <img id="syahdanImage" src="{{asset('img/binus_it.jpg')}}" class="w-100">
</div>
@endsection

@section('content')
<div class="table-height" style="display: none;">
@endsection

@section('js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/mikman.js')}}"></script>
@endsection