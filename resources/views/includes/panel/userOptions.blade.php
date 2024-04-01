<div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
    <div class="message-body">
      <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
        <i class="ti ti-user fs-6"></i>
        <p class="mb-0 fs-3">Mi perfil</p>
      </a>
      <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
        <i class="ti ti-mail fs-6"></i>
        <p class="mb-0 fs-3">Mi cuenta</p>
      </a>
      
      <a href="{{ route('logout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block"
      onclick="event.preventDefault(); document.getElementById('formLogout').submit();">Cerrar sesión</a>
      <form action="{{ route('logout')}}" method="POST" style="display: none;" id="formLogout">
        @csrf
      </form>
    </div>
  </div>