<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineOnline</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="blackground">
  <!-- PHP  Header-->
 <?php
    require "header.php";
 ?>
  <div class="container">
    <!--Imagenes Carousel-->
    <div id="miCarousel" class="carousel slide" data-ride="carousel" data-interval="2300">
      <!-- Imagenes-->
      <div class="carousel-inner banner">
        <div class="carousel-item active">
          <img src="img/banner_more/banner1.jpg" alt="banner 1" width="1920" height="1080">
        </div>
        <div class="carousel-item">
          <img src="img/banner_more/banner2.jpg" alt="banner 2" width="1920" height="1080">
        </div>
      </div>
      <!-- Flechas -->
      <a class="carousel-control-prev" href="#miCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#miCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <!--Buscador-->
    <div class="row center">
      <div class="col-6 col-sm-6 col-md-6 col-lg-3">
        <select name="select" id="buttom" class="buttom">
          <option value="select">Selecciona una Película</option>
          <option value="movie1">Cruella</option>
          <option value="movie2">Raya y el último dragon</option>
        </select>
      </div>
      <!--Buscador 2-->
      <div class="col-6 col-sm-6 6col-md-6 col-lg-3">
        <select name="select2" id="buttom2" class="buttom">
          <option value="category">Selecciona Categoria</option>
          <option value="category">Clásicos</option>
        </select>
      </div>
      <!--Lupa-->
      <div class="col-1 d-none d-lg-block">
        <div>
          <img src="img/banner_more/search.png" alt="search" class="search" width="512" height="512">
        </div>
      </div>
    </div>
    <!--Cartelera-->
    <section class="row center">
      <article class="col col-sm-6 col-lg ">
        <a href="cruella.php" target="_blank"><img src="img/movies/cruella.jpg" alt="Cruella" class="movie-img"
            width="200" height="285">
          <h1 class="movie-tittle col-12"> Cruella </h1>
        </a>
        <p class="col-col d-lg-none info2"><span>Decidida a convertirse en una exitosa diseñadora de moda, una joven y
            creativa estafadora llamada Estella se asocia con un par de ladrones para sobrevivir en las calles de
            Londres. Sin embargo, cuando su talento para la moda llama la atención de la legendaria diseñadora, la
            Baronesa von Hellman, Estella cambia el rumbo de su vida hasta que una serie de acontecimientos la llevan a
            asumir su lado malvado y a convertirse en la estridente y vengativa Cruella.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            REPARTO: Emma Stone, Emma Thompson, John McCrea.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            DIRECCIÓN: Craig Gillespie.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            Drama - 2021 - 1h 34min.
          </span>
        </p>
      </article>
      <article class="col col-sm-6 col-lg">
        <a href="mortal.php" target="_blank"><img src="img/movies/mortal_kombat.jpg" alt="Mortal Kombat"
            class="movie-img" width="200" height="285">
          <h2 class="movie-tittle col-12"> Mortal Kombat </h2>
        </a>
        <p class="col-col d-lg-none info2"><span>Cole Young, el luchador de MMA, acostumbrado a recibir palizas por
            dinero, desconoce su ascendencia, y tampoco sabe por qué el emperador Shang Tsung de Outworld ha enviado a
            su mejor guerrero, Sub-Zero, un Cryomancer sobrenatural, para dar caza a Cole. Ante esta situación, Cole
            teme por la seguridad de su familia y busca a Sonya Blade siguiendo las indicaciones de Jax, un comandante
            de las Fuerzas Especiales que tiene la misma extraña marca de dragón con la que nació Cole.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            REPARTO: Lewis Tan, Jessica McNamee, Josh Lawson.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            DIRECCIÓN: Simon McQuoid.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            Acción/Aventura - 2021 - 1h 10min.
          </span>
        </p>
      </article>
      <article class="col col-sm-6 col-lg">
        <a href="raya.php" target="_blank"><img src="img/movies/raya_and_the_last_dragon.jpg"
            alt="raya y el último dragon" class="movie-img" width="200" height="285">
          <h3 class="movie-tittle col-12"> Raya y el Último Dragón </h3>
        </a>
        <p class="col-col d-lg-none info2"><span>En el fantástico mundo de Kumandra, humanos y dragones vivieron juntos
            en perfecta armonía. Sin embargo, cuando unas fuerzas del mal amenazaron el territorio, los dragones se
            sacrificaron para salvar a la humanidad. Cerca de 500 años después, esas mismas fuerzas malignas han
            regresado y Raya, una guerrera solitaria, tendrá que encontrar al último y legendario dragón para
            reconstruir un mundo destruido y volver a unir a su pueblo.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            REPARTO: Awkwafina, Kelly Marie Tran, Sandra Oh.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            DIRECCIÓN: Carlos López Estrada, Don Hall.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            Aventura - 2021 - 1h 14min.
          </span>
        </p>
      </article>
      <article class="col col-sm-6 col-lg">
        <a href="conjuring.php" target="_blank"><img src="img/movies/the_conjuring.jpg" alt="el conjuro"
            class="movie-img" width="200" height="285">
          <h4 class="movie-tittle  col-12"> El conjuro 3 </h4>
        </a>
        <p class="col-col d-lg-none info2"><span>Años 80. Ed y Lorraine Warren se enfrentan a un nuevo caso de la mano
            de un hombre, Arne Cheyne Johnson, acusado de un terrible asesinato tras haber sido poseído por un demonio.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            REPARTO: Vera Farmiga, Patrick Wilson, Ruairi O'Connor.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            DIRECCIÓN: Michael Chaves.
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
            Terror - 2021 - 1h 12min.
          </span>
        </p>
      </article>
    </section>
  </div>
  <!--PHP Footer-->
  <?php
    require "footer.php";
  ?>
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