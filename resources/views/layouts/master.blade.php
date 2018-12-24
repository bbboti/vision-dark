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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    
    <!-- theme stylesheetPUEDE SER ESTE-->
    {{-- <link rel="stylesheet" href="./css/app.css"> --}}
    <link rel="stylesheet" href="/css/app.css">

    {{-- <link rel="stylesheet" href="/../../resources/dark-pack/css/style.default.premium.css">
    <link rel="stylesheet" href="/../../resources/dark-pack/css/style.violet.premium.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     {{-- <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-4-4/css/style.default.premium.css" id="theme-stylesheet">
     <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-4-4/css/style.violet.premium.css" id="theme-stylesheet">
      --}}
     <!-- Favicon-->
     <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-4-4/img/favicon.ico">
    
</head>
<body>
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
                    <div class="profile"><img src="http://127.0.0.1:8000/img/avatar-3.jpg" alt="..." class="img-fluid">
                      <div class="status online"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="http://127.0.0.1:8000/img/avatar-2.jpg" alt="..." class="img-fluid">
                      <div class="status away"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="http://127.0.0.1:8000/img/avatar-1.jpg" alt="..." class="img-fluid">
                      <div class="status busy"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="http://127.0.0.1:8000/img/avatar-5.jpg" alt="..." class="img-fluid">
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
              <div class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu megamenu">
                  <div class="row">
                    <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                      <ul class="list-unstyled mb-3">
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Sed ut perspiciatis</a></li>
                        <li><a href="#">Voluptatum deleniti</a></li>
                        <li><a href="#">At vero eos</a></li>
                        <li><a href="#">Consectetur adipiscing</a></li>
                        <li><a href="#">Duis aute irure</a></li>
                        <li><a href="#">Necessitatibus saepe</a></li>
                        <li><a href="#">Maiores alias</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                      <ul class="list-unstyled mb-3">
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Sed ut perspiciatis</a></li>
                        <li><a href="#">Voluptatum deleniti</a></li>
                        <li><a href="#">At vero eos</a></li>
                        <li><a href="#">Consectetur adipiscing</a></li>
                        <li><a href="#">Duis aute irure</a></li>
                        <li><a href="#">Necessitatibus saepe</a></li>
                        <li><a href="#">Maiores alias</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                      <ul class="list-unstyled mb-3">
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Sed ut perspiciatis</a></li>
                        <li><a href="#">Voluptatum deleniti</a></li>
                        <li><a href="#">At vero eos</a></li>
                        <li><a href="#">Consectetur adipiscing</a></li>
                        <li><a href="#">Duis aute irure</a></li>
                        <li><a href="#">Necessitatibus saepe</a></li>
                        <li><a href="#">Maiores alias</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                      <ul class="list-unstyled mb-3">
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Sed ut perspiciatis</a></li>
                        <li><a href="#">Voluptatum deleniti</a></li>
                        <li><a href="#">At vero eos</a></li>
                        <li><a href="#">Consectetur adipiscing</a></li>
                        <li><a href="#">Duis aute irure</a></li>
                        <li><a href="#">Necessitatibus saepe</a></li>
                        <li><a href="#">Maiores alias</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row megamenu-buttons text-center">
                    <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>
                    <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>
                    <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>
                    <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>
                    <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>
                    <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>
                  </div>
                </div>
              </div>
              <!-- Megamenu end     -->
              <!-- Languages dropdown    -->
              <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="http://127.0.0.1:8000/img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="#" class="dropdown-item"> <img src="http://127.0.0.1:8000/img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a><a rel="nofollow" href="#" class="dropdown-item"> <img src="http://127.0.0.1:8000/img/flags/16/FR.png" alt="English" class="mr-2"><span>French  </span></a></div>
              </div>
              <!-- Log out               -->
              <div class="list-inline-item logout">                   <a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a></div>
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
                  <li class="active"><a href="/"> <i class="icon-home"></i>Home</a></li>
                  <li class="active"><a to="/polizas/automotor"> <i class="fa fa-car"></i>Automotor</a></li>
                  <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Otros Riesgos</a>
                    <ul id="chartsDropdown" class="collapse list-unstyled ">
                      <li><a href=''>Accidente Personal</a></li>
                      <li><a href=''>Combinado Familiar</a></li>
                      <li><a href=''>Otros Riesgos</a></li>
                    </ul>
                  </li>
                  <li class="active"><a> <i class="fas fa-car-crash"></i>Siniestros</a></li>
                  <li class=""><a> <i class="fas fa-folder-open"></i>Endosos</a></li>
                  <li class=""><a to="/clientes"> <i class="fa fa-users"></i>Clientes</a></li>
                  <li><a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-th"></i>Administracion</a>
                    <ul id="componentsDropdown" class="collapse list-unstyled ">
                      <li><a to="/administracion/companias">Compañias</a></li>
                      <li><a to="/administracion/organizadores">Organizadores</a></li>
                      <li><a to="/administracion/productores">Productores</a></li>
                      <li><a href="">Libros Rubricados</a></li>
                      <li><a href="">Estadisticas</a></li>
                      <li><a href="">Marca / Modelos Autos</a></li>
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
          {{-- <div class="page-header">
            <div class="container-fluid">
              <h2 class="h5 no-margin-bottom">Dashboard</h2>
            </div>
          </div> --}}
          <div id="app">
          {{-- ACA VA EL CONTENIDO --}}
            <router-view></router-view>
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
<script src="{{mix('js/app.js')}}"></script>
</body>

</html>
