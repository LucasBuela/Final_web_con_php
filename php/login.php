<!-- Login Form -->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/estilos.css">
</head>

<body class="blackground padding">
  <?php
  require "header.php";
  ?>
  <div class="container">
    <div class="row center">
      <div class="col-12">
        <h1 class="tittle">Log in</h1>
        <p class="info">Introduce un e-mail y contraseña para acceder.</p>
      </div>
    </div>
    <?php
    // Definir las variables y setear sus valores:
    $emailError = $passwordError ="";
    $email = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["email"])) {
        $emailError = "Campo requerido";
      } else {
        $email = test_input($_POST["email"]);
      }

      if (empty($_POST["password"])) {
        $passwrodError = "Contraseña invalida";
      } else {
        $password = test_input($_POST["password"]);
      }
    }

    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    // Validacion de contraseña
    $contra=$password;
    if($contra==1234){
      echo "Contraseña valida";
    }else if($contra==""){
      echo "Complete el campo";
    }else{
      echo "Contraseña invalida";
    }
    ?>
    <section class="login-buttom">
      <div class="row center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 form login">
          <!-- <p><span class="error">* required field</span></p> -->
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="was-validated">
            <div>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" maxlength="30" required>
              <div class="valid-feedback">
              Usuario valido.
             </div>
            <div class="invalid-feedback">
              Ingrese usuario.
        </div>
          </div>
            <div>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" maxlength="10" required>
             <div class="valid-feedback">
              Contraseña valida.
              </div>
              <div class="invalid-feedback">
              Ingrese contraseña
          </div>            
              </div>
              <div>
              <button type="submit" name="submit" id="submit">Enviar
            </div>
            <div>
            <a href="register.php">Crea una cuenta</a><br>
            <a href="https://accounts.google.com/signin/v2/usernamerecovery?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank" >¿Olvidaste tu contraseña?</a><br>
          </div><br>
          </form>
          <div class="cinemas">
            <div class="cinema">
              <a class="movie-theater" href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419" target="_blank"><img class="location" src="../img/banner_more/locator-map.svg" alt="Multiplex Adress"><br>Multiplex<br> Lavalle</a>
            </div>
            <div class="cinema">
              <a class="movie-theater" href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419" target="_blank"><img class="location" src="../img/banner_more/locator-map.svg" alt="Multiplex Adress"><br>Multiplex<br> Belgrano</a>
            </div>
            <div class="cinema">
              <a class="movie-theater" href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419" target="_blank"><img class="location" src="../img/banner_more/locator-map.svg" alt="Multiplex Adress"><br>Multiplex<br>
                Arte</a>
            </div>
            <div class="cinema">
              <a class="movie-theater" href="https://www.google.com/maps/place/Multiplex+Belgrano+1,+2,+3/@-34.560525,-58.456291,15z/data=!4m5!3m4!1s0x0:0x9e4d4bbc42e0bee5!8m2!3d-34.5605511!4d-58.4563351?hl=es-419" target="_blank"><img class="location" src="../img/banner_more/locator-map.svg" alt="Multiplex Adress"><br>Multiplex<br> Palmas</a>
            </div>
          </div>
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
        $archivo = file_get_contents("../datos_login.json");
        $arreglodatos = json_decode($archivo, true);
        //armo el arreglo con los datos del formulario:
        $miarreglo = array("email" => $email, "password"=> $password);
        //agregar este arreglo al arreglo en memoria:
        array_push($arreglodatos, $miarreglo);

        //Convertimos el arreglo a formato json:
        $salidaJson = json_encode($arreglodatos);
        //Lo guardamos:
        file_put_contents("../datos_login.json", $salidaJson)
        ?>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
        <div id="miCarousel" class="carousel slide" data-ride="carousel" data-interval="2300">
      <!-- Imagenes-->
      <div class="carousel-inner banner">
        <div class="carousel-item active">
        <img src="../img/movies/spiderman.jpg" alt="spiderman" width="500" height="700">
        </div>
        <div class="carousel-item">
        <img src="../img/movies/spiderman.jpg" alt="spiderman" width="500" height="700">
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