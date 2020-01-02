<link rel="stylesheet" href="{{asset('css/client/clientDashboard.css')}}">

@extends('layouts.dashboard')
@section('title','Client Dashboard')

@section('sidebar-title')
<a href="javascript:;" onclick="showInfo()" style="text-align: center">VPN ACCOUNT</a>
@endsection

@section('sidebar-header-img')
@endsection

@section('sidebar-header-user')
<strong>User</strong>
@endsection

@section('sidebar-header-role')
    Role: Finance Officer
@endsection

@section('sidebar-item')
<div class="sidebar-item sidebar-menu">
    <ul>
        <li class="sidebar-dropdown info active" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="VPN-Home" onclick="showHome()">
                <span class="menu-text" style="padding:10px 0 10px 10px;">VPN Home</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="VPN-Add"  onclick="showAccess()">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Add VPN Access</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="VPN-Password" onclick="showPassword()">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Change VPN Password</span>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('content')
    
    <div class="container">
        <div id="vpnHome" class="VPN-Content">
            <table class="tableVPN">
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">VPN Name  </p></td>
                    <td class="tdVPN">:</td>
                    <td class="tdVPN"><p class="txtVPN">{{$data['vpnUsername']}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Name  </p></td>
                    <td class="tdVPN">:</td>
                    <td class="tdVPN"><p class="txtVPN">{{$data['user_name']}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Email  </p></td>
                    <td class="tdVPN">:</td>
                    <td class="tdVPN"><p class="txtVPN">{{$data['user_email']}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Department  </p></td>
                    <td class="tdVPN">:</td>
                    <td class="tdVPN"><p class="txtVPN">{{$data['user_department']}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Manager  </p></td>
                    <td class="tdVPN">:</td>
                    <td class="tdVPN"><p class="txtVPN">{{$data['manager_name']}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Access List  </p></td>
                    <td class="tdVPN">:</td>
                    <td class="tdVPN">
                        @foreach($address as $addr)
                        <p class="txtVPN">{{$addr}} </p>
                        @endforeach     
                    </td>
                </tr>
                
            </table>
        </div>
        <div id="vpnAccess" class="VPN-Content">
            <div class="form-access">

            </div>
        </div>
        <div id="vpnPassword" class="VPN-Content">
            <h3 style="color: white">VPN PASSWORD</h3>
        </div>
    </div>
    <!-- <img src="{{asset('img/spiritBackground.png')}}" class="contentBackground">
 -->
 
@endsection

@section('js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/mikman.js')}}"></script>
<script src="{{asset('js/clientLoginDashboard.js')}}"></script>
@endsection