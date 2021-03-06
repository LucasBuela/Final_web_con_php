<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineOnline</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/estilos.css">
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
          <img src="../img/banner_more/banner2.jpg" alt="banner 2" width="1920" height="1080">
        </div>
        <div class="carousel-item">
          <img src="../img/banner_more/banner1.jpg" alt="banner 1" width="1920" height="1080">
        </div>
      </div>
      <!-- Flechas -->
      <a class="carousel-control-prev" href="#miCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#miCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div><br>
    <!--Buscador-->
    <div class="row center">
      <div class="col-6 col-sm-6 col-md-6 col-lg-3">
        <select name="select" id="buttom" class="buttom">
          <option value="select">Selecciona una Pel??cula</option>
          <option value="movie1">Cruella</option>
          <option value="movie2">Mortal Kombat</option>
          <option value="movie2">Raya y el ??ltimo Drag??n</option>
          <option value="movie2">El conjuro 3</option>
        </select>
      </div>
      <!--Buscador 2-->
      <div class="col-6 col-sm-6 6col-md-6 col-lg-3">
        <select name="select2" id="buttom2" class="buttom">
          <option value="category">Selecciona una Categoria</option>
          <option value="category">Terror</option>
          <option value="category">Drama/Crimen</option>
          <option value="category">Accion/Aventura</option>
          <option value="category">Ciencia Ficci??n/Acci??n</option>
        </select>
      </div>
      <!--Lupa-->
      <div class="col-1 d-none d-lg-block">
        <div>
          <img src="../img/banner_more/search.png" alt="search" class="search" width="512" height="512">
        </div>
      </div>
    </div><br>
    <!--Cartelera-->
    <section class="row center">
      <?php
      $index_array = array(
        array(
          "img" => "../img/movies/cruella.jpg",
          "tittle" => "Cruella 2021",
          "review" => "Decidida a convertirse en una exitosa dise??adora de moda, una joven y
        creativa estafadora llamada Estella se asocia con un par de ladrones para sobrevivir en las calles de
        Londres. Sin embargo, cuando su talento para la moda llama la atenci??n de la legendaria dise??adora, la
        Baronesa von Hellman, Estella cambia el rumbo de su vida hasta que una serie de acontecimientos la llevan a
        asumir su lado malvado y a convertirse en la estridente y vengativa Cruella.",
          "cast" => "REPARTO: Emma Stone, Emma Thompson, John McCrea.",
          "direction" => "DIRECCI??N: Craig Gillespie.",
          "year" => "Drama - 2021 - 1h 34min.",
          "link" => "cruella.php",
          "modal"=>"contenido-modal",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/gmRKv7n2If8" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "contenido-modal"=> "#contenido-modal"        
        ),

        array(
          "img" => "../img/movies/mortal_kombat.jpg",
          "tittle" => "Mortal Kombat",
          "review" => "Cole Young, el luchador de MMA, acostumbrado a recibir palizas por
        dinero, desconoce su ascendencia, y tampoco sabe por qu?? el emperador Shang Tsung de Outworld ha enviado a
        su mejor guerrero, Sub-Zero, un Cryomancer sobrenatural, para dar caza a Cole. Ante esta situaci??n, Cole
        teme por la seguridad de su familia y busca a Sonya Blade siguiendo las indicaciones de Jax, un comandante
        de las Fuerzas Especiales que tiene la misma extra??a marca de drag??n con la que naci?? Cole",
          "cast" => "REPARTO: Lewis Tan, Jessica McNamee, Josh Lawson.",
          "direction" => "DIRECCI??N: Simon McQuoid.",
          "year" => "Acci??n/Aventura - 2021 - 1h 10min.",
          "link" => "mortal.php",
          "modal"=>"contenido_2-modal",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/-BQPKD7eozY" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "contenido-modal"=> "#contenido_2-modal"
        ),

        array(
          "img" => "../img/movies/raya_and_the_last_dragon.jpg",
          "tittle" => "Raya y el ??ltimo Drag??n",
          "review" => "En el fant??stico mundo de Kumandra, humanos y dragones vivieron juntos
        en perfecta armon??a. Sin embargo, cuando unas fuerzas del mal amenazaron el territorio, los dragones se
        sacrificaron para salvar a la humanidad. Cerca de 500 a??os despu??s, esas mismas fuerzas malignas han
        regresado y Raya, una guerrera solitaria, tendr?? que encontrar al ??ltimo y legendario drag??n para
        reconstruir un mundo destruido y volver a unir a su pueblo.",
          "cast" => "REPARTO: Awkwafina, Kelly Marie Tran, Sandra Oh.",
          "direction" => "DIRECCI??N: Carlos L??pez Estrada, Don Hall.",
          "year" => "Aventura - 2021 - 1h 14min.",
          "link" => "raya.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/1VIZ89FEjYI" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_3-modal",
          "contenido-modal"=> "#contenido_3-modal"
        ),

        array(
          "img" => "../img/movies/the_conjuring.jpg",
          "tittle" => "El conjuro 3",
          "review" => "A??os 80. Ed y Lorraine Warren se enfrentan a un nuevo caso de la mano
        de un hombre, Arne Cheyne Johnson, acusado de un terrible asesinato tras haber sido pose??do por un demonio.",
          "cast" => "REPARTO: Vera Farmiga, Patrick Wilson, Ruairi O'Connor.",
          "direction" => "DIRECCI??N: Michael Chaves.",
          "year" => "Terror - 2021 - 1h 12min.",
          "link" => "conjuring.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/S8nlMJfE6pc" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_4-modal",
          "contenido-modal"=> "#contenido_4-modal"
        ),
      );
      foreach ($index_array as $movies) {

        echo '<article class="col col-sm-6 col-lg ">
        <div class="modal fade" id='.$movies["modal"].' tabindex="-1" data-backdrop="static">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <div class="col-sm-10 col-lg-11">
                <h1 class="modal-title">'.$movies["tittle"].'</h1>
              </div>
              <div>
                <button class="close" data-dismiss="modal">
                  <span>&times;</span>
                </button>
              </div>
              </div>
              <div class="modal-body">
                <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-lg-12 modal-lg">
                    '.$movies["iframe"].'
                  </div>
                  <div class="col-sm-12 col-lg-12 modal-text">
                    <h2>Sinopsis</h2>
                  </div>
                  <div class="col-sm-12 col-lg-12 modal-text">
                    <p><span>' . $movies["review"] . '
                    </span>
                    </p>
                    <p class="col-sm-12 col-lg-12 modal-text">
                      <span>
                        '.$movies["cast"].'
                      </span>
                    </p>
                    <p class="col-sm-12 col-lg-12 modal-text">
                      <span>
                        '.$movies["direction"].'
                      </span>
                    </p>
                    <p class="col-sm-12 col-lg-12 modal-text">
                      <span>
                        '.$movies["year"].'
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
              <div class="modal-footer">
                <button class="btn btn-primary">Comprar</button>
                <button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
         <a href=' . $movies["link"] . ' data-toggle="modal" data-target='.$movies["contenido-modal"].'><img src=' . $movies["img"] . ' alt="Cruella" class="movie-img"
             width="200" height="285"><br>
             <a class="movie-tittle col-12" href=' . $movies["link"] . ' data-toggle="modal" data-target='.$movies["contenido-modal"].' >' . $movies["tittle"] . '   </a>  
         </a>
         <p class="col-col d-lg-none info2"><span>
         ' . $movies["review"] . '
           </span>
         </p>
         <p class="col-col d-lg-none info2">
           <span>
          ' . $movies["cast"] . '
           </span>
         </p>
         <p class="col-col d-lg-none info2">
           <span>
          ' . $movies["direction"] . '   
           </span>
         </p>
         <p class="col-col d-lg-none info2">
           <span>
           ' . $movies["year"] . '   
           </span>
         </p>
         
       </article>';
      };
      ?>
    </section>
  </div>
  <!--PHP Footer-->
  <?php
  require "footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>