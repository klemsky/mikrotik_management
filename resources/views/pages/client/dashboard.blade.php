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
            <h3 class="infoHeader">VPN INFO</h3>
            <table class="tableVPN">
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">VPN Name  </p></td>
                    <td class="tdVPN">:</td>
                    <td class="tdVPN"><p class="txtVPN">{{$vpnUsername}}</p></td>
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
            <div class="ticketBox">
                @if(isset($ticket))
                    Ticket No. : &nbsp;<strong>{{$ticket}}</strong>
                    <input type="hidden" id="ticket_number" value={{$ticket}} name="ticket">
                @endif
            </div>
            <div class="custom-textbox">
                <label>Full Name &nbsp;<i class="icon-checklist"></i></label><br>
                <input type="text" class="input-form" value="{{$data['user_name']}}" disabled style="background-color: white;">
                <input type="hidden" value="{{$data['user_name']}}" name="user_name">
                <input type="hidden" value="{{$data['manager_name']}}" name="manager_name">
            </div>
            <div class="custom-textbox">
                <label>Email &nbsp;<i class="icon-checklist"></i></label><br>
                <input type="text" class="input-form" value="{{$data['user_email']}}" disabled style="background-color: white;">
                <input type="hidden" value="{{$data['user_email']}}" name="user_email">
                <input type="hidden" value="{{$data['manager_email']}}" name="manager_email">
            </div>
            <div class="custom-textbox">
                <label>Department &nbsp;<i class="icon-checklist"></i></label><br>
                <input type="text" class="input-form" value="{{$data['user_department']}}" disabled style="background-color: white;">
                <input type="hidden" value="{{$data['user_department']}}" name="user_department">
            </div>
            <div class="custom-radio">
                    <label> Waktu : </label>
                    
                    <label for="rbPermanent" class="inputInlineBlock">
                    <input type="radio" class="inputInlineBlock" name="rbTime" class="input-form" value="permanent" id="rbPermanent" onclick="hideTime()">
                    Permanent
                    </label>
                    
                    <label for="rbTemporary" class="inputInlineBlock">
                    <input type="radio" class="inputInlineBlock" name="rbTime" class="input-form" value="TempDate" id="rbTemporary" onclick="showTime()">
                    Temporary
                    </label>
                <div id="input-date-container"></div>
            </div>
            <div class="custom-textbox">
                <div id="address-container" class="form-group">
                    <input type="text" class="input-form" name="txtAccess[1]" placeholder="IP Address 1" style="margin-bottom: 10px">
                    <input type="hidden" value="1" id="countAccessIP" name="accessIpCount">
                </div>
                <div id="add-ip" class="addBtnContainer column one-third">
                    <input type="button" class="addIpBtn" value="Add IP"/> 
                </div>
                <div id="remove-ip" class="removeBtnContainer column one-third">
                    <input type="button" class="removeIpBtn" value="Remove IP"/> 
                </div>
            </div>
                <input type="submit" id="access_submitBtn" value="Submit" class="button button-primary wide">
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