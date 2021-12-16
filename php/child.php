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
  <link rel="stylesheet" href="../css/estilos.css">
</head>

<body class="blackground padding">
<?php
    require "header.php";
  ?>
  <div class="container foot">
    <div class="row center">
      <?php
      $titulo="Child´s Play";
      $sinopsis="Después de mudarse a una ciudad nueva, Karen le regala a su hijo Andy un muñeco que se
      convierte en el mejor amigo del niño. Lo que ellos desconocían es que el muñeco es un ser maligno que tiene
      vida propia. Andy deberá aliarse con otros niños vecinos para detener a esta diabólica criatura que está
      provocando muertes en la ciudad.";
      $reparto="REPARTO: Devon Sawa, Zackary Arthur, Alyvia Alyn Lind.";
      $direccion="DIRECCIÓN: Don Mancini.";
      $año="Terror - 1988 - 1h 27 min.";

      $pelicula='<div class=" col-12">
      <h1 class="tittle">'.$titulo.'</h1>
    </div>
  </div>
  <div class="row center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/BhU0cCXYqw0" title="YouTube video player"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <h2 class="tittle">Sinopsis</h2>
      <p class="info2"><span>
      '.$sinopsis.'
        </span>
      </p>
      <p class="info2">
      <span>
      '.$reparto.'
        </span>
      </p>
      <p class="info2">
      <span>
      '.$direccion.'    
        </span>
      </p>
      <p class="info2">
      <span>
      '.$año.'
        </span>
      </p>
    </div>';
      echo $pelicula;

      ?>
        
    </div>
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