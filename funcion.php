<!DOCTYPE html>
<html lang="es">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Función</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="blackground padding">

  <?php
  require "header.php";
  ?>

<div class="container">
    <div class="row center">
      <div class="col 12">
        <h1 class="tittle">Reserva mirá o tus películas en 3 pasos: </h1>
      </div>
    </div>
    <div class="row center">
      <div class="col col-sm-4 col-md-4 col-lg">
        <img src="img/banner_more/movie.png" alt="pelicula" class="funImg center" width="512" height="512">
        <div class="center">
          <p class="info"><strong>1.</strong>
            <span>Elegí la película.</span>
          </p>
        </div>
      </div>
      <div class=" col col-sm-4 col-md-4 col-lg">
        <img src="img/banner_more/codigo.png" alt="codigo" class="funImg center" width="512" height="512">
        <div class="center">
          <p class="info"><strong>2.</strong>
            <span>Escanea el código
              <br>
              para ver la película.</span>
          </p>
        </div>
      </div>
      <div class=" col col-sm-4 col-md-4 col-lg">
        <img src="img/banner_more/telefono.png" alt="celular" class="funImg center" width="512" height="512">
        <div class="center">
          <p class="info"><strong>3.</strong>
            <span>¡Mirala en
              <br>
              tu dispositivo!
            </span>
          </p>
        </div>
      </div>
    </div>
    <!-- Probar poniendo cada informacion,titulo, como si fueran articulos -->
    <section>
      <?php
        $tittle=array("¿Cómo funciona?","¿Cuáles son los pasos para ver una película?","Desde la compra", "¿cuántos días tengo para ver la película?","¿A dónde me contacto si tengo un problema con el código?");
        $informacion= array("Mi función es una plataforma de venta de códigos de películas que se estrenan
        exclusivamente en salas digitales/fisicas exhibidas por tiempo limitado.<br> Una vez que elijas tu película
        y confirmes el proceso, podrás disfrutar tu película desde tu dispositivo o sala. Cada semana, una nueva
        película estará disponible en la cartelera"," Elegí la película que querés ver, seguí los pasos y completá tu compra. Una vez confirmada la operación, vas
        a recibir un código para acceder y ver la película en tu dispositivo. Ingresá el código en la aplicación web
        (www.cining.com.ar/play), o descargá la aplicación CINING y listo, ya podés disfrutar tu película!","Tenés 72 hs para verla desde confirmada la compra y podrás visualizarla hasta un máximo de 3 intentos.
        Cada vez que actualices o cierres tu navegador, estarás consumiendo un intento.","La plataforma de visualización de la película es propiedad de CINING. Si necesitás asistencia técnica o
        tenés algún problema con tu código de visualización, contactate por mail a cineonline.com.ar.
        Ante cualquier inconveniente con tu compra, contactanos.");
        
        for($i=0; $i<=3; $i++){
          echo '<article class="col-12 col-sm-12 col-md-12 col-lg-12">
          <h2 class="tittle">'.$tittle[$i].'</h2>
          <p class="info2"><span>'.$informacion[$i].'</span>
          </p>
          </article>';
        }
    
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