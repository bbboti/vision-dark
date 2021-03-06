<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VISION | </title>
    <link rel="stylesheet"  href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet"  href="{{ asset('css/font-awesome.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link rel="stylesheet"  href="{{ asset('css/style.default.premium.css') }}" >
    <link rel="stylesheet"  href="{{ asset('css/style.violet.premium.css') }}" >
    <link rel="stylesheet"  href="{{ asset('css/custom.css') }}" >
     <!-- Favicon-->
     <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-4-4/img/favicon.ico">
    
</head>
<body>
  <div id="app">
    <header class="header">   
        <nav class="navbar navbar-expand-lg">
          <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
              <div class="close-btn">Close <i class="fa fa-close"></i></div>
              <form id="searchForm" action="#">
                <div class="form-group">
                  <input type="search" name="search" placeholder="What are you searching for...">
                  <button type="submit" class="submit">Search</button>
                </div>
              </form>
            </div>
          </div>
          <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
              <!-- Navbar Header--><a href="index.html" class="navbar-brand">
                <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">VIS</strong><strong>ION</strong></div>
                <div class="brand-text brand-sm"><strong class="text-primary">V</strong><strong>S</strong><strong>N</strong></div></a>
              <!-- Sidebar Toggle Btn-->
              <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>
            <div class="right-menu list-inline no-margin-bottom">    
              <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
              <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                      <div class="status online"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                      <div class="status away"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                      <div class="status busy"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                      <div class="status offline"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
              </div>
              <!-- Tasks-->
              <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
                <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                    </div></a><a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                    </div></a><a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                    </div></a><a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                    </div></a><a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                    </div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
                </div>
              </div>
              <!-- Tasks end-->
              <!-- Megamenu-->

              <!-- Megamenu end     -->
              <!-- Languages dropdown    -->
              <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="http://127.0.0.1:8000/img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="#" class="dropdown-item"> <img src="http://127.0.0.1:8000/img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a><a rel="nofollow" href="#" class="dropdown-item"> <img src="http://127.0.0.1:8000/img/flags/16/FR.png" alt="English" class="mr-2"><span>French  </span></a></div>
              </div>
              <!-- Log out               -->
              <div class="list-inline-item logout"><a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a></div>
            </div>
          </div>
        </nav>
      </header>
      <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center"><a href="pages-profile.html">
              <div class="avatar"><img src="http://127.0.0.1:8000/img/user.png" alt="..." class="img-fluid rounded-circle"></div></a>
            <div class="title">
              <h1 class="h5">Juan Ignacio Sarno</h1>
              <p>Productor</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                  <li class=""><router-link to="/"> <i class="fa fa-home"></i>Home</router-link></li>
                  <li class=""><router-link to="/polizas/automotor"> <i class="fa fa-car"></i>Automotor</router-link></li>
                  <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Otros Riesgos</a>
                    <ul id="chartsDropdown" class="collapse list-unstyled ">
                      <li><a href=''>Accidente Personal</a></li>
                      <li><a href=''>Combinado Familiar</a></li>
                      <li><a href=''>Otros Riesgos</a></li>
                    </ul>
                  </li>
                  <li class=""><a> <i class="fas fa-car-crash"></i>Siniestros</a></li>
                  <li class=""><a> <i class="fas fa-folder-open"></i>Endosos</a></li>
                  <li class=""><router-link to="/clientes"> <i class="fa fa-users"></i>Clientes</router-link></li>
                  <li><a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-th"></i>Administracion</a>
                    <ul id="componentsDropdown" class="collapse list-unstyled borde-violeta">
                      <li><router-link to="/administracion/companias">Compañias</router-link></li>
                      <li><router-link to="/administracion/organizadores">Organizadores</router-link></li>
                      <li><router-link to="/administracion/productores">Productores</router-link></li>
                      <li><a href="">Libros Rubricados</a></li>
                      <li><a href="">Estadisticas</a></li>
                      <li><a href="">Marca / Modelos</a></li>
                    </ul>
                  </li>
                  <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-wrench"></i>Configuracion</a>
                    <ul id="pagesDropdown" class="collapse list-unstyled ">
                      <li><a href="pages-contacts.html">Usuarios</a></li>
                    </ul>
                  </li>
          </ul>
        </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
          
                <router-view></router-view>
              {{-- <h2 class="h5 no-margin-bottom">Dashboard</h2> --}}
            
          <div>            
          </div>
          {{-- <footer class="footer">
            <div class="footer__block block no-margin-bottom">
              <div class="container-fluid text-center">
                <p class="no-margin-bottom">2018 &copy; Vision. </p>
              </div>
            </div>
          </footer> --}}
        </div>
      </div>
  </div>
<script src="{{mix('js/app.js')}}"></script>
{{-- <script src="{{mix('../../js/gsdk-bootstrap-wizard.js')}}"></script> --}}
{{-- <script src="{{mix('../../js/jquery.bootstrap.wizard.js')}}"></script> --}}
</body>

</html>
