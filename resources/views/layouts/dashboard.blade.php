<!DOCTYPE html>
<html>
    <head>
    @yield('html-header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
	<title>BINUS | @yield('title')</title>
    {{--Custom Button--}}
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar-themes.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('binus-bootstrap/css/themes/edu/css/style.css')}}"> -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/icon.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.css')}}">
 
    {{--Swall Fire--}}
    {{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>--}}
    <script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>
    
    <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('binus-bootstrap/js/plugins/accordion-toggle.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.js')}}"></script>
    @yield('css')
</head>

<body>
    <div class="page-wrapper default-theme bg1 toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand" style="margin: 20px">
                    <img src="{{asset('img/binus_it.png')}}" width="200px">
                </div>
                <div class="sidebar-item sidebar-brand" style="font-size: 14px;">
                    @yield('sidebar-title')
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-item sidebar-header d-flex flex-nowrap" style="align-content: center;text-align: center">
                    <div class="user-pic">
                        @yield('sidebar-header-img')
                    </div>
                    <div class="user-info">
                        <span class="user-name">Hello,
                            @yield('sidebar-header-user')
                        </span>
                        <span class="user-role">
                            @yield('sidebar-header-role')
                        </span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                        <span style="margin-top: 10px">
                            <a href="/logout">
                                <button class="btn btn-danger">Logout</button>
                            </a>
                        </span>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-item sidebar-search">
                    @yield('sidebar-search')
                </div>
                <!-- sidebar-menu  -->
                @yield('sidebar-item')
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-footer  -->
        </nav>

        <!-- page-content  -->
        <main class="page-content pt-2">
            <div id="toggle-sidebar"><img id="arrowImg" src="{{asset('img/prev.png')}}"></div>
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-0 image">
                @yield('dashboard-image')
            </div>
            @yield('content')
        </main>
        <!-- page-content" -->

        <div class="modal fade bd-example-modal-lg" id="modal-action" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div id="modal-dialog-detail" class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div id="modal-header" class="modal-header"></div>
                    <div id="modal-body" class="modal-body"></div>
                    <div id="modal-footer" class="modal-footer"></div>
                </div>
            </div>
        </div>
        @yield('modal')

    </div>
    <!-- page-wrapper -->
    
    @yield('js')
</body>
</html>