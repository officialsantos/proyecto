<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Patagonia Viajes</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express (se reemplazao el viejo)-->
    <script src="https://www.paypal.com/sdk/js?client-id=Adq3MV0Gs9G0y3-i8P1_aiivBE9O_hGhsLkwRH-tmuCUN8WPdjs0B0_zCGgEJMOt1pZlPrNY1pUaFo6g&intent=authorize&currency=USD"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=Adq3MV0Gs9G0y3-i8P1_aiivBE9O_hGhsLkwRH-tmuCUN8WPdjs0B0_zCGgEJMOt1pZlPrNY1pUaFo6g&currency=USD"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  	<!-- Custom CSS -->
    <style type="text/css">
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px){ 
      #navbar-search-input{ 
        width: 60px; 
      }
      #navbar-search-input:focus{ 
        width: 100px; 
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px){ 
      #navbar-search-input{ 
        border-radius: 2rem;
        width: 150px; 
      }
      #navbar-search-input:focus{ 
        width: 250px; 
      } 
    }
    
    #searchButton {
      margin-left:1rem;
      border-radius: 2.5rem;
    }

    .navbar-collapse

    .navbar-brand {
      background-color:red !important;
      color:red !important;
    }

    .navbar-nav {
      border-radius: 2.5rem;
    }

    .word-wrap{
      overflow-wrap: break-word;
    }
    .prod-body{
      height:300px;
    }

    .box:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .register-box{
      margin-top:20px;
    }

    #trending{
      list-style: none;
      padding:10px 5px 10px 15px;
    }
    #trending li {
      padding-left: 1.3em;
    }
    #trending li:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      margin-left: -1.3em; 
      width: 1.3em;
    }

    /*Magnify*/
    .magnify > .magnify-lens {
      width: 100px;
      height: 100px;
    }

    .main-footer {
      border-top: none !important;
      color: #007ec7ff !important;
      background-image:linear-gradient(to top, #0b1216ff, #01659eff 250%);
    }

    .navbarBtn {
      color: #8dd5ffff;
    }

    .navbarBtn:hover {
      background-color: #002e49ff !important;
      color: #007ec7ff !important;
    }

    .navbarDrop:hover {
      background-color: #007ec7ff !important;
    }

    .main-header {
      background-image:linear-gradient(to top, #0b1216ff, #01659eff 250%);
    }

    .nav {
      margin: 0.5rem;
    }

    .content-wrapper {
      background-image:linear-gradient(to bottom right, #1c2f3aff , #024268ff , #272057ff 80%);
    }

    .box-header {
      color: #8dd5ffff;
      background-image:linear-gradient(to top, #0b1216ff, #01659eff 250%);
    }

    .box-body {
      color: #8dd5ffff;
      background-image:linear-gradient(to top, #0b1216ff, #01659eff 250%);
    }

    </style>

</head>