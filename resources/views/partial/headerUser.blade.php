<div class="d-flex justify-content-between mx-3">
  <a href="/">
    <img style="width: 191px; height: 55px; margin-left:10px;" src="img/logo.png" alt="logoPolbap">
  </a>

  @can('admin')
   <a href="/inputJurnal">
    <img style="width: 259px; height: 55px; margin-left:10px;" src="img/btn_tambah.png" alt="logoPolbap">
  </a>
  @endcan
  <ul class="navbar-nav ms-auto">
  @auth
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Welcome back, {{ auth()->user()->name }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <div class="dropdown-divider"></div>
      
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="drowpdown-item"><i class="bi-bi-box-arrow-right"></i>Logout</button>
      </form>
    </div>
  </li>

  @else    
  <li class="nav-item">
  <a type="button" class="btn btn-outline-primary align-self-center " style="width: 110px; height:36px ;" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
  </li>
  @endauth
  </ul>
</div>

