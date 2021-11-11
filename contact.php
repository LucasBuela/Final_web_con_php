<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
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
      <div class="col-12">
        <h1 class="tittle">Contacto</h1>
        <p class="info">Si deseas contactarnos puedes hacerlo en este formulario o en las redes sociales.</p>
      </div>
    </div>
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $websiteErr = "";
    $name = $email = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }

      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
      }
    }

    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
    <section>
      <div class="row center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 form">
          <!-- <form method="POST">
    <label for="name" class="form-label"></label>
    <input type="text" class="form-control is-invalid" placeholder="Nombre" id="name" required>
    <div class="invalid-feedback">
    Please choose a name.
    </div>
    <label for="apellido" class="form-label"></label>
    <input type="text" class="form-control is-valid" placeholder="Apellido" id="apellido" required>
    <div class="valid-feedback">
      Not require.
    </div>
    <label for="mail" class="form-label"></label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="email" class="form-control is-invalid" id="mail" name="mail" placeholder="E-mail" required>
      <div id="mailFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    <label for="password" class="form-label"></label>
    <input type="password" class="form-control is-invalid" placeholder="Contraseña" id="password" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
    </div>
    <textarea name="message" id="message" cols="30" rows="10" maxlength="400" placeholder="Mensaje"></textarea>
  <input type="submit" name="submit" id="submit">
</form>
</div> -->
          <!-- </div> -->
          <!-- <p><span class="error">* required field</span></p> -->
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" class="form-control is-invalid" id="name" name="name" required placeholder="Nombre y Apellido" maxlength="15">
            <div class="invalid-feedback">
            <span class="error"> Please choose a name. <?php echo $nameErr; ?></span>
            <br><br>
            <input type="email" class="form-control is-invalid" id="mail" name="mail" required placeholder="E-mail" maxlength="30">
            <span class="error">Please choose a username. <?php echo $emailErr; ?></span>
              <br><br>
              <!-- <label for="password"></label>
              <input type="password" class="form-control is-invalid" id="password" required placeholder="Contraseña" name="password" maxlength="12">
              <span class="error"><?php echo $websiteErr; ?></span>
              <br><br> -->
              <textarea name="message" id="message" cols="30" rows="10" maxlength="400" placeholder="Mensaje"></textarea><br>
              <input type="submit" name="submit" id="submit">
          </form>
          <!-- <form action="index.php" method="POST">
            <input type="text" id="name" name="name" required placeholder="Nombre y Apellido" maxlength="30"><br>
            <label for="mail"></label>
            <input type="email" id="mail" name="mail" required placeholder="E-mail" maxlength="30"><br>
            <textarea name="message" id="message" cols="30" rows="10" maxlength="400" placeholder="Mensaje"></textarea><br>
            <input type="submit" name="submit" id="submit">
          </form> -->
        </div>
        <?php
        // echo "<h2>Los datos enviados a json:</h2>";
        // echo $name;
        // echo "<br>";
        // echo $email;
        // echo "<br>";
        // echo $website;
        // echo "<br>";

        //abrir el archivo datos.json y subirlo a memoria
        $archivo = file_get_contents("datos.json");
        $arreglodatos = json_decode($archivo, true);
        //armo el arreglo con los datos del formulario
        $miarreglo = array("name" => $name, "email" => $email, "sitio" => $website);
        array_push($arreglodatos, $miarreglo);
        //agregar este arreglo al arreglo en memoria

        //convierto el arreglo a formato JSON  y lo guardo
        $salidaJson = json_encode($arreglodatos);
        file_put_contents("datos.json", $salidaJson)
        ?>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.7248819937686!2d-58.458479284237875!3d-34.56052056272199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5d35b8bc4b1%3A0x9e4d4bbc42e0bee5!2sMultiplex%20Belgrano%201%2C%202%2C%203!5e0!3m2!1ses-419!2sar!4v1624844914737!5m2!1ses-419!2sar" width="100" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <div class="cinemas">
            <div class="cinema">
              <a class="movie-theater" href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419" target="_blank"><img class="location" src="img/banner_more/locator-map.svg" alt="Multiplex Adress">Multiplex Lavalle</a>
            </div>
            <div class="cinema">
              <a class="movie-theater" href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419" target="_blank"><img class="location" src="img/banner_more/locator-map.svg" alt="Multiplex Adress">Multiplex Belgrano</a>
            </div>
            <div class="cinema">
              <a class="movie-theater" href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419" target="_blank"><img class="location" src="img/banner_more/locator-map.svg" alt="Multiplex Adress">Multiplex
                Arte</a>
            </div>
            <div class="cinema">
              <a class="movie-theater" href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419" target="_blank"><img class="location" src="img/banner_more/locator-map.svg" alt="Multiplex Adress">Multiplex Palmas</a>
            </div>
          </div>
          <div>
            <a href="/index.html">Crea una cuenta</a><br>
            <a href="/index.html">¿Olvidaste tu contraseña?</a>
          </div>
        </div>
      </div>
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