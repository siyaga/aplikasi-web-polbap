<style>

@font-face{
    font-family: Roboto;
      src: url(Roboto.ttf);
}
.navbar{
    
    background: #4A96DD;
}
.nav-link{
    color: #f6fbffd2;
    font-family: Roboto;
    font-style: bold;
    font-weight: bold;
    font-size: 15px;
    line-height: 13px;
    text-align: center;
    margin-left: 15px;

}
.nav-link:hover{
    color: white;
}
.active{
    color:white;
}
.collapse{
    margin-left: 64px;
}

</style>


<nav class="navbar navbar-expand-lg">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($titleWeb === "jurnal") ? 'active' : '' }}" href="/jurnal">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($titleWeb === "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
        
    </div>
  </nav>