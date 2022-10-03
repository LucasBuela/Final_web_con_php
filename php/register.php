<!-- Register Form -->
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

<body class="blackground padding">
  <?php
  require "header.php";
  ?>
  <div class="container">
    <div class="row center">
      <div class="col-12">
        <h1 class="tittle">Registro</h1>
        <p class="info">Registrate para formar parte y acceder a los servicios.</p>
      </div>
    </div>
    <?php
    // Definir las variables y setear sus valores:
    $nameError = $emailError = $apellidoError = $passwordErr  = "";
    $name = $email = $apellido = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameError = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
      }

      if (empty($_POST["email"])) {
        $emailError = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }

      if (empty($_POST["apellido"])) {
        $apellidoError = null;
      } else {
        $apellido = test_input($_POST["apellido"]);
      }
      if (empty($_POST["password"])) {
        $passwordErr = "Campo requerido";
      } else {
        $password = test_input($_POST["password"]);
      }
      if (empty($_POST["password"])) {
        $passwordErr = "Campo requerido";
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
    <section class="login-buttom">
      <div class="row center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 form">
          <!-- <p><span class="error">* required field</span></p> -->
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
              <input type="text" class="form-control is-invalid" id="name" name="name" placeholder="Nombre" maxlength="15" required>
            </div>
            <div class="invalid-feedback"></div>
            <span class="error"><?php echo $nameError; ?></span>
            <div>
              <input type="text" class="form-control is-valid" id="apellido" name="apellido" placeholder="Apellido" maxlength="15">
            </div>
            <span class="error"><?php echo $apellidoError; ?></span>
            <div>
              <input type="email" class="form-control is-invalid" id="email" name="email" placeholder="E-mail" maxlength="30" required>
            </div>
            <div>
              <input type="password" class="form-control is-invalid" id="password" placeholder="Contraseña" name="password" maxlength="12" required>
              <span class="error"><?php echo $passwordErr; ?></span>
            </div>
            <div>
              <input type="password" class="form-control is-invalid" id="password" placeholder="Confirmar contraseña" name="password" maxlength="12" required>
              <span class="error"><?php echo $passwordErr; ?></span>
            </div>
            <div>
              <button type="submit" name="submit" id="submit">Enviar
            </div>
            <a href="login.php">¿Ya tienes una cuenta?</a><br>
            <a href="https://accounts.google.com/signin/v2/usernamerecovery?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">¿Olvidaste tu contraseña?</a>
          </form>
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
      $archivo = file_get_contents("../datos_register.json");
      $arreglodatos = json_decode($archivo, true);
      //armo el arreglo con los datos del formulario:
      $miarreglo = array("name" => $name, "apellido" => $apellido, "email" => $email,  "password" => $password, "confirm password" => $password);
      //agregar este arreglo al arreglo en memoria:
      array_push($arreglodatos, $miarreglo);

      //Convertimos el arreglo a formato json:
      $salidaJson = json_encode($arreglodatos);
      //Lo guardamos:
      file_put_contents("../datos_register.json", $salidaJson)
      ?>
    </section>
  </div>
  <!--Footer-->
  <?php
  require "footer.php";
  ?>
  <!-- Scroll -->
  <?php
  require "scroll.php";
  ?>
</body>

</html>