<?php
  if(isset($_GET['token'])){
    $_SESSION['token'] = $_GET['token'];
  }

?>


<!doctype html>
<html lang="en">

  
<!-- Mirrored from dashkit.goodthemes.co/docs/getting-started.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:06:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.css" />
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css" />
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Theme CSS -->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>
      body {
        display: none;
      }

    </style>
    
    <!-- Title -->
    <title>Dashkit</title>

    
  </head>

  <body>
       

    <!-- NAVIGATION
    ================================================== -->
    
    
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md " id="sidebar">
      <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="../index.html">
          <img src="assets/img/sob/logo.png"class="navbar-brand-img 
          mx-auto" alt="..." width="400px" height="400px">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <img src="assets/img/sob/logo.png" class="avatar-img rounded-circle" alt="...">
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
              <a href="../profile-posts.html" class="dropdown-item">Profile</a>
              <a href="../settings.html" class="dropdown-item">Settings</a>
              <hr class="dropdown-divider">
              <a href="../sign-in.html" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </div>
          </form>

          <!-- Navigation -->
          <h6 class="navbar-heading">
            Menu principal
          </h6>

          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link " href="venta.php">
                <i class="fe fe-shopping-cart"></i> Ventas 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="bus.php">
                <i class="fe fe-truck"></i> Buses 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="cliente.php">
                <i class="fe fe-users"></i> Clientes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="viaje.php">
                <i class="fe fe-globe"></i> Viajes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ruta.php">
                <i class="fe fe-map"></i> Rutas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="socio.php">
                <i class="fe fe-users"></i> Socios
              </a>
            </li>
          </ul> 
          <!-- Divider -->
          <hr class="navbar-divider my-3">

          <!-- Heading -->
          <!-- <h6 class="navbar-heading">
            Documentation
          </h6> -->

          <!-- Navigation -->
          <!-- <ul class="navbar-nav mb-md-4">
            <li class="nav-item">
              <a class="nav-link " href="changelog.html">
                <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.5.1</span>
              </a>
            </li>
          </ul> -->

          <!-- Push content down -->
          <div class="mt-auto"></div>

          
          <!-- Customize
          <div id="popoverDemo" data-toggle="popover" data-trigger="manual" title="Make Dashkit Your Own!" data-content="Switch the demo to Dark Mode or adjust the navigation layout, icons, and colors!">
            <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
              <i class="fe fe-sliders mr-2"></i> Customize
            </a>
          </div> -->
          

          
          <!-- User (md) -->
          <div class="navbar-user d-none d-md-flex" id="sidebarUser">

            <!-- Icon -->
            <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Dropup -->
            <div class="dropup">

              <!-- Toggle -->
              <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="../assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                <a href="../profile-posts.html" class="dropdown-item">Profile</a>
                <a href="../settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="../sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

            <!-- Icon -->
            <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-search"></i>
              </span>
            </a>

          </div>
          

        </div> <!-- / .navbar-collapse -->

      </div>
    </nav>

    
    
    <nav class="navbar navbar-vertical navbar-vertical-sm fixed-left navbar-expand-md " id="sidebarSmall">
      <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="../index.html">
          <img src="../assets/img/logo.svg" class="navbar-brand-img 
          mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" id="sidebarSmallIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <img src="../assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarSmallIcon">
              <a href="../profile-posts.html" class="dropdown-item">Profile</a>
              <a href="../settings.html" class="dropdown-item">Settings</a>
              <hr class="dropdown-divider">
              <a href="../sign-in.html" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarSmallCollapse">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </div>
          </form>

          <!-- Divider -->
          <hr class="navbar-divider d-none d-md-block mt-0 mb-3">

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle " id="sidebarSmallDashboards" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Dashboards">
                <i class="fe fe-home"></i> <span class="d-md-none">Dashboards</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallDashboards">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Dashboards</h6>
                </li>
                <li>
                  <a href="../index.html" class="dropdown-item ">
                    Default
                  </a>
                </li>
                <li>
                  <a href="../dashboard-project-management.html" class="dropdown-item ">
                    Project Management
                  </a>
                </li>
                <li>
                  <a href="../dashboard-ecommerce.html" class="dropdown-item ">
                    E-Commerce
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle " id="sidebarSmallPages" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fe fe-file"></i> <span class="d-md-none">Pages</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallPages">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Pages</h6>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallProfile">
                    <a class="dropdown-item " href="../profile-posts.html">
                      Posts
                    </a>
                    <a class="dropdown-item " href="../profile-groups.html">
                      Groups
                    </a>
                    <a class="dropdown-item " href="../profile-projects.html">
                      Projects
                    </a>
                    <a class="dropdown-item " href="../profile-files.html">
                      Files
                    </a>
                    <a class="dropdown-item " href="../profile-subscribers.html">
                      Subscribers
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallProject">
                    <a class="dropdown-item " href="../project-overview.html">
                      Overview
                    </a>
                    <a class="dropdown-item " href="../project-files.html">
                      Files
                    </a>
                    <a class="dropdown-item " href="../project-reports.html">
                      Reports
                    </a>
                    <a class="dropdown-item " href="../project-new.html">
                      New project
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Team
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallTeam">
                    <a class="dropdown-item " href="../team-overview.html">
                      Overview
                    </a>
                    <a class="dropdown-item " href="../team-projects.html">
                      Projects
                    </a>
                    <a class="dropdown-item " href="../team-members.html">
                      Members
                    </a>
                    <a class="dropdown-item " href="../team-new.html">
                      New team
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Feed
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallFeed">
                    <a class="dropdown-item " href="../feed.html">
                      Platform
                    </a>
                    <a class="dropdown-item " href="../social-feed.html">
                      Social
                    </a>
                  </div>
                </li>
                <li>
                  <a class="dropdown-item " href="../wizard.html">
                    Wizard
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../kanban.html">
                    Kanban
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../orders.html">
                    Orders
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../settings.html">
                    Settings
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../invoice.html">
                    Invoice
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../pricing.html">
                    Pricing
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Widgets">
              <a class="nav-link " href="../widgets.html">
                <i class="fe fe-grid"></i> <span class="d-md-none">Widgets</span>
              </a>
            </li>
            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle" id="sidebarSmallAuth" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fe fe-user"></i> <span class="d-md-none">Auth</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallAuth">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Authentication</h6>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign in
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallSignIn">
                    <a class="dropdown-item" href="../sign-in-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="../sign-in-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="../sign-in-basics.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign up
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallSignUp">
                    <a class="dropdown-item" href="../sign-up-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="../sign-up-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="../sign-up.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Password reset
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallPassword">
                    <a class="dropdown-item" href="../password-reset-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="../password-reset-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="../password-reset.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Error
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallError">
                    <a class="dropdown-item" href="../error-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="../error.html">
                      Basic
                    </a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                <span class="fe fe-bell"></span> Notifications
              </a>
            </li>
          </ul>

          <!-- Divider -->
          <hr class="navbar-divider my-3">

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-4">
            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle active" id="sidebarSmallBasics" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Basics">
                <i class="fe fe-clipboard"></i> <span class="d-md-none">Basics</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallBasics">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Basics</h6>
                </li>
                <li>
                  <a href="getting-started.html" class="dropdown-item active">
                    Getting Started
                  </a>
                </li>
                <li>
                  <a href="design-file.html" class="dropdown-item ">
                    Design File
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="components.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Components">
                <i class="fe fe-book-open"></i> <span class="d-md-none">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="changelog.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Changelog">
                <i class="fe fe-git-branch"></i> <span class="d-md-none">Changelog</span> <span class="badge badge-primary ml-auto d-md-none">v1.5.1</span>
              </a>
            </li>
          </ul>

          <!-- Push content down -->
          <div class="mt-auto"></div>

          
          <!-- Customize -->
          <div class="mb-4" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Customize">
            <a href="#modalDemo" class="btn btn-block btn-primary" data-toggle="modal">
              <i class="fe fe-sliders"></i> <span class="d-md-none ml-2">Customize</span>
            </a>
          </div>
          

          
          <!-- User (md) -->
          <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">

            <!-- Icon -->
            <a href="#sidebarModalSearch" class="navbar-user-link mb-3" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-search"></i>
              </span>
            </a>

            <!-- Icon -->
            <a href="#sidebarModalActivity" class="navbar-user-link mb-3" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Dropup -->
            <div class="dropright">

              <!-- Toggle -->
              <a href="#" id="sidebarSmallIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="../assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu" aria-labelledby="sidebarSmallIconCopy">
                <a href="../profile-posts.html" class="dropdown-item">Profile</a>
                <a href="../settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="../sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>
          

        </div> <!-- / .navbar-collapse -->

      </div>
    </nav>

    
    
    
    <nav class="navbar navbar-expand-lg " id="topnav">
      <div class="container">

        <!-- Toggler -->
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand mr-auto" href="../index.html">
          <img src="../assets/img/logo.svg" alt="..." class="navbar-brand-img">
        </a>

        <!-- Form -->
        <form class="form-inline mr-4 d-none d-lg-flex">
          <div class="input-group input-group-rounded input-group-merge" data-toggle="lists" data-options='{"valueNames": ["name"]}'>

            <!-- Input -->
            <input type="search" class="form-control form-control-prepended  dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fe fe-search"></i>
              </div>
            </div>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-card">
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush list my-n3">
                  <a class="list-group-item" href="../team-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="../assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Airbnb
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="../team-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="../assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Medium Corporation
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="../project-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-4by3">
                          <img src="../assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Homepage Redesign
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="../project-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-4by3">
                          <img src="../assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Travels & Time
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="../project-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-4by3">
                          <img src="../assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Safari Exploration
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="../profile-posts.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Dianna Smiley
                        </h4>

                        <!-- Status -->
                        <p class="text-body small mb-0">
                          <span class="text-success">●</span> Online
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="../profile-posts.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Ab Hadley
                        </h4>

                        <!-- Status -->
                        <p class="text-body small mb-0">
                          <span class="text-danger">●</span> Offline
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                </div>

              </div>
            </div> <!-- / .dropdown-menu -->

          </div>
        </form>

        <!-- User -->
        <div class="navbar-user">

          <!-- Dropdown -->
          <div class="dropdown mr-4 d-none d-lg-flex">

            <!-- Toggle -->
            <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="icon active">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
              <div class="card-header">

                <!-- Title -->
                <h5 class="card-header-title">
                  Notifications
                </h5>

                <!-- Link -->
                <a href="#!" class="small">
                  View all
                </a>

              </div> <!-- / .card-header -->
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush list-group-activity my-n3">
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess, and 3 others.
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Ab Hadley</strong> reacted to your post with a 😍
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="../assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Adolfo Hess</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="../assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Daniela Dewitt</strong> subscribed to you.
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="../assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="../assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Ryu Duke</strong> reacted to your post with a 😍
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="../assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Glen Rouse</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="../assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Grace Gross</strong> subscribed to you.
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                </div>

              </div>
            </div> <!-- / .dropdown-menu -->

          </div>

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right">
              <a href="../profile-posts.html" class="dropdown-item">Profile</a>
              <a href="../settings.html" class="dropdown-item">Settings</a>
              <hr class="dropdown-divider">
              <a href="../sign-in.html" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
          </form>

          <!-- Navigation -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dashboards
              </a>
              <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
                <li>
                  <a class="dropdown-item " href="../index.html">
                    Default
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../dashboard-project-management.html">
                    Project Management
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../dashboard-ecommerce.html">
                    E-Commerce
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <ul class="dropdown-menu" aria-labelledby="topnavPages">
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavProfile">
                    <a class="dropdown-item " href="../profile-posts.html">
                      Posts
                    </a>
                    <a class="dropdown-item " href="../profile-groups.html">
                      Groups
                    </a>
                    <a class="dropdown-item " href="../profile-projects.html">
                      Projects
                    </a>
                    <a class="dropdown-item " href="../profile-files.html">
                      Files
                    </a>
                    <a class="dropdown-item " href="../profile-subscribers.html">
                      Subscribers
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavProject">
                    <a class="dropdown-item " href="../project-overview.html">
                      Overview
                    </a>
                    <a class="dropdown-item " href="../project-files.html">
                      Files
                    </a>
                    <a class="dropdown-item " href="../project-reports.html">
                      Reports
                    </a>
                    <a class="dropdown-item " href="../project-new.html">
                      New project
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Team
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavTeam">
                    <a class="dropdown-item " href="../team-overview.html">
                      Overview
                    </a>
                    <a class="dropdown-item " href="../team-projects.html">
                      Projects
                    </a>
                    <a class="dropdown-item " href="../team-members.html">
                      Members
                    </a>
                    <a class="dropdown-item " href="team-new.html">
                      New team
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Feed
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavFeed">
                    <a class="dropdown-item " href="../feed.html">
                      Platform
                    </a>
                    <a class="dropdown-item " href="../social-feed.html">
                      Social
                    </a>
                  </div>
                </li>
                <li>
                  <a class="dropdown-item " href="../wizard.html">
                    Wizard
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../kanban.html">
                    Kanban
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../orders.html">
                    Orders
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../settings.html">
                    Settings
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../invoice.html">
                    Invoice
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../pricing.html">
                    Pricing
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="../widgets.html">
                    Widgets
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Auth
              </a>
              <ul class="dropdown-menu" aria-labelledby="topnavAuth">
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign in
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavSignIn">
                    <a class="dropdown-item" href="../sign-in-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="../sign-in-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="../sign-in-basics.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign up
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavSignUp">
                    <a class="dropdown-item" href="../sign-up-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="../sign-up-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="../sign-up.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="topnavPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Password reset
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavPassword">
                    <a class="dropdown-item" href="../password-reset-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="../password-reset-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="../password-reset.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="topnavError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Error
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavError">
                    <a class="dropdown-item" href="../error-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="../error.html">
                      Basic
                    </a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="topnavDocumentation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Docs
              </a>
              <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavBasics" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Basics
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavBasics">
                    <a class="dropdown-item active" href="../getting-started.html">
                      Getting Started
                    </a>
                    <a class="dropdown-item " href="design-file.html">
                      Design File
                    </a>
                  </div>
                </li>
                <li>
                  <a class="dropdown-item " href="components.html">
                    Components
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="changelog.html">
                    Changelog
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#modalDemo" data-toggle="modal">
                Customize
              </a>
            </li>
          </ul>

        </div>

      </div> <!-- / .container -->
    </nav>

    

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content pb-6">

      
      <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
        <div class="container-fluid">

          <!-- Form -->
          <form class="form-inline mr-4 d-none d-md-flex">
            <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-options='{"valueNames": ["name"]}'>

              <!-- Input -->
              <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search" />

              <!-- Prepend -->
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fe fe-search"></i>
                </div>
              </div>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-card">
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list my-n3">
                    <a class="list-group-item" href="../team-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="../assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Airbnb
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="../team-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="../assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Medium Corporation
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="../project-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="../assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Homepage Redesign
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="../project-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="../assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Travels & Time
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="../project-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="../assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Safari Exploration
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="../profile-posts.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Dianna Smiley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0"><span class="text-success">●</span> Online</p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="../profile-posts.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Ab Hadley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0"><span class="text-danger">●</span> Offline</p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                  </div>
                </div>
              </div> <!-- / .dropdown-menu -->

            </div>
          </form>

          <!-- User -->
          <div class="navbar-user">

            <!-- Dropdown -->
            <div class="dropdown mr-4 d-none d-md-flex">

              <!-- Toggle -->
              <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon active">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                <div class="card-header">

                  <!-- Title -->
                  <h5 class="card-header-title">
                    Notifications
                  </h5>

                  <!-- Link -->
                  <a href="#!" class="small">
                    View all
                  </a>

                </div> <!-- / .card-header -->
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list-group-activity my-n3">
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess,
                            and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Ab Hadley</strong> reacted to your post with a 😍
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Adolfo Hess</strong> commented
                            <blockquote class="mb-0">
                              “I don’t think this really makes sense to do without approval from Johnathan
                              since he’s the one...”
                            </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small"><strong>Daniela Dewitt</strong> subscribed to you.</div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Ryu Duke</strong> reacted to your post with a 😍
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Glen Rouse</strong> commented
                            <blockquote class="mb-0">
                              “I don’t think this really makes sense to do without approval from Johnathan
                              since he’s the one...”
                            </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small"><strong>Grace Gross</strong> subscribed to you.</div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                  </div>
                </div>
              </div> <!-- / .dropdown-menu -->
            </div>

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle" />
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right">
                <a href="../profile-posts.html" class="dropdown-item">Profile</a>
                <a href="../settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider" />
                <a href="../sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

        </div>
      </nav>

      

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">


          </div>














        </div> <!-- / .row -->
      </div>

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
    <script src="assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/chart.js/Chart.extension.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/js/dashkit.min.js"></script>
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/js/dashkit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      const app = new Vue({
        el: "#app_home",
        data: {
          credentials: {
            username: "",
            password: "",
          },
        },
        methods: {
          test() {
            axios
              .post(
                "http://192.168.0.13:3000/api/auth/staff/signin",
                this.credentials
              )
              .then((resp) => {
                console.log("holaaaa", resp.data);
                // window.location.href = 'some url'
                 localStorage.setItem('token',resp.data.token);
                 localStorage.setItem('user',resp.data.username);
                 localStorage.setItem('role',resp.data.role);
                 location.href='./home.php';
                //location.href = `./home.php?token${resp.data.token}&user=${resp.data.username}&role=${resp.data.role}`;
              })
              .catch((e) => {
                console.log(e);
                location.href = "./login.php";
              });
          },
        },
        created() {
          if(localStorage.getItem("token") === null){
            location.href='./login.php';
          }
        },
      });
    </script>

  </body>


<!-- Mirrored from dashkit.goodthemes.co/docs/getting-started.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:06:19 GMT -->
</html>
