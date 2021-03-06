<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/home/logo.png')}}" >

    <title>Product'Eure | L'Admin </title>

    <!-- Bootstrap -->
    <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('css/admin/nprogress.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/admin/custom.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/admin/admin-style.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md" >
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">


              <a href="{{ route('home') }}" class="site_title"><img src="{{ asset('img/home/logo.png')}}" width="60px"> <span>Product'Eure</span></a>

            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                {{-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> --}}
              </div>
              <div class="profile_info">
                <h2 style="font-size:16px;">Bonjour, {{Auth::user()->name}}</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu"  class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3 style="font-size:16px;"><a style="text-decoration:none;" href="{{ route('dashboard') }}">Panneau D'administration</a></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i> Utilisateurs <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin-list-producer')}}">Users</a></li>
                      <li><a href="{{route('admin-list-producer')}}">Producteurs</a></li>
                      <li><a href="{{route('admin-new-producer-view')}}">Ajouter un producteur</a></li>
                      {{-- <li><a href="index3.html">Dashboard3</a></li> --}}
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cutlery "></i> Produits <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin-list-category')}}">Catégories</a></li>
                      <li><a href="{{route('admin-new-category-view')}}">Nouvelle catégories</a></li>
                      <li><a href="{{route('admin-list-item')}}">Items</a></li>
                      <li><a href="{{route('admin-new-item-view')}}">Nouvel Item</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i> Lieux de ventes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin-list-retail')}}">Lieux de ventes</a></li>
                      <li><a href="{{route('admin-new-retail-view')}}">Ajouter un lieu de vente</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Articles <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin-list-article')}}">Articles</a></li>
                      <li><a href="{{route('admin-new-article-view')}}">Nouvel Article</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{Auth::user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i>
                                  Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                        </form>
                    </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                @endif
              @yield('content')

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">

          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('js/admin/jquery-1.9.1.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('js/admin/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('js/admin/nprogress.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('js/admin/custom.min.js')}}"></script>
    @yield('js')
  </body>
</html>
