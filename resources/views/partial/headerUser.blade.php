<div class="d-flex justify-content-between mx-3">
  <a href="/">
    <img style="width: 191px; height: 55px; margin-left:10px;" src="img/logo.png" alt="logoPolbap">
  </a>


  <ul class="navbar-nav ms-auto">
  @auth
  {{-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Welcome back, {{ auth()->user()->name }}
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="#"><i class="bi-bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
      <li><hr class="dropdown-divider"></li>
      <li>
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="drowpdown-item"><i class="bi-bi-box-arrow-right"></i>Logout</button>
      </form>
      
      </li>
    </ul>
  </li> --}}
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Welcome back, {{ auth()->user()->name }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#"><i class="bi-bi-layout-text-sidebar-reverse"></i>My Dashboard</a></a>
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

