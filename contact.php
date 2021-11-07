<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
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
<body class="blackground padding">
<?php
    require "header.php";
  ?>
  <div class="container">
    <div class="row center">
      <div class="col-12">
        <h1 class="tittle">Contacto</h1>
        <p class="info">Si deseas contactarnos puedes hacerlo en este formulario o en las redes sociales.</p>
      </div>
    </div>
    <section>
    <div class="row center">
      <div class="col-12 col-sm-12 col-md-12 col-lg-8 form">
        <form action="#" method="get">
          <input type="text" id="name" name="name" required placeholder="Nombre y Apellido" maxlength="30"><br>
          <label for="mail"></label>
          <input type="email" id="mail" name="mail" required placeholder="E-mail" maxlength="30"><br>
          <textarea name="message" id="message" cols="30" rows="10" maxlength="400"
            placeholder="Mensaje"></textarea><br>
          <input type="submit" name="submit" id="submit">
        </form>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-4">
        <iframe class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.7248819937686!2d-58.458479284237875!3d-34.56052056272199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5d35b8bc4b1%3A0x9e4d4bbc42e0bee5!2sMultiplex%20Belgrano%201%2C%202%2C%203!5e0!3m2!1ses-419!2sar!4v1624844914737!5m2!1ses-419!2sar"
          width="100" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <div class="cinemas">
          <div class="cinema">
            <a class="movie-theater"
              href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419"
              target="_blank"><img class="location" src="img/banner_more/locator-map.svg"
                alt="Multiplex Adress">Multiplex Lavalle</a>
          </div>
          <div class="cinema">
            <a class="movie-theater"
              href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419"
              target="_blank"><img class="location" src="img/banner_more/locator-map.svg"
                alt="Multiplex Adress">Multiplex Belgrano</a>
          </div>
          <div class="cinema">
            <a class="movie-theater"
              href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419"
              target="_blank"><img class="location" src="img/banner_more/locator-map.svg"
                alt="Multiplex Adress">Multiplex
              Arte</a>
          </div>
          <div class="cinema">
            <a class="movie-theater"
              href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419"
              target="_blank"><img class="location" src="img/banner_more/locator-map.svg"
                alt="Multiplex Adress">Multiplex Palmas</a>
          </div>
        </div>
      </div>
    </div>
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