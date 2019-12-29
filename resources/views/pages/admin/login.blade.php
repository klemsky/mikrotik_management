@extends('layouts.dmd')

@section('title','Login MikroTik VPN Management')

@section('content')
<dl id="mode_password" style="display: block;">
    <span class="alert is-error login_box_msg" style="display: none; width: 100%;">
        <dd style="font-size: 0.8em"></dd>
    </span>
</dl>
<dl id="mode_logout" style="display: none;">
    <span class="alert is-warning login_box_msg" style="display: none; width: 100%; height: auto;">
        <dd style="font-size: 0.8em; line-height: 22px;"></dd>
    </span>
</dl>
<form method="POST" action="/submitLogin" enctype="multipart/form-data" autocomplete="off">
    {{csrf_field()}}
    <label>Login MikroTik</label>
    <p>
        <span class="custom-textbox">
            <span class="custom-textbox">
                <span class="icon-wrap">
                    <i class="icon icon-user"></i>
                </span>
                <input type="text" id="address" placeholder="Address" class="input-form" name="address">
            </span>
        </span>
    </p>
    <p>
        <span class="custom-textbox">
            <span class="custom-textbox">
                <span class="icon-wrap">
                    <i class="icon icon-user"></i>
                </span>
                <input type="text" id="user" placeholder="Username" class="input-form" name="user">
            </span>
        </span>
    </p>
    <p>
        <span class="custom-textbox">
            <span class="icon-wrap">
                <i class="icon icon-pass"></i>
            </span>
            <input type="password" id="password" placeholder="Password" class="input-form" name="password">
        </span>
    </p>
    <br>
    <p>
        <input type="submit" id="password_submitBtn" value="Submit" class="button button-primary wide">
    </p>
</form>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        @if(Session::has('error'))
        Swal.fire({
            type: 'error',
            text: '{{Session::get('error')}}',
            confirmButtonColor: '#762F8D',
        });
        @endif
    });
</script>
@endsection