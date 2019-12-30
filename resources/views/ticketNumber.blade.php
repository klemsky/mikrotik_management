<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta id="css-theme" content="edu">
    <title>Register VPN Ticket Number</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/icon.png')}}" />

    <!-- load stylesheet -->
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/main_new.css">
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/style-edu.css">
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/login-edu.css">
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/custom.css">
</head>

<body cz-shortcut-listen="true">
<div id="page" class="site">
    <div class="overlay">
        <div class="user-form">
            <div class="user-form-container">
                <div class="user-form-content">
                    <header class="header">
                        <span class="ribbon"></span>
                        <div class="logo" >
                            <a class="site-name">
                                <img src="img/binus-logo-lg.png" alt="Logo" style="height: 80px;width: auto;">
                            </a>
                            <span class="site-description">People Innovation Excellence</span>
                        </div>
                    </header>
                    <section class="main-form">
                        <form onsubmit="showLink(); return false;">
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
                            <div id="link-ticket"></div>
                            <p>
                                <span class="custom-textbox">
                                    <span class="custom-textbox">
                                        <span class="icon-wrap">
                                            <i class="icon icon-user"></i>
                                        </span>
                                        <input type="email" id="email" placeholder="User Email" class="input-form" name="userEmail">
                                    </span>
                                </span>
                            </p>
                            <p>
                                <input type="submit" id="ticket_submitBtn" value="Login" class="button button-primary wide">
                            </p>
                        </form>
                    </section>
                    <footer class="footer">
                        <div class="usefull-links" align="center">
                            <span style="font-size: 12px;">Copyright ©2019 BINA NUSANTARA. All rights reserved</span>
                        </div>
                    </footer>
                    <div id="sms_getCodeBtn" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<iframe scrolling="no" frameborder="0" style="z-index: 2147483647; border: 0px; position: absolute; height: 70px; width: 185px; left: 157px; top: 434px; display: none;" __idm_frm__="481"></iframe>
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

    var urlGenerate = "{{ action('ClientController@generateLink') }}";
</script>


</body></html>
<script type="text/javascript" src="{{asset('js/mikman.js')}}"></script>
