 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="../assets/img/favicon.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>
     DashBoard
   </title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!--     Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- CSS Files -->
   <link href="{{ asset('back-end/assets/css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="{{ asset('back-end/assets/demo/demo.css" rel="stylesheet')}}" />
 </head>
 
 <body class="">
   <div class="wrapper ">
     <div class="sidebar" data-color="purple" data-background-color="orange" data-image="../assets/img/sidebar-1.jpg">
       <div class="logo">
         <a href="/manager" class="simple-text logo-normal">
           Pemesanan Shuttle Bus
         </a>
       </div>
      @include('layouts.sidebarmg')
     </div>
     <div class="main-panel">
       {{-- @include('navbar') --}}
       <!-- End Navbar -->
       <div class="content">
            @yield('content')
       </div>
     </div>
   </div>
   
   <!--   Core JS Files   -->
   <script src="{{asset('back-end/assets/js/core/jquery.min.js')}}"></script>
   <script src="{{asset('back-end/assets/js/core/popper.min.js')}}"></script>
   <script src="{{asset('back-end/assets/js/core/bootstrap-material-design.min.js')}}"></script>

 </body>
 
 </html>
 