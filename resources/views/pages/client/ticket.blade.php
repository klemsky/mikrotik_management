@extends('layouts.dmd')

@section('title','BINUS | Register VPN Ticket')

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
<form onsubmit="showLink(); return false;">
    {{csrf_field()}}
    <label>VPN Ticket Number</label>
    <p>
        <span class="custom-textbox">
            <span class="custom-textbox">
                <span class="icon-wrap">
                    <i class="icon icon-user"></i>
                </span>
                <input type="text" id="numberTicket" placeholder="Ticket Number" class="input-form" name="numberTicket">
            </span>
        </span>
    </p>
    <label>URL Generate</label>
    <p>
        <span class="custom-textbox">
            <span class="custom-textbox">
                <span class="icon-wrap">
                    <i class="icon icon-user"></i>
                </span>
                <input type="text" id="link" placeholder="URL" class="input-form" name="link">
            </span>
        </span>
    </p>
    <p>
        <input type="submit" id="ticket_submitBtn" value="Generate URL" class="button button-primary wide">
    </p>
</form>
@endsection

@section('js')
<script type="text/javascript" src="{{asset('js/mikman.js')}}"></script>
@if(isset($error))
<script>
showError('{{$error}}');
</script>
@endif
@endsection