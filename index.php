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
  <!-- <?php
      //     $array_banner=array(
      //       array("img"=>"img/banner_more/banner1.jpg","banner"=>"banner 1"),
            
      //     );
        
      //       foreach($array_banner as $banners){
      //     echo '<div class="carousel-inner banner">
      //   <div class="carousel-item active">
      //     <img src='.$banners["img"].'alt="banner 1" width="1920" height="1080">
      //   </div>
      // </div>
      // <!-- Flechas -->
      // <a class="carousel-control-prev" href="#miCarousel" data-slide="prev">
      //   <span class="carousel-control-prev-icon"></span>
      // </a>
      // <a class="carousel-control-next" href="#miCarousel" data-slide="next">
      //   <span class="carousel-control-next-icon"></span>
      // </a>
      // </div>';
            // }

          ?> -->
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
    <?php
      $index_array=array(
      array("img"=>"img/movies/cruella.jpg",
        "tittle"=>"Cruella 2021",
        "review"=>"Decidida a convertirse en una exitosa diseñadora de moda, una joven y
        creativa estafadora llamada Estella se asocia con un par de ladrones para sobrevivir en las calles de
        Londres. Sin embargo, cuando su talento para la moda llama la atención de la legendaria diseñadora, la
        Baronesa von Hellman, Estella cambia el rumbo de su vida hasta que una serie de acontecimientos la llevan a
        asumir su lado malvado y a convertirse en la estridente y vengativa Cruella.",
        "cast"=>"REPARTO: Emma Stone, Emma Thompson, John McCrea.",
        "direction"=>"DIRECCIÓN: Craig Gillespie.",
        "year"=>"Drama - 2021 - 1h 34min."),

        array("img"=>"img/movies/mortal_kombat.jpg",
        "tittle"=>"Mortal Kombat",
        "review"=>"Cole Young, el luchador de MMA, acostumbrado a recibir palizas por
        dinero, desconoce su ascendencia, y tampoco sabe por qué el emperador Shang Tsung de Outworld ha enviado a
        su mejor guerrero, Sub-Zero, un Cryomancer sobrenatural, para dar caza a Cole. Ante esta situación, Cole
        teme por la seguridad de su familia y busca a Sonya Blade siguiendo las indicaciones de Jax, un comandante
        de las Fuerzas Especiales que tiene la misma extraña marca de dragón con la que nació Cole",
        "cast"=>"REPARTO: Lewis Tan, Jessica McNamee, Josh Lawson.",
        "direction"=>"DIRECCIÓN: Simon McQuoid.",
        "year"=>"Acción/Aventura - 2021 - 1h 10min."),

        array("img"=>"img/movies/raya_and_the_last_dragon.jpg",
        "tittle"=>"Raya y el Último Dragón",
        "review"=>"En el fantástico mundo de Kumandra, humanos y dragones vivieron juntos
        en perfecta armonía. Sin embargo, cuando unas fuerzas del mal amenazaron el territorio, los dragones se
        sacrificaron para salvar a la humanidad. Cerca de 500 años después, esas mismas fuerzas malignas han
        regresado y Raya, una guerrera solitaria, tendrá que encontrar al último y legendario dragón para
        reconstruir un mundo destruido y volver a unir a su pueblo.",
        "cast"=>"REPARTO: Awkwafina, Kelly Marie Tran, Sandra Oh.",
        "direction"=>"DIRECCIÓN: Carlos López Estrada, Don Hall.",
        "year"=>"Aventura - 2021 - 1h 14min."),

        array("img"=>"img/movies/the_conjuring.jpg",
        "tittle"=>"El conjuro 3",
        "review"=>"Años 80. Ed y Lorraine Warren se enfrentan a un nuevo caso de la mano
        de un hombre, Arne Cheyne Johnson, acusado de un terrible asesinato tras haber sido poseído por un demonio.",
        "cast"=>"REPARTO: Vera Farmiga, Patrick Wilson, Ruairi O'Connor.",
        "direction"=>"DIRECCIÓN: Michael Chaves.",
        "year"=>"Terror - 2021 - 1h 12min."),

      );

      foreach($index_array as $movies){
       
       echo '<article class="col col-sm-6 col-lg ">
         <a href="cruella.php" target="_blank"><img src='.$movies["img"].' alt="Cruella" class="movie-img"
             width="200" height="285">
           <h1 class="movie-tittle col-12"> '.$movies["tittle"].' </h1>
         </a>
         <p class="col-col d-lg-none info2"><span>
         '.$movies["review"].'
           </span>
         </p>
         <p class="col-col d-lg-none info2">
           <span>
          '.$movies["cast"].'
           </span>
         </p>
         <p class="col-col d-lg-none info2">
           <span>
          '.$movies["direction"].'   
           </span>
         </p>
         <p class="col-col d-lg-none info2">
           <span>
           '.$movies["year"].'   
           </span>
         </p>
       </article>';
      }     
    ?>

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