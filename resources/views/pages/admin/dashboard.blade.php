@extends('layouts.dashboard')

@section('title','Admin Dashboard')

@section('sidebar-title')
<a href="javascript:;" onclick="showInfo()" style="text-align: center">MIKROTIK VPN MANAGEMENT</a>
@endsection

@section('sidebar-header-img')
<img class="img-responsive img-rounded" src="{{asset('img/user.jpg')}}">
@endsection

@section('sidebar-header-user')
<strong>Admin</strong>
@endsection

@section('sidebar-header-role')
    <strong>Role: </strong><br>Network Admin
@endsection

@section('sidebar-search')
<div class="input-group">
    <input type="text" class="form-control search-menu" onkeydown="searchExtension(event.keyCode)" placeholder="VPN user, VPN name, VPN department..." >
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
                <span class="menu-text" style="padding:10px 0 10px 10px;">Add Account</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info active" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="show-request" onclick="showRequest(this)">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Edit Account</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="sidebar-dropdown info active" style="padding: 0px;border-top: 1px solid #ffffff;">
            <a href="#" id="show-request" onclick="showRequest(this)">
                <span class="menu-text" style="padding:10px 0 10px 10px;">Delete Account</span>
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

<script type="text/javascript">
$('.default-theme .sidebar-wrapper').css('background-color','#9e3fbe');
// Mengambil Data pada setip baris di tombol create/add
//  $(".getRow").click(function(){
//     var $row = $(this).closest("tr");
//     var $tickNum = $row.find(".tickNum").text();
//     var $uName = $row.find(".uName").text();
//     var $eMail = $row.find(".eMail").text();
//     var $div = $row.find(".div").text();
//     var $stat = $row.find(".stat").text();
//     var $ip = $row.find(".ip").text();
//     $.ajax({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },    
//         url: 'createVPN',
//         type: "post",
//         data: {
//             tickNum : $tickNum,
//             uName : $uName,
//             eMail : $eMail,
//             div : $div,
//             stat : $stat,
//             ip : $ip
//             // test : "ini datanya"
//         },
//             success: function(response){ // What to do if we succeed
//             if(data != null){
//                 alert("data ada");
//             }
//             // alert(response); 
//             // alert(data);
//             },
//         function(data, status){
//             alert('value stored');
//         }
//     // var $text = $row.find(".tickNum,.uName,.eMail,.div,.stat,.ip").text();
//     // alert($text);

//     });
// });
</script>
@endsection