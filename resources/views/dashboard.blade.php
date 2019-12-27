<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
	<!-- <div class="wrapper"> -->

    <!-- Sidebar -->

    <nav class="sidebar">
    		
        
        <ul>
        	<div class="logoMenu">
        		<!-- <a>  -->
        			<img src="http://www.binus.edu/wp-content/uploads/2016/11/logoBINUS.png">
        		<!-- </a> -->
        	</div>
            <li>
                <a href="#">
                	<img src="https://spng.pngfly.com/20180330/qwq/kisspng-car-computer-icons-speedometer-dashboard-gauge-performance-5abdc9d77b70f3.0369194815223874155056.jpg">
                	<span class="nav-text">Dashboard 1</span>
                </a>
            </li>
            <li>
                <a href="#">
                	<img src="https://spng.pngfly.com/20180330/qwq/kisspng-car-computer-icons-speedometer-dashboard-gauge-performance-5abdc9d77b70f3.0369194815223874155056.jpg">
                	<span class="nav-text">Dashboard 2</span>
                </a>
            </li>
            <li>
                <a href="#">
                	<img src="https://spng.pngfly.com/20180330/qwq/kisspng-car-computer-icons-speedometer-dashboard-gauge-performance-5abdc9d77b70f3.0369194815223874155056.jpg">
                	<span class="nav-text">Dashboard 3</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->

    <div class="body">
    	<div class="graphVPN">
    		GRAPH
    	</div>
    </div>

    
</div>       
</body>
<style type="text/css">
	
	/*  SIDE MENU  */
	
	/*.wrapper {
	    display: flex;
	    align-items: stretch;
	}*/

	.logoMenu img{
		background-color: white;
		width: 190px;
		height: 150px;
	}

	.sidebar {
		background-color: #212121;
	    width: 60px;
    	height: 100vh;
    	overflow: hidden;
    	position: fixed;
    	-webkit-transition:width .05s linear;
		transition:width .05s linear;
		-webkit-transform:translateZ(0) scale(1,1);
		z-index:1000;
	}

	.sidebar:hover,nav.sidebar.expanded{
		width:250px;
		height: 100vh;
		overflow:visible;	
		position: fixed;
	}

	.sidebar ul{
		/*padding-top: 100px;*/
		margin-left: 60px;
	}

	.sidebar li {
		display: block;
		margin-left: -60px;
		width: 250px;
/*		padding-top: 20px;
		padding-bottom: 20px;*/
	}

	.sidebar li>a{
		margin-left: 60px;
		position:relative;
		display:table;
		border-collapse:collapse;
		border-spacing:0;
		color:#999;
		font-family: arial;
		font-size: 16px;
		text-decoration:none;
		-webkit-transform:translateZ(0) scale(1,1);
		-webkit-transition:all .1s linear;
		transition:all .1s linear;
	}

	.sidebar li img{
		margin-left: -60px;
		width: 60px;
		height: 64px;
	}

	.sidebar li span{
		padding-left: 20px;
	}

	.main-menu .nav-text {
		position:relative;
		display:table-cell;
		vertical-align:middle;
		width:190px;
		font-family: 'Titillium Web', sans-serif;
	}

	.no-touch .scrollable.hover {
		overflow-y:hidden;
	}

	.no-touch .scrollable.hover:hover {
		overflow-y:auto;
		overflow:visible;
	}

	a:hover,a:focus{
		text-decoration: none;
	}

	nav {
	-webkit-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	-o-user-select:none;
	user-select:none;
	}

	nav ul,nav li {
	outline:0;
	margin:0;
	padding:0;
	}

	.sidebar li:hover>a, nav.sidebar li.active,{
		color:#fff;
		background-color:#5fa2db;
	}
	.sidebar li:hover{
		transition: all 2s ease;
		background-color: #505050;
	}

	/*	  BODY    */
	.body{
		margin-left: 60px;
		position: absolute;
		width: 500px;
		height: 2000px;
		background-color: blue;
	}
	
</style>

<script type="text/javascript">

</script>
</html>