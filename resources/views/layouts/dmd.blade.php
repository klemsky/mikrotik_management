<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta id="css-theme" content="edu">
    <title>BINUS | @yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/icon.png')}}" />

    <!-- load stylesheet -->
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/main_new.css">
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/style-edu.css">
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/login-edu.css">
    <link rel="stylesheet" type="text/css" href="https://backaccess.apps.binus.edu/wifi/assets/css/custom.css"><script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('binus-bootstrap/js/plugins/accordion-toggle.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.js')}}"></script>
    @yield('css')
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
                                    <img src="{{asset('img/binus-logo-lg.png')}}" alt="Logo" style="height: 80px;width: auto;">
                                </a>
                                <span class="site-description">People Innovation Excellence</span>
                            </div>
                        </header>
                        <section class="main-form">
                            @yield('content')
                        </section>
                        <footer class="footer">
                            @yield('footer')
                            <div align="center">
                                <a style="font-size: 12px;" class="link-item">Copyright ©2020 BINA NUSANTARA. All rights reserved</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe scrolling="no" frameborder="0" style="z-index: 2147483647; border: 0px; position: absolute; height: 70px; width: 185px; left: 157px; top: 434px; display: none;" __idm_frm__="481"></iframe>
    @yield('js')
</body></html>
