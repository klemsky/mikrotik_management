@extends('layouts.dmd')

@section('title','BINUS | Login VPN')

@section('content')
@if(isset($ticket))
Ticket No. : &nbsp;<strong>{{$ticket}}</strong>
@endif

<form class="custom-form" id="form-login-bns" method="POST" action="/register" enctype="multipart/form-data" autocomplete="on">
    {{csrf_field()}}
    <label>Login with Your Email Account</label>
    <p>
        <span class="responsive">
            <span class="custom-textbox">
                <span class="icon-wrap">
                    <i class="icon icon-user"></i>
                </span>
                <input type="text" id="password_name" placeholder="Username" class="input-form" name="password_name">
            </span>
            <span class="combobox-new disabled">
                <select id="dropdown-mail" disabled>
                    <option value="edu">@binus.edu</option>
                </select>
            </span>
        </span>
    </p>
    <p>
        <span class="custom-textbox">
            <span class="icon-wrap">
                <i class="icon icon-pass"></i>
            </span>
            <input type="password" id="password_pwd" placeholder="Password" class="input-form" name="password_pwd">
        </span>
    </p>
    <p>
        @if(isset($ticket))
        <input type="hidden" id="ticket_number" value={{$ticket}} name="ticket">
        @endif
        <input type="submit" id="password_submitBtn" value="Login" class="button button-primary wide">
    </p>
</form>
@endsection

@section('footer')
<!-- <div class="usefull-links">
    <a href="#" class="link-item" id="htloginButton">How to Login</a>
    <a href="#" class="link-item" id="cpassButton">Change Password</a>
    <a class="link-item">Copyright ©2019 BINA NUSANTARA. All rights reserved</a>
</div>
<div id="htloginModal" class="custom-modal" style="display: none;">
    <div class="single-content custom-modal-content">
        <span class="custom-modal-close">×</span>
        <br>
        <h1 class="heading"></h1>
        <ol></ol>
    </div>
</div> -->
@endsection

@section('js')
<script type="text/javascript" src="{{asset('js/mikman.js')}}"></script>
@if(isset($error))
<script>
showError('{{$error}}');
</script>
@endif
@if($errors->any())
<script>
showError('{{$errors->first()}}');
</script>
@endif
@endsection