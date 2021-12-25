<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clásicos</title>
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
  <?php
  require "header.php";
  ?>
  <div class="container">
    <div class="row center">
      <div class="col-12">
        <h1 class="tittle">Clásicos</h1>
        <p class="info">Disfruta de mirar los mejores clásicos del cine cuando quieras.</p>
      </div>
    </div>
    <section class="row center">
      <?php

      $movies_array = array(
        array(
          "img" => "../img/movies/clockwork.jpg",
          "tittle" => "A CLOCKWORK ORANGE",
          "review" => "Estado de bienestar futurista, Alex (MalcolmMcDowell),un joven
        despiadado, duerme todo el día y pasa las noches vagando por la ciudad con sus droogs (amigos), atacando a
        personas inocentes en las calles y en sus hogares.
        Finalmente, capturado por la policía, Alex sufre una rehabilitación en forma de terapia de aversión tan
        brutal y horripilante como cualquiera de sus delitos.",
          "cast" => "REPARTO: Malcom McDowell, Patrick Magee, Adrianne Corri.",
          "direction" => "DIRECCIÓN: Stanley Kubrick.",
          "year" => "Crimen - 1971 - 2h 17min.",
          "link" => "clock.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/SPRzm8ibDQ8" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_5-modal",
          "contenido-modal"=> "#contenido_5-modal"
        ),

        array(
          "img" => "../img/movies/star_wars.jpg",
          "tittle" => "STAR WARS: RETURN OF THE JEDI EPISODE VI",
          "review" => "Luke Skywalker y la princesa Leia deben viajar a Tatooine para liberar
        a Han Solo. Para conseguirlo, deben infiltrarse en la peligrosa guarida de Jabba the Hutt, el gángster más
        temido de la galaxia. Una vez reunidos, el equipo recluta a tribus de Ewoks para combatir a las fuerzas
        imperiales en los bosques de la luna de Endor.",
          "cast" => "REPARTO: Mark Hamill,Carrie Fisher,Harrison Ford.",
          "direction" => "DIRECCIÓN: Richard Marquand.",
          "year" => "Ciencia Ficción/Acción - 1983 - 2h 16min.",
          "link" => "star.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/5UfA_aKBGMc" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_6-modal",
          "contenido-modal"=> "#contenido_6-modal"
        ),

        array(
          "img" => "../img/movies/the_thing.jpg",
          "tittle" => "THE THING",
          "review" => "En una estación experimental remota de la Antártida, un equipo de
        científicos de investigación estadounidenses ven cómo en su campamento base un helicóptero noruego dispara
        contra un perro de trineo. Cuando acogen al perro, éste ataca brutalmente tanto a los seres humanos como a
        los caninos del campamento, y descubren que la bestia, de origen desconocido, puede asumir la forma de sus
        víctimas.",
          "cast" => "REPARTO: Kurt Russell, Wilford Brimley, Keith David.",
          "direction" => "DIRECCIÓN: John Carpenter.",
          "year" => "Terror - 1983 - 1h 5min.",
          "link" => "thing.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/ySvzHdtCiWE" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_7-modal",
          "contenido-modal"=> "#contenido_7-modal"
        ),

        array(
          "img" => "../img/movies/tnotld.jpg",
          "tittle" => "NIGHT OF THE LIVING DEAD",
          "review" => "En un cementerio de Pennsylvania, Barbara (Judith O'Dea) es atacada por
        un muerto viviente. Aterrorizada, la joven huye hacia una granja, donde también se ha refugiado Ben (Duane
        Jones). Juntos intentarán sobrevivir en el interior de esa aislada granja.",
          "cast" => "REPARTO: Duane Jones, Judith O'Dea y Karl Hardman.",
          "direction" => "DIRECCIÓN: George A. Romero.",
          "year" => "Terror - 1970 - 1h 36min.",
          "link" => "night.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/pd5a0gs-UCQ" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_8-modal",
          "contenido-modal"=> "#contenido_8-modal"
        ),

        array(
          "img" => "../img/movies/childs_play.jpg",
          "tittle" => "CHILD´S PLAY",
          "review" => "Después de mudarse a una ciudad nueva, Karen le regala a su hijo Andy
        un muñeco que se convierte en el mejor amigo del niño. Lo que ellos desconocían es que el muñeco es un ser
        maligno que tiene vida propia. Andy deberá aliarse con otros niños vecinos para detener a esta diabólica
        criatura.",
          "cast" => "REPARTO: Devon Sawa, Zackary Arthur, Alyvia Alyn Lind.",
          "direction" => "DIRECCIÓN: Don Mancini.",
          "year" => "Terror - 1988 - 1h 27min.",
          "link" => "child.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/BhU0cCXYqw0" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_9-modal",
          "contenido-modal"=> "#contenido_9-modal"
        ),

        array(
          "img" => "../img/movies/scarface.jpg",
          "tittle" => "SCARFACE",
          "review" => "Tony Montana es un emigrante cubano frío e implacable que se instala en
        Miami con el propósito de convertirse en un gángster importante. Con la colaboración de su amigo Manny
        Rivera inicia una fulgurante carrera delictiva, con el objetivo de acceder a la cúpula de una organización
        de narcos.",
          "cast" => "REPARTO: Al Pacino,Steven Bauer, Michelle Pfeiffer.",
          "direction" => "DIRECCIÓN: Brian De Palma.",
          "year" => "Drama/Crimen - 1983 - 1h 63min.",
          "link" => "scarface.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/cv276Wg3e7I" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_10-modal",
          "contenido-modal"=> "#contenido_10-modal"
        ),

        array(
          "img" => "../img/movies/taxi_driver.jpg",
          "tittle" => "TAXI DRIVER",
          "review" => "Ambientada en la Nueva York de la década de 1970, poco después de que
        terminara la guerra de Vietnam, se centra en la vida de Travis Bickle, un excombatiente solitario e
        inestable que debido a su insomnio crónico comienza a trabajar como taxista, se incorpora a la turbia vida
        nocturna de la ciudad.",
          "cast" => "REPARTO: Robert De Niro, Cybill Shepherd, Jodie Foster.",
          "direction" => "DIRECCIÓN: Martin Scorsese.",
          "year" => "Drama/Crimen - 1976 - 1h 13min.",
          "link" => "taxi.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/44gB58YS53A" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_11-modal",
          "contenido-modal"=> "#contenido_11-modal"
        ),

        array(
          "img" => "../img/movies/the_shinning.jpg",
          "tittle" => "THE SHINING",
          "review" => "Jack Torrance(Jack Nicholson) se traslada junto a su mujer y a su
        introvertido hijo Danny a un impresionante hotel ubicado en Colorado del que ha de encargarse los
        larguísimos y solitarios meses de invierno. En el hotel comienzan a sucederse fenómenos paranormales que
        provocarán serios trastornos en la mente de Jack.",
          "cast" => "REPARTO: Jack Nicholson, Shelley Duvall, Danny Lloyd.",
          "direction" => "DIRECCIÓN: Stanley Kubrick.",
          "year" => "Drama/Terror - 1980 - 1h 46min.",
          "link" => "shinning.php",
          "iframe"=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/5Cb3ik6zP2I" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
          "modal"=>"contenido_12-modal",
          "contenido-modal"=> "#contenido_12-modal"
        ),

      );
      foreach ($movies_array as $movies) {
        echo '<article class="col col-sm-6 col-md-4 col-lg">; 
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
      <a href=' . $movies["link"] . ' data-toggle="modal" data-target='.$movies["contenido-modal"].'><img class="movie-img" src=' . $movies["img"] . ' alt="A CLOCKWORK ORANGE"
            width="200" height="285"><br>
            <a class="movie-tittle" href=' . $movies["link"] . ' data-toggle="modal" data-target='.$movies["contenido-modal"].' >' . $movies["tittle"] . '   </a>  
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
  <!--Footer-->
  <?php
  require "footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>