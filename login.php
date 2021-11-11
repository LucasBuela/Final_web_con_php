<!-- Login Form -->
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

<body class="blackground">
  <?php
  require "header.php";
  ?>
  <div class="container">
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $passwordErr = "";
    $name = $email = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Campo requerido.";
      } else {
        $name = test_input($_POST["name"]);
      }

      if (empty($_POST["email"])) {
        $emailErr = "Campo requerido.";
      } else {
        $email = test_input($_POST["email"]);
      }

      if (empty($_POST["password"])) {
        $passwordErr = "Contraseña invalida";
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
    ?>
    <section class="login">
      <div class="row center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 form">
          <!-- <p><span class="error">* required field</span></p> -->
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" class="form-control is-invalid" id="name" name="name" placeholder="Nombre" maxlength="15" required >
            <div class="invalid-feedback">
            <span class="error"><?php echo $nameErr; ?></span>
            <br><br>
            <input type="email" class="form-control is-invalid" id="email" name="email" placeholder="E-mail" maxlength="30" required >
            <span class="error"><?php echo $emailErr; ?></span>
              <br><br>
              <label for="password"></label>
              <input type="password" class="form-control is-invalid" id="password" placeholder="Contraseña" name="password" maxlength="12" required >
              <span class="error"><?php echo $passwordErr; ?></span>
              <br><br>
              <input type="submit" name="submit" id="submit">
          </form>
        </div>
        </div>
    </section>
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
        $miarreglo = array("name" => $name, "email" => $email, "password" => $password);
        array_push($arreglodatos, $miarreglo);
        //agregar este arreglo al arreglo en memoria

        //convierto el arreglo a formato JSON  y lo guardo
        $salidaJson = json_encode($arreglodatos);
        file_put_contents("datos.json", $salidaJson)
        ?>
  <!--Footer-->
  <?php
  require "footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>