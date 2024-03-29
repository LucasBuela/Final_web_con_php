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
        <h1 class="tittle">Contacto</h1>
        <p class="info">Si deseas contactarnos puedes hacerlo en este formulario o en las redes sociales.</p>
      </div>
    </div>
    <?php
    // Definir las variables y setear sus valores:
    $nameError = $emailError = $apellidoError = $messageError = "";
    $name = $email = $apellido = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameError = "<p><span class='error'>* Campo requerido</span></p>";
      } else {
        $name = test_input($_POST["name"]);
      }

      if (empty($_POST["email"])) {
        $emailError = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }

      if (empty($_POST["apellido"])) {
        $apellidoError = "Campo requerido";
      } else {
        $apellido = test_input($_POST["apellido"]);
      }
      if (empty($_POST["message"])) {
        $messageError = "Campo valido";
      } else {
        $message = test_input($_POST["message"]);
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
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 form">
          <!-- <p><span class="error">* required field</span></p> -->
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
              <input type="text" class="form-control is-invalid" id="name" name="name" placeholder="Nombre" maxlength="15" required>
            </div>
            <div class="invalid-feedback error">Complete este campo.</div>
            <div>
              <input type="text" class="form-control is-valid" id="apellido" name="apellido" placeholder="Apellido" maxlength="15">
            </div>
            <div class="valid-feedback">Campo valido.</div>
            <div>
              <input type="email" class="form-control is-invalid" id="email" name="email" placeholder="E-mail" maxlength="30" required>
            </div>
            <div class="invalid-feedback">Complete este campo.</div>
            <div>
              <textarea name="message" class="form-control is-invalid" id="message" cols="30" rows="10" maxlength="400" placeholder="Mensaje" required></textarea>
            </div>
            <div class="valid-feedback">Campo valido.</div>
            <div>
              <button type="submit" name="submit" id="submit">Enviar
            </div>
          </form>
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
        $archivo = file_get_contents("../datos_contact.json");
        $arreglodatos = json_decode($archivo, true);
        //armo el arreglo con los datos del formulario:
        $miarreglo = array("name" => $name, "email" => $email, "apellido" => $apellido, "message" => $message);
        //agregar este arreglo al arreglo en memoria:
        array_push($arreglodatos, $miarreglo);

        //Convertimos el arreglo a formato json:
        $salidaJson = json_encode($arreglodatos);
        //Lo guardamos:
        file_put_contents("../datos_contact.json", $salidaJson)
        ?>
        <section class="col-12 col-sm-12 col-md-12 col-lg-4">
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.7248819937686!2d-58.458479284237875!3d-34.56052056272199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5d35b8bc4b1%3A0x9e4d4bbc42e0bee5!2sMultiplex%20Belgrano%201%2C%202%2C%203!5e0!3m2!1ses-419!2sar!4v1624844914737!5m2!1ses-419!2sar" width="100" height="250" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
          <div>
            <a href="register.php">Crea una cuenta</a>
            <a href="https://accounts.google.com/signin/v2/usernamerecovery?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank"><br />¿Olvidaste tu contraseña?</a>
          </div>
          </sectcion>
      </div>
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