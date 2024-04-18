  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ CONFIG('app.name')}} | @yield('title', 'Panel')</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{asset('css/styles.min.css')}}" />
    
  </head>

  <body>
    
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
              <img src="{{asset('images/logos/dark-logo.svg')}}" width="180" alt="" />
            </a>

          
    
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            @include('includes.panel.menu')
            <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
              <div class="d-flex">
                <div class="unlimited-access-title me-3">
                  {{-- <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                  <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a> --}}
                </div>
                <div class="unlimited-access-img">
                  {{-- <img src="{{asset('images/backgrounds/rocket.png')}}" alt="" class="img-fluid"> --}}
                </div>
              </div>
            </div>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">

              <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                  
                </a>
              </li>

                {{-- <li class="sidebar-item">
                  <a class="sidebar-link" href="#" aria-expanded="false">
                    <span>
                      <i class="ti ti-package"></i>
                    </span>
                    <span class="hide-menu" text="dark">REALIZAR COMPRA</span>
                  </a>
                </li> --}}


                {{-- <div class="col text-right">
                  <div class="dropdown">
                      <button class="btn btn-sm btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-shopping-cart"></i> Carrito de compras
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <!-- Aquí puedes agregar los elementos de la lista desplegable -->
                          <a class="dropdown-item" href="#">Elemento 1</a>
                          <a class="dropdown-item" href="#">Elemento 2</a>
                          <a class="dropdown-item" href="#">Elemento 3</a>
                          <!-- Puedes agregar más elementos según sea necesario -->
                      </div>
                  </div>
              </div> --}}

                <div class="col text-right ">
                  <a href="{{ url('/carrito')}}" class="btn btn-sm btn-warning" >
                    <i class="ti ti-shopping-cart"></i>
                    Carrito de compras</a>
                </div>
                <div class="col text-right mt-2"> <!-- Agrega un margen superior para separar los enlaces -->
                  <a href="{{ url('/catalogos')}}" class="btn btn-sm btn-primary">
                      <i class="ti ti-home"></i> <!-- Icono de inicio -->
                      Listar productos
                  </a>
              </div>


              {{-- <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
              </li> --}}
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
              <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                {{-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> --}}
                <li class="nav-item dropdown">
                  
                  <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{asset('images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                  <div class="media-body ml-2 d-none d-lg-block">
                    @auth
                    <span class="mb-0 text-sm  font-weigth-bold">{{ auth()->user()->name}}</span>
                    @endauth
                  </div>
                  </a>
                  
                  
                  
                  @include('includes.panel.userOptions')
                </li>
              </ul>
            </div>
          
          </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
          @yield('content')
          <!--  Row 1 -->
          
          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">2024 <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">Esoft {{config('app.name')}}</a> Distributed by <a href="https://themewagon.com">Perú</a></p>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('libs/simplebar/dist/simplebar.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script>
      $(document).ready(function() {
          $('.dropdown-toggle').dropdown();
      });
  </script>
  </body>

  </html>