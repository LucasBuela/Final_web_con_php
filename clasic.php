<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clásicos</title>
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
      $arr_imagenes=["img/movies/clockwork.jpg","img/movies/star_wars.jpg","img/movies/the_thing.jpg","img/movies/tnotld.jpg","img/movies/childs_play.jpg","img/movies/scarface.jpg","img/movies/taxi_driver.jpg","img/movies/the_shinning.jpg"];
      $arr_titulos=["A CLOCKWORK ORANGE","STAR WARS: RETURN OF THE JEDI EPISODE VI ","THE THING ","NIGHT OF THE LIVING DEAD","CHILD´S PLAY","SCARFACE","TAXI DRIVER ","THE SHINING"];
      $arr_sinopsis=["Estado de bienestar futurista, Alex (MalcolmMcDowell),un joven
      despiadado, duerme todo el día y pasa las noches vagando por la ciudad con sus droogs (amigos), atacando a
      personas inocentes en las calles y en sus hogares.
      Finalmente, capturado por la policía, Alex sufre una rehabilitación en forma de terapia de aversión tan
      brutal y horripilante como cualquiera de sus delitos.","Luke Skywalker y la princesa Leia deben viajar a Tatooine para liberar
      a Han Solo. Para conseguirlo, deben infiltrarse en la peligrosa guarida de Jabba the Hutt, el gángster más
      temido de la galaxia. Una vez reunidos, el equipo recluta a tribus de Ewoks para combatir a las fuerzas
      imperiales en los bosques de la luna de Endor.","En una estación experimental remota de la Antártida, un equipo de
      científicos de investigación estadounidenses ven cómo en su campamento base un helicóptero noruego dispara
      contra un perro de trineo. Cuando acogen al perro, éste ataca brutalmente tanto a los seres humanos como a
      los caninos del campamento, y descubren que la bestia, de origen desconocido, puede asumir la forma de sus
      víctimas.","En un cementerio de Pennsylvania, Barbara (Judith O'Dea) es atacada por
      un muerto viviente. Aterrorizada, la joven huye hacia una granja, donde también se ha refugiado Ben (Duane
      Jones). Juntos intentarán sobrevivir en el interior de esa aislada granja.","Después de mudarse a una ciudad nueva, Karen le regala a su hijo Andy
      un muñeco que se convierte en el mejor amigo del niño. Lo que ellos desconocían es que el muñeco es un ser
      maligno que tiene vida propia. Andy deberá aliarse con otros niños vecinos para detener a esta diabólica
      criatura.","Tony Montana es un emigrante cubano frío e implacable que se instala en
      Miami con el propósito de convertirse en un gángster importante. Con la colaboración de su amigo Manny
      Rivera inicia una fulgurante carrera delictiva, con el objetivo de acceder a la cúpula de una organización
      de narcos.","Ambientada en la Nueva York de la década de 1970, poco después de que
      terminara la guerra de Vietnam, se centra en la vida de Travis Bickle, un excombatiente solitario e
      inestable que debido a su insomnio crónico comienza a trabajar como taxista, se incorpora a la turbia vida
      nocturna de la ciudad.","Jack Torrance(Jack Nicholson) se traslada junto a su mujer y a su
      introvertido hijo Danny a un impresionante hotel ubicado en Colorado del que ha de encargarse los
      larguísimos y solitarios meses de invierno. En el hotel comienzan a sucederse fenómenos paranormales que
      provocarán serios trastornos en la mente de Jack."];
      $arr_reparto=["REPARTO: Malcom McDowell, Patrick Magee, Adrianne Corri.","REPARTO: Mark Hamill,Carrie Fisher,Harrison Ford.","REPARTO: Kurt Russell, Wilford Brimley, Keith David.","REPARTO: Duane Jones, Judith O'Dea y Karl Hardman.","REPARTO: Devon Sawa, Zackary Arthur, Alyvia Alyn Lind.","REPARTO: Al Pacino,Steven Bauer, Michelle Pfeiffer.","REPARTO: Robert De Niro, Cybill Shepherd, Jodie Foster.","REPARTO: Jack Nicholson, Shelley Duvall, Danny Lloyd."];
      $arr_direccion=["DIRECCIÓN: Stanley Kubrick.","DIRECCIÓN: Richard Marquand.","DIRECCIÓN: John Carpenter.","DIRECCIÓN: George A. Romero.","DIRECCIÓN: Don Mancini.","DIRECCIÓN: Brian De Palma.","DIRECCIÓN: Martin Scorsese.","DIRECCIÓN: Stanley Kubrick."];
      $arr_año=["Crimen - 1971 - 2h 17min.","Ciencia Ficción/Acción - 1983 - 2h 16min.","Terror - 1983 - 1h 5min.","Terror - 1970 - 1h 36min.","Terror - 1988 - 1h 27min.","Drama/Crimen - 1983 - 1h 63min.","Drama/Crimen - 1976 - 1h 13min.","Drama/Terror - 1980 - 1h 46min."];

      for($i=0 ; $i<8; $i++ ){

        $articulos='
        <article class="col col-sm-6 col-md-4 col-lg">
        <a href="clock.php"><img class="movie-img" src='.$arr_imagenes[$i].' alt="A CLOCKWORK ORANGE"
            width="200" height="285">
          <p class="movie-tittle">
          '.$arr_titulos[$i].'</p>
        </a>
        <p class="col-col d-lg-none info2">
          <span>
          '.$arr_sinopsis[$i].'
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
          '.$arr_reparto[$i].'
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
          '.$arr_direccion[$i].'
          </span>
        </p>
        <p class="col-col d-lg-none info2">
          <span>
          '.$arr_año[$i].'
          </span>
        </p>
      </article>';
        echo $articulos;
      }
      


      ?>

    </section>
  </div>
  <!--Footer-->
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