<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineOnline</title>
  <!-- BOOSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/74b45bb5d5.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" /> -->
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet" />
  <!-- LOCAL CSS -->
  <link rel="stylesheet" href="../css/styles.css" />
</head>

<body class="blackground">
  <!-- PHP  Header-->
  <?php
  require "header.php";
  ?>
  <!-- BANNER -->
  <div class="container-fluid_2">
    <div id="miCarousel" class="carousel slide" data-ride="carousel" data-interval="2300">
      <!-- Imagenes-->
      <div class="carousel-inner banner">
        <div class="carousel-item active">
          <img src="../img/banner3.png" alt="banner 2" width="1920" height="1080" />
        </div>
        <div class="carousel-item">
          <img src="../img/banner4.png" alt="banner 1" width="1920" height="1080" />
        </div>
        <div class="carousel-item">
          <img src="../img/spidey_1.png" alt="banner 1" width="1920" height="1080" />
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

    <!--Buscadores-->
    <div class="search col-xs-12 col-sm-12 col-md-12 col-lg-8 x-col-xl-12">
      <div class="col-xs-12 col-6 col-sm-6 col-md-6 col-lg-6">
        <select name="select" id="select_1" class="select col-xs-12 col-sm-12 col-md-12 col-lg-12 x-col-xl-12">
          <option value="select">Seleccioná un Cine</option>
          <option value="movie1">Multiplex Lavalle</option>
          <option value="movie2">Multiplex Belgrano</option>
          <option value="movie2">Multiplex Canning</option>
          <option value="movie2">Multiplex Cabildo</option>
          <option value="movie2">Multiplex Palmas del Pilar</option>
        </select>
      </div>

      <!--Buscador 2-->
      <div class="col-xs-12 col-6 col-sm-6 col-md-6 col-lg-6">
        <select name="select" id="select_1" class="select col-xs-12 col-sm-12 col-md-12 col-lg-12 x-col-xl-12">
          <option value="select">Seleccioná Tipo de Sala</option>
          <option value="movie1">2D</option>
          <option value="movie2">2D Xtremo</option>
          <option value="movie2">3D</option>
          <option value="movie2">4D</option>
          <option value="movie2">Comfort Plus 2D</option>
          <option value="movie2">Sala Platinum</option>
        </select>
      </div>
    </div>
    <div class="box_cobyright">
      <hr />
    </div>
    <!--Cartelera-->
    <div class="scroll_rev col-xs-12 col-sm-12 col-md-12 col-lg-1 x-col-xl-1">
      <h1 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 x-col-xl-12 tittles">
        Peliculas
      </h1>
    </div>
    <section class="scroll_rev row center col-xs-12 col-sm-12 col-md-12 col-lg-12 x-col-xl-12 ">
      <?php
      $index_array = array(
        array(
          "img" => "../img/movies/cruella.png",
          "tittle" => "Cruella",
          "review" => "Decidida a convertirse en una exitosa diseñadora de moda, una joven y
        creativa estafadora llamada Estella se asocia con un par de ladrones para sobrevivir en las calles de
        Londres. Sin embargo, cuando su talento para la moda llama la atención de la legendaria diseñadora, la
        Baronesa von Hellman, Estella cambia el rumbo de su vida hasta que una serie de acontecimientos la llevan a
        asumir su lado malvado y a convertirse en la estridente y vengativa Cruella.",
          "cast" => "REPARTO: Emma Stone, Emma Thompson, John McCrea.",
          "direction" => "DIRECCIÓN: Craig Gillespie.",
          "year" => "Drama - 2021 - 1h 34min.",
          "link" => "php/cruella.php",
          "modal" => "contenido-modal",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/gmRKv7n2If8" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "contenido-modal" => "#contenido-modal"
        ),

        array(
          "img" => "../img/movies/mortal_kombat.png",
          "tittle" => "Mortal Kombat",
          "review" => "Cole Young, el luchador de MMA, acostumbrado a recibir palizas por
        dinero, desconoce su ascendencia, y tampoco sabe por qué el emperador Shang Tsung de Outworld ha enviado a
        su mejor guerrero, Sub-Zero, un Cryomancer sobrenatural, para dar caza a Cole. Ante esta situación, Cole
        teme por la seguridad de su familia y busca a Sonya Blade siguiendo las indicaciones de Jax, un comandante
        de las Fuerzas Especiales que tiene la misma extraña marca de dragón con la que nació Cole",
          "cast" => "REPARTO: Lewis Tan, Jessica McNamee, Josh Lawson.",
          "direction" => "DIRECCIÓN: Simon McQuoid.",
          "year" => "Acción/Aventura - 2021 - 1h 10min.",
          "link" => "mortal.php",
          "modal" => "contenido_2-modal",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/-BQPKD7eozY" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "contenido-modal" => "#contenido_2-modal"
        ),

        array(
          "img" => "../img/movies/raya_and_the_last_dragon.png",
          "tittle" => "Raya y el Últido Dragon",
          "review" => "En el fantástico mundo de Kumandra, humanos y dragones vivieron juntos
        en perfecta armonía. Sin embargo, cuando unas fuerzas del mal amenazaron el territorio, los dragones se
        sacrificaron para salvar a la humanidad. Cerca de 500 años después, esas mismas fuerzas malignas han
        regresado y Raya, una guerrera solitaria, tendrá que encontrar al último y legendario dragón para
        reconstruir un mundo destruido y volver a unir a su pueblo.",
          "cast" => "REPARTO: Awkwafina, Kelly Marie Tran, Sandra Oh.",
          "direction" => "DIRECCIÓN: Carlos López Estrada, Don Hall.",
          "year" => "Aventura - 2021 - 1h 14min.",
          "link" => "raya.php",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/1VIZ89FEjYI" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal" => "contenido_3-modal",
          "contenido-modal" => "#contenido_3-modal"
        ),

        array(
          "img" => "../img/movies/the_conjuring.png",
          "tittle" => "El conjuro 3",
          "review" => "Años 80. Ed y Lorraine Warren se enfrentan a un nuevo caso de la mano
        de un hombre, Arne Cheyne Johnson, acusado de un terrible asesinato tras haber sido poseído por un demonio.",
          "cast" => "REPARTO: Vera Farmiga, Patrick Wilson, Ruairi O'Connor.",
          "direction" => "DIRECCIÓN: Michael Chaves.",
          "year" => "Terror - 2021 - 1h 12min.",
          "link" => "conjuring.php",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/S8nlMJfE6pc" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal" => "contenido_4-modal",
          "contenido-modal" => "#contenido_4-modal"
        ),
        array(
          "img" => "../img/movies/venom.png",
          "tittle" => "Venom",
          "review" => "Después de encontrar un cuerpo anfitrión en el
          periodista de investigación Eddie Brock, el
          simbionte alienígena debe enfrentarse a un nuevo
          enemigo, Carnage, el alter ego del asesino en serie
          Cletus Kasady.",
          "cast" => "REPARTO: Tom Hardy, Tom Holland, Woody Harrelson, Anne Weying.",
          "direction" => "DIRECCIÓN:  Andy Serkis.",
          "year" => "Accion/Ciencia Ficcion - 2022 - 2h 12min.",
          "link" => "venom.php",
          "iframe" => '<iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/wfjlNisONJY"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>',
          "modal" => "contenido_15-modal",
          "contenido-modal" => "#contenido_15-modal"
        ),

      );


      // crear una variable para cambiar el "alt" en las peliculas.
      foreach ($index_array as $movies) {

        echo '<article class="pelis_dist col-xs- col-sm- col-md- col-lg- - x-col-xl-">
        <div class="modal fade" id=' . $movies["modal"] . ' tabindex="-1" data-backdrop="static">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <div class="col-sm-10 col-lg-11">
                <h1 class="modal-title">' . $movies["tittle"] . '</h1>
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
                    ' . $movies["iframe"] . '
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
                        ' . $movies["cast"] . '
                      </span>
                    </p>
                    <p class="col-sm-12 col-lg-12 modal-text">
                      <span>
                        ' . $movies["direction"] . '
                      </span>
                    </p>
                    <p class="col-sm-12 col-lg-12 modal-text">
                      <span>
                        ' . $movies["year"] . '
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
            <button id="submit">Comprar</button>
            <button id="submit" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div> 
    <div class="movie-img center">
    <div class="images">
      <a
        href=' . $movies["link"] . '
        data-toggle="modal"
        data-target=' . $movies["contenido-modal"] . '
        ><img
          src=' . $movies["img"] . '
          alt="A CLOCKWORK
          ORANGE"
          class="images"
          width="200"
          height="285"
        /><br />
      </a>
    </div>
    <div class="informacion">
      <p>Ver Ahora</p>
    </div>
  </div>
  <div>
    <a
      class="movie-tittle col-12"
      href=' . $movies["link"] . '
      data-toggle="modal"
      data-target=' . $movies["contenido-modal"] . '
    >
    ' . $movies["tittle"] . '
    </a>
    <p class="col-col d-lg-none info2">
      <span>
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
    <div class="box_cobyright">
      <hr />
    </div>
    <div class="scroll_rev col-xs-12 col-sm-12 col-md-12 col-lg-1 x-col-xl-1">
      <h1 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 x-col-xl-12 tittles">
        Estrenos
      </h1>
    </div>
    <section class="scroll_rev row center col-xs-12 col-sm-12 col-md-12 col-lg-12 x-col-xl-12">
      <?php
      $index_array = array(
        array(
          "img" => "../img/movies/spiderman_nwh.jpg",
          "tittle" => "Spiderman: No Way Home",
          "review" => "Tras descubrirse la identidad secreta de Peter Parker como Spider-Man, la vida del joven se vuelve una locura. Peter decide pedirle ayuda al Doctor Extraño para recuperar su vida. Pero algo sale mal y provoca una fractura en el multiverso.",
          "cast" => "REPARTO: Tom Holland , Zendaya , Andrew Garfield , Tobey Maguire.",
          "direction" => "DIRECCIÓN: Chris McKenna, Erik Sommers.",
          "year" => "Acción/Aventura - 2021 - 2h 34min.",
          "link" => "spiderman.php",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/6QkTCmhOzuA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
          "modal" => "contenido_6-modal",
          "contenido-modal" => "#contenido_6-modal"
        ),
        array(
          "img" => "../img/movies/matrix.jpg",
          "tittle" => "Matrix: Resurrecciones",
          "review" => "Thomas Anderson lleva una vida cómoda como una eminencia dentro
          del mundo de los videojuegos, pero tiene problemas para discernir
          entre lo que es realidad y lo que no lo es. Thomas deberá decidir
          si sigue al conejo blanco una vez más.",
          "cast" => "Keanu Reeves , Carrie-Anne Moss, Jessica Henwick.",
          "direction" => "DIRECCIÓN: Lana Wachowski, James McTeigue, Grant Hill.",
          "year" => "Acción/Aventura - 2021 - 2h 10min.",
          "link" => "matrix.php",
          "iframe" => '<iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/qjnvX44LoQw"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>',
          "modal" => "contenido_5-modal",
          "contenido-modal" => "#contenido_5-modal"
        ),
        array(
          "img" => "../img/movies/kingsman.jpg",
          "tittle" => "Kingsman: El Origen",
          "review" => "Un grupo formado por los tiranos y las mentes criminales más
          malvadas de la historia se une para desencadenar una guerra que
          matará a millones de personas. Un hombre tendrá que luchar contra
          el mal y contra el tiempo para detenerlos.",
          "cast" => "REPARTO: Taron Egerton, Gemma Arterton, Harris Dickinson.",
          "direction" => "DIRECCIÓN: Matthew Vaughn, David Reid, Adam Bohling.",
          "year" => "Accion/Aventura - 2021 - 2h 14min.",
          "link" => "kingsman.php",
          "iframe" => '<iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/Sh-eHHPJeMU"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>',
          "modal" => "contenido_7-modal",
          "contenido-modal" => "#contenido_7-modal"
        ),
        array(
          "img" => "../img/movies/el_aro.jpg",
          "tittle" => "El Aro: Resurrecion",
          "review" => "Una novela de Internet está provocando que sus
          lectores mueran uno por uno y Nuo, un estudiante
          universitario, vio horribles cuerpos de personas
          muertas en la copia exacta de lo que describe la
          novela. 98 min.",
          "cast" => "REPARTO: Annie Sun, Zhou Xiaonuo, Fu Meng-Po, Ma
          Ming, Musi Ni, Tang Jing, Han Qiuchi.",
          "direction" => "DIRECCIÓN: Norio Tsurata.",
          "year" => "Terror - 2019 - 1h 12min. ",
          "link" => "elaro.php",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/7P3LmmiGKAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
          "modal" => "contenido_8-modal",
          "contenido-modal" => "#contenido_8-modal"
        ),
        array(
          "img" => "../img/movies/sing_2.jpg",
          "tittle" => "Sing 2 ",
          "review" => "Buster Moon y su elenco de animales artistas se
          preparan para lanzar un deslumbrante espectáculo
          escénico en la capital mundial del entretenimiento.
          Solo hay un problema: debe convencer a la estrella
          de rock más solitaria del mundo de unirse a ellos.",
          "cast" => "REPARTO: Vera Farmiga, Patrick Wilson, Ruairi
          O'Connor.",
          "direction" => "DIRECCIÓN: Garth Jennings.",
          "year" => "Musical/Infantil - 2021 - 1h 50min. ",
          "link" => "sing_2.php",
          "iframe" => '<iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/5Kgk-Rrs-_M"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>',
          "modal" => "contenido_9-modal",
          "contenido-modal" => "#contenido_9-modal"
        ),

      );

      // crear una variable para cambiar el "alt" en las peliculas.
      foreach ($index_array as $movies) {

        echo '<article class="pelis_dist col-xs- col-sm- col-md- col-lg- - x-col-xl-">
        <div class="modal fade" id=' . $movies["modal"] . ' tabindex="-1" data-backdrop="static">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <div class="col-sm-10 col-lg-11">
                <h1 class="modal-title">' . $movies["tittle"] . '</h1>
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
                    ' . $movies["iframe"] . '
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
                        ' . $movies["cast"] . '
                      </span>
                    </p>
                    <p class="col-sm-12 col-lg-12 modal-text">
                      <span>
                        ' . $movies["direction"] . '
                      </span>
                    </p>
                    <p class="col-sm-12 col-lg-12 modal-text">
                      <span>
                        ' . $movies["year"] . '
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
            <button id="submit">Comprar</button>
            <button id="submit" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div> 
    <div class="movie-img center">
    <div class="images">
      <a
        href=' . $movies["link"] . '
        data-toggle="modal"
        data-target=' . $movies["contenido-modal"] . '
        ><img
          src=' . $movies["img"] . '
          alt="A CLOCKWORK
          ORANGE"
          class="images"
          width="200"
          height="285"
        /><br />
      </a>
    </div>
    <div class="informacion">
      <p>Estreno</p>
    </div>
  </div>
  <div>
    <a
      class="movie-tittle col-12"
      href=' . $movies["link"] . '
      data-toggle="modal"
      data-target=' . $movies["contenido-modal"] . '
    >
    ' . $movies["tittle"] . '
    </a>
    <p class="col-col d-lg-none info2">
      <span>
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
    <div class="box_cobyright">
      <hr />
    </div>
    <div class="scroll_rev col-xs-12 col-sm-12 col-md-12 col-lg-1 x-col-xl-1">
      <h1 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 x-col-xl-12 tittles">
        Próximamente
      </h1>
    </div>
    <section class="scroll_rev row center col-xs-12 col-sm-12 col-md-12 col-lg-12 x-col-xl-12 login-buttom">
      <?php
      $index_array = array(
        array(
          "img" => "../img/movies/scream.jpg",
          "tittle" => "Scream",
          "review" => "25 años después de que una racha de asesinatos brutales conmocionara a la tranquila ciudad de Woodsboro, un nuevo asesino imitador se ha puesto la máscara de Ghostface para resucitar secretos del pasado.",
          "cast" => "REPARTO: Jenna Ortega, Mikey Madison, Amber Freeman, Melissa Barrera, Neve Campbell.",
          "direction" => "DIRECCIÓN: Matt Bettinelli-Olpin, Tyler Gillett",
          "year" => "Terror/Suspenso - 2022 - 1h 54min. ",
          "link" => "scream.php",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/beToTslH17s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
          "modal" => "contenido_10-modal",
          "contenido-modal" => "#contenido_10-modal"
        ),
        array(
          "img" => "../img/movies/morbius.jpg",
          "tittle" => "Morbius",
          "review" => "Ambientada en el universo de Spider Man, se centra en uno de sus villanos más icónicos, Morbius, un doctor que tras sufrir una enfermedad en la sangre y fallar al intentar curarse, se convirtió en un vampiro.",
          "cast" => "REPARTO: Jared Leto, Matt Smith, Loxias Crown, Adria Arjona, Martine Bancroft, Michael Keaton.",
          "direction" => "DIRECCIÓN: Daniel Espinosa.",
          "year" => "Acción/Fantasia - 2022 - 1h 44min. ",
          "link" => "morbius.php",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/C4XP8FSqTTE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
          "modal" => "contenido_11-modal",
          "contenido-modal" => "#contenido_11-modal"
        ),
        array(
          "img" => "../img/movies/la_ultima_noche.jpg",
          "tittle" => "La Última Noche",
          "review" => "Mientras el mundo se enfrenta al Apocalipsis, un grupo de amigos se reúne para celebrar la Navidad en una idílica casa de campo en Reino Unido. Incomodados por la idea de la destrucción de la humanidad, deciden afrontar la situación con tranquilidad.",
          "cast" => "REPARTO: Lily‑Rose Melody Depp, Keira Knightley, Roman Griffin Davis, Matthew Goode. ",
          "direction" => "DIRECCIÓN: Daniel Hubbard.",
          "year" => "Terror/Comedia - 2022 - 1h 32min.",
          "link" => "la_ultima_noche.php",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/5TaL2i71PCc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
          "modal" => "contenido_12-modal",
          "contenido-modal" => "#contenido_12-modal"
        ),
        array(
          "img" => "../img/movies/encanto.jpg",
          "tittle" => "Encanto",
          "review" => "Una joven colombiana puede ser la última esperanza
          para su familia, cuando descubre que la magia que
          rodea a Encanto, un lugar encantado que bendice a
          los niños con dones únicos, se encuentra en serio
          peligro.",
          "cast" => " REPARTO: Stephanie Beatriz, Wilmer Valderrama, John
          Leguizamo.",
          "direction" => "DIRECCIÓN: Byron Howard, Jared Bush.",
          "year" => "Musical/Infantil - 2021 - 1h 49min.",
          "link" => "encanto.php",
          "iframe" => ' <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/E4dCY_DvT-4"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>',
          "modal" => "contenido_13-modal",
          "contenido-modal" => "#contenido_13-modal"
        ),
        array(
          "img" => "../img/movies/agentes_355.jpg",
          "tittle" => "Agentes 355",
          "review" => "Película no recomendada a menores de 12 años. Un grupo de mujeres (Jessica Chastain, Marion Cotillard, Penélope Cruz, Fan Bingbing y Lupita Nyong'o), compuesto por agentes de organizaciones de todo el mundo, conforman una de las unidades de espías más prestigiosas del mundo.",
          "cast" => "REPARTO: Jessica Chastain, Penélope Cruz, Bingbing Fan, Diane Kruger.",
          "direction" => "DIRECCIÓN:  Simon Kinberg.",
          "year" => "Accion/Comedia - 2022 - 1h 12min ",
          "link" => "agentes_355.php",
          "iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/MclHl3PT2V4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
          "modal" => "contenido_14-modal",
          "contenido-modal" => "#contenido_14-modal"
        ),

      );

      // crear una variable para cambiar el "alt" en las peliculas.
      foreach ($index_array as $movies) {

        echo '<article class="pelis_dist col-xs- col-sm- col-md- col-lg- - x-col-xl-">
        <div class="modal fade" id=' . $movies["modal"] . ' tabindex="-1" data-backdrop="static">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <div class="col-sm-10 col-lg-11">
                <h1 class="modal-title">' . $movies["tittle"] . '</h1>
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
                    ' . $movies["iframe"] . '
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
                        ' . $movies["cast"] . '
                      </span>
                    </p>
                    <p class="col-sm-12 col-lg-12 modal-text">
                      <span>
                        ' . $movies["direction"] . '
                      </span>
                    </p>
                    <p class="col-sm-12 col-lg-12 modal-text">
                      <span>
                        ' . $movies["year"] . '
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
            <button id="submit">Comprar</button>
            <button id="submit" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div> 
    <div class="movie-img center">
    <div class="images">
      <a
        href=' . $movies["link"] . '
        data-toggle="modal"
        data-target=' . $movies["contenido-modal"] . '
        ><img
          src=' . $movies["img"] . '
          alt="A CLOCKWORK
          ORANGE"
          class="images"
          width="200"
          height="285"
        /><br />
      </a>
    </div>
    <div class="informacion">
      <p>Reserva</p>
    </div>
  </div>
  <div>
    <a
      class="movie-tittle col-12"
      href=' . $movies["link"] . '
      data-toggle="modal"
      data-target=' . $movies["contenido-modal"] . '
    >
    ' . $movies["tittle"] . '
    </a>
    <p class="col-col d-lg-none info2">
      <span>
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
  <!-- Scroll -->
  <?php
  require "scroll.php";
  ?>
</body>

</html>