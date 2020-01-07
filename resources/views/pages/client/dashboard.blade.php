<link rel="stylesheet" href="{{asset('css/client/clientDashboard.css')}}">

@extends('layouts.dashboard')
@section('title','Client Dashboard')

@section('sidebar-title')
<a href="javascript:;" onclick="showInfo()" style="text-align: center">VPN ACCOUNT</a>
@endsection

<!-- @section('sidebar-header-img')
@endsection -->
@section('sidebar-header-user')
    @if(isset($status))
    <strong>{{$data['user_name']}}</strong>
    @else
    <strong>{{$username}}</strong>
    @endif
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
            @if(isset($status))
            <h3 class="infoHeader"><strong> VPN INFO</strong></h3>
            <table class="tableVPN">
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">VPN Name  </p></td>
                    <td class="tdVPN"><p class="txtVPN">:</p></td>
                    <td class="tdVPN"><p class="txtVPN">{{$vpnUsername}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">VPN Status </p></td>
                    <td class="tdVPN"><p class="txtVPN">:</p></td>
                    
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Name  </p></td>
                    <td class="tdVPN"><p class="txtVPN">:</p></td>
                    <td class="tdVPN"><p class="txtVPN">{{$data['user_name']}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Email  </p></td>
                    <td class="tdVPN"><p class="txtVPN">:</p></td>
                    <td class="tdVPN"><p class="txtVPN">{{$data['user_email']}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Department  </p></td>
                    <td class="tdVPN"><p class="txtVPN">:</p></td>
                    <td class="tdVPN"><p class="txtVPN">{{$data['user_department']}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Manager  </p></td>
                    <td class="tdVPN"><p class="txtVPN">:</p></td>
                    <td class="tdVPN"><p class="txtVPN">{{$data['manager_name']}}</p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN" style="vertical-align: text-top"><p class="txtVPN" >Access List  </p></td>
                    <td class="tdVPN" style="vertical-align: text-top"><p class="txtVPN">:</p></td>
                    <td class="tdVPN">
                        @foreach($address as $addr)
                        <p class="txtVPN">{{$addr}} </p>
                        @endforeach     
                    </td>
                </tr>
            </table>
            @else
            <h3 class="infoHeader"><strong>VPN INFO</strong></h3>
            <table class="tableVPN">
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Ticket Number :  <strong>{{$ticket}}</strong></p></td>
                </tr>
                <tr  class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Status : <strong>Onhold</strong></p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Your VPN still waiting for approval from :</p></td>
                </tr>
                @if(isset($secHead))
                    <tr class="trVPN">
                        <td class="tdVPN"><p class="txtVPN">Section Head Requester: <strong>{{$secHead}}</strong><br>Email: <strong>{{$managerEmail}}</strong></p></td>
                    </tr>
                @endif
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Manager Requester: <strong>{{$managerName}}</strong><br>Email: <strong>{{$managerEmail}}</strong></p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">Section Head IT Infrastructure and Unified Communication: <strong>Budi Ariyanto</strong><br>Email: <strong>binus_ay@binus.edu</strong></p></td>
                </tr>
                <tr class="trVPN">
                    <td class="tdVPN"><p class="txtVPN">IT Infrastructure and Unified Communication Manager: <strong>Frantina Andri Widanto</strong><br>Email: <strong>sdp.dcmgr@binus.edu</strong></p></td>
                </tr><br><br>
                <tr class="trVPN">
                    <td class="tdVPN">
                    <p style="font-size: 14px;" class="txtVPN">*For More Information contact IT Helpdesk Ext.1201</p>
                    </td>
                </tr>
            </table>
            
            @endif
        </div>
        
        <div id="vpnAccess" class="VPN-Content">
            
            <div class="form-access">
            <form method="POST" action="/addAddr" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
                @if(isset($status))
                <h3 class="infoHeader"><strong>ADD ACCESS</strong></h3>
                <div class="ticketBox">
                    @if(isset($ticket))
                        Ticket No. : &nbsp;<strong>{{$ticket}}</strong>
                        <input type="hidden" id="ticket_number" value={{$ticket}} name="ticket">
                    @endif
                </div>
                <div class="custom-textbox">
                    <label>Full Name : &nbsp;<i class="icon-checklist"></i></label><br>
                    <input type="text" class="input-form" value="{{$data['user_name']}}" disabled style="background-color: white;">
                    <input type="hidden" value="{{$data['user_name']}}" name="user_name">
                    <input type="hidden" value="{{$data['manager_name']}}" name="manager_name">
                </div>
                <div class="custom-textbox">
                    <label>Email : &nbsp;<i class="icon-checklist"></i></label><br>
                    <input type="text" class="input-form" value="{{$data['user_email']}}" disabled style="background-color: white;">
                    <input type="hidden" value="{{$data['user_email']}}" name="user_email">
                    <input type="hidden" value="{{$data['manager_email']}}" name="manager_email">
                </div>
                <div class="custom-textbox">
                    <label>Department :&nbsp;<i class="icon-checklist"></i></label><br>
                    <input type="text" class="input-form" value="{{$data['user_department']}}" disabled style="background-color: white;">
                    <input type="hidden" value="{{$data['user_department']}}" name="user_department">
                </div>
                <!-- <div class="custom-radio">
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
                </div> -->
                <div class="custom-textbox">
                    <label>Address : &nbsp;<i class="icon-checklist"></i></label><br>
                    <div id="address-container" class="form-group">
                        <input type="text" class="input-form" name="txtAccess[1]" placeholder="IP Address 1" style="margin-bottom: 10px">
                        <input type="hidden" value="1" id="countAccessIP" name="accessIpCount">
                    </div>
                    
                </div>
                <div class="custom-textbox" style="text-align: center; margin-left: 0px;">
                    <div id="add-ip" class="formBtn">
                        <a class="addIpBtn" value="Add IP">Add IP</a>
                    </div>
                    <div id="remove-ip" class="formBtn">
                        <a class="removeIpBtn" value="Remove IP">Remove IP</a> 
                    </div><br>
                    <input type="submit" id="access_submitBtn" value="Submit" class="formBtn">
                </div>
                @else
                    <h3 class="infoHeader"><strong>ADD ACCESS</strong></h3>
                    <table class="tableVPN">
                        <tr class="trVPN" style="text-align: center">
                            <td class="tdVPN"><p class="txtVPN" style="font-size: 24px">*You can add access after your VPN created</p></td>
                        </tr>
                    </table>
                @endif
            </form>
            </div>
        </div>
        <div id="vpnPassword" class="VPN-Content">
            <div class="pwdVPN">
                <h3 style="color: white"><h3 class="infoHeader"><strong>CHANGE PASSWORD</strong></h3>
            </div>
            
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