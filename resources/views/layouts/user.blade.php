<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="UTF-8">
    <title>Smart Tax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
   <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;1,300&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <link href="{{url('css/adminstyle.min.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
<style>
    .sidebar-fixed .list-group .active{
        background: #181818;
    }
    .photo-edit{
        margin-top: -44px;
    width: 37px;
    height: 37px;
    background: #181818;
    border-radius: 50px;
    margin-left: 145px;
    position: absolute;
    }
    </style>

</head>
<body class="grey lighten-3">
    <!--Main Navigation-->
    <header>
      <!-- Navbar -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

          <!-- Brand -->
          <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
            <strong class="blue-text"></strong>
          </a>

          <!-- Collapse -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

              </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-3">
                    <a href="{{url('/')}}" class="nav-link">
                                  <i class="fa fa-home">
                                  </i>
                              </a>
                    </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown mr-5 pr-5">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('profile')}}">My Profile</a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
            </li>
            </ul>


          </div>

        </div>
      </nav>
      <!-- Navbar -->

      <!-- Sidebar -->
      <div class="sidebar-fixed position-fixed ">
            <div class="text-center m-auto py-2">

            <img src="{{asset('uploads/users/'.Auth::user()->profile_image)}}" width="150" height="150" alt="" class="rounded-circle">
            <a href="{{url('profile')}}" >

            <div class="photo-edit p-2" data-toggle="tooltip" title="Edit Image">
                    <i class="fa fa-edit text-white " style="font-size:15px;"></i>

            </div>
            </a>
                <h4 class="h4 p-0 m-0 h4-responsive text-font text-center pt-3">{{@Auth::user()->name}}</h4>
                <p class="text-font">{{@Auth::user()->email}}</p>
                <hr>



            </div>
        <div class="list-group list-group-flush">
        <a href="{{url('home')}}" class="list-group-item active waves-effect">
            <i class="fas fa-chart-pie mr-3"></i>Dashboard
          </a>
{{-- <!-- Basic dropdown -->
<a class=" dropdown-toggle list-group-item list-group-item-action waves-effect mt-2" type="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false"><i class="fa fa-user mr-3"></i>X Location</a>

<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Action</a>
  <a class="dropdown-item" href="#">Another action</a>
  <a class="dropdown-item" href="#">Something else here</a>
</div>
<!-- Basic dropdown --> --}}

          <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-table mr-3"></i>X Location</a>
          <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-map mr-3"></i>Y Location</a>
          <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-money-bill-alt mr-3"></i>Z Location</a>
        </div>

      </div>
      <!-- Sidebar -->

    </header>
    <!--Main Navigation-->
@yield('content')
 <!--Footer-->
 {{-- <footer class="page-footer text-center font-small mt-5" style="background:#181818;bottom:0px">


    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright:
      <a href="#" target="_blank"> smartTax </a>
    </div>
    <!--/.Copyright-->

  </footer> --}}
  <!--/.Footer-->

    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
    })</script>
</body>

</html>
