

<ul id="sidebarnav">
    <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">USUARIO</span>
      </li>

  
    <li class="sidebar-item">
      <a class="sidebar-link" href="./index.html" aria-expanded="false">
        <span>
          <i class="ti ti-layout-dashboard"></i>
        </span>
        <span class="hide-menu">Datos personales</span>
      </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="./index.html" aria-expanded="false">
          <span>
            <i class="ti ti-mood-happy"></i>
          </span>
          <span class="hide-menu">Gestiòn usuario</span>
        </a>
      </li>
    <li class="nav-small-cap">
      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
      <span class="hide-menu">VENTAS</span>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
        <span>
          <i class="ti ti-file-description"></i>
        </span>
        <span class="hide-menu">Listar ventas</span>
      </a>
    </li>
    
    
    <li class="nav-small-cap">
      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
      <span class="hide-menu">ALMACEN</span>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
        <span>
          <i class="ti ti-package"></i>
        </span>
        <span class="hide-menu">Gestión de producto</span>
      </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
          <span>
            <i class="ti ti-thumb-up"></i>
          </span>
          <span class="hide-menu">Gestión de laboratorio</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
          <span>
            <i class="ti ti-archive"></i>
          </span>
          <span class="hide-menu">Gestión lote</span>
        </a>
      </li>
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Compras</span>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
          <span>
            <i class="ti ti-truck"></i>
          </span>
          <span class="hide-menu">Gestión proveedor</span>
        </a>
      </li>
    
    <li class="nav-small-cap">
      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
      <span class="hide-menu">EXTRA</span>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('logout')}}" aria-expanded="false"
          onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
        >
        <span>
            <i class="ti ti-logout"></i>
          </span>
          <span class="hide-menu">Cerrar sesión</span>
        </a>
        <form action="{{ route('logout')}}" method="POST" style="display: none;" id="formLogout">
          @csrf
        </form>
      </li>
  </ul>