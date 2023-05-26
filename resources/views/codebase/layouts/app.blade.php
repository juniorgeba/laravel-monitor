<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Codebase</title>

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- Scripts original blade-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <!-- Page Container -->    
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header bg-primary-dark">
          <!-- User Avatar -->
          <a class="img-link me-2" href="be_pages_generic_profile.html">
            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar12.jpg" alt="">
          </a>
          <!-- END User Avatar -->

          <!-- User Info -->
          <a class="link-fx text-white fw-semibold fs-sm" href="be_pages_generic_profile.html">
            Admin
          </a>
          <!-- END User Info -->

          <!-- Close Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-danger ms-auto" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
          <!-- Mini Stats -->
          <div class="block pull-t pull-x">
            <div class="block-content block-content-full block-content-sm bg-body-light">
              <div class="row text-center">
                <div class="col-4">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                  <div class="fs-4">985</div>
                </div>
                <div class="col-4">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Tickets</div>
                  <div class="fs-4">251</div>
                </div>
                <div class="col-4">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Projects</div>
                  <div class="fs-4">39</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Mini Stats -->

          <!-- Search -->
          <div class="block pull-x">
            <div class="block-content block-content-full block-content-sm bg-body-light">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-fw fa-search"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- END Search -->

          <!-- Notifications -->
          <div class="block pull-x">
            <div class="block-header bg-body-light">
              <h3 class="block-title">Notifications</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <ul class="list list-activity mb-0">
                <li>
                  <i class="si si-wallet text-success"></i>
                  <div class="fs-sm fw-semibold">+$29 New sale</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Admin Template</a>
                  </div>
                  <div class="fs-xs text-muted">5 min ago</div>
                </li>
                <li>
                  <i class="si si-close text-danger"></i>
                  <div class="fs-sm fw-semibold">Project removed</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Best Icon Set</a>
                  </div>
                  <div class="fs-xs text-muted">26 min ago</div>
                </li>
                <li>
                  <i class="si si-pencil text-info"></i>
                  <div class="fs-sm fw-semibold">You edited the file</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">
                      <i class="fa fa-file-alt"></i> Docs.doc
                    </a>
                  </div>
                  <div class="fs-xs text-muted">3 hours ago</div>
                </li>
                <li>
                  <i class="si si-plus text-success"></i>
                  <div class="fs-sm fw-semibold">New user</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">StudioWeb - View Profile</a>
                  </div>
                  <div class="fs-xs text-muted">5 hours ago</div>
                </li>
                <li>
                  <i class="si si-wrench text-warning"></i>
                  <div class="fs-sm fw-semibold">App v5.5 is available</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Update now</a>
                  </div>
                  <div class="fs-xs text-muted">8 hours ago</div>
                </li>
                <li>
                  <i class="si si-user-follow text-pulse"></i>
                  <div class="fs-sm fw-semibold">+1 Friend Request</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Accept</a>
                  </div>
                  <div class="fs-xs text-muted">1 day ago</div>
                </li>
              </ul>
            </div>
          </div>
          <!-- END Notifications -->
        </div>
        <!-- END Side Content -->
      </aside>
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header justify-content-lg-center bg-black-10">
            <!-- Logo -->
            <div>
              <span class="smini-visible fw-bold tracking-wide fs-lg">
                c<span class="text-primary">b</span>
              </span>
              <a class="link-fx fw-bold tracking-wide mx-auto" href="{{ url('dashboard') }}">
                <span class="smini-hidden">
                  <i class="fa fa-fire text-primary"></i>
                  <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
                </span>
              </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-fw fa-times"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
              
              <ul class="nav-main">
                <li class="nav-main-item">
                  <a class="nav-main-link {{Request::is('dashboard') ? 'active' : ''}}" href="{{ url('dashboard') }}">
                    <i class="nav-main-link-icon fa fa-coffee"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                  </a>
                </li>
                <li class="nav-main-heading">Headquarters</li>
                <li class="nav-main-item {{Request::is('profile*') ? 'open' : ''}}">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="{{Request::is('profile*') ? 'true' : 'false'}}" href="#">
                    <i class="nav-main-link-icon fa fa-briefcase"></i>
                    <span class="nav-main-link-name">Projects</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link {{Request::is('profile') ? 'active' : ''}}" href="{{route('profile.edit')}}">
                        <span class="nav-main-link-name">Editar perfil</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="">
                        <span class="nav-main-link-name">Manage</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <i class="nav-main-link-icon fa fa-file-invoice-dollar"></i>
                    <span class="nav-main-link-name">Invoices</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <i class="nav-main-link-icon fa fa-users"></i>
                    <span class="nav-main-link-name">Clients</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <i class="nav-main-link-icon fa fa-wallet"></i>
                    <span class="nav-main-link-name">Payments</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <i class="nav-main-link-icon fa fa-layer-group"></i>
                    <span class="nav-main-link-name">Requests</span>
                  </a>
                </li>
                <li class="nav-main-heading">Settings</li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <i class="nav-main-link-icon fa fa-sticky-note"></i>
                    <span class="nav-main-link-name">Profile</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <i class="nav-main-link-icon fa fa-lock"></i>
                    <span class="nav-main-link-name">Security</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center space-x-2">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Full Search -->
            <form class="d-none d-sm-inline-block" action="db_classic.html" method="POST" onsubmit="return false;">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search..">
                <span class="input-group-text">
                  <i class="fa fa-search"></i>
                </span>
              </div>
            </form>
            <!-- END Full Search -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="space-x-1">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fw-semibold">{{ Auth::user()->name }}</span>
                <i class="fa fa-angle-down opacity-50 ms-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="{{ route('profile.edit')}}">
                    <span>Editar Perfil</span>
                    <i class="fa fa-fw fa-user opacity-25"></i>
                  </a>                 
                  <!-- END Side Overlay -->

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="{{ route('logout') }}">
                    <span>Sair</span>
                    <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
              <i class="fa fa-fw fa-list"></i>
            </button>
            <!-- END Toggle Side Overlay -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <!-- Close Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times"></i>
                </button>
                <!-- END Close Search Section -->
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                <button type="submit" class="btn btn-secondary">
                  <i class="fa fa-fw fa-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="far fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            @yield('content')
        </div>

        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-extra-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/95j" target="_blank">Codebase 5.1</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/codebase.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/chart.js/chart.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/db_classic.min.js"></script>
  </body>
</html>