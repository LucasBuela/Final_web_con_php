<?php
$txt_header = '
<header>
<nav
  class="navbar navbar-expand-lg navbar-dark nav-main background fixed-top"
>
  <a class="navbar-brand" href="index.php">
    <img
      src="../img/banner_more/cineOnline.png"
      alt="Logo"
      width="98"
      height="28"
    />
  </a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarText"
    aria-controls="navbarText"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="index.php" class="nav-link"
          >Peliculas<span class="sr-only">(current)</span></a
        >
      </li>
      <li class="nav-item">
        <a href="clasic.php" class="nav-link">Clasicos</a>
      </li>
      <li class="nav-item">
        <a href="funcion.php" class="nav-link">Mi Funcion</a>
      </li>
      <li class="nav-item">
        <a href="contact.php" class="nav-link">Contacto</a>
      </li>
    </ul>
    <ul class="nav-menu-right">
      <li class="nav-item col-1 d-none d-lg-block">
        <a href="#" class="nav-link nav-btn nav-search">
          <i class="fas fa-search"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="login.php" class="nav-link">Iniciar Sesion</a>
      </li>
    </ul>
  </div>
</nav>
<div class="box_cobyright">
  <hr />
  <br />
</div>
</header>
';

echo $txt_header;
