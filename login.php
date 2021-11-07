<!-- Login Form -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="blackground">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark background">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="img/banner_more/cineOnline.png" alt="Logo" width="98" height="28">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Cartelera</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clasic.html">Clasicos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="funcion.html">Mi Funcion</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.html">Contacto<span class="sr-only">(current)</span></a>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login<span class="sr-only"></a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="container login">
    <div class="row center">
      <div class="col-12 col-sm-12 col-md-12 col-lg-10 form">
        <form action="#" method="get">
          <input type="email" id="mail" name="mail" required placeholder="E-mail" maxlength="20"><br>
          <label for="password"></label>
          <input type="password" id="password" name="password" required placeholder="Contraseña" maxlength="12"><br>
          <input type="submit" name="submit" id="submit"><br>
          <a href="index.php">Crea una cuenta</a><br>
          <a href="index.php">¿Olvidaste tu contraseña?</a><br>
        </form>
      </div>
  </section>
  <!--Footer-->
  <footer class="background bg-dark fixed-bottom">
    <div class="container">
      <div class="row center">
        <div class="col-8 col-md-9 col-lg-10 footer">
          <p>Todos los derechos reservados CineOnline.com.ar</p>
        </div>
        <div class="col-4 col-md-3 col-lg-2 social-media">
          <a href="https://www.facebook.com/" target="_blank">
            <img src="img/banner_more/facebook.png" alt="facebook-icon" class="social-media" width="512" height="512">
          </a>
          <a href="https://www.instagram.com/" target="_blank">
            <img src="img/banner_more/instagram.png" alt="instagram-icon" class="social-media" width="512"
              height="512">
          </a>
          <a href="https://www.youtube.com/" target="_blank">
            <img src="img/banner_more/youtube.png" alt="youtube-icon" class="social-media" width="512" height="512">
          </a>
          <a href="https://twitter.com/" target="_blank">
            <img src="img/banner_more/twitter.png" alt="twitter-icon" class="social-media" width="512" height="512">
          </a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>
</html>