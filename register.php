<!-- Register Form -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
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
  <?php

$nombreErr = $emailErr = $generoErr = $paisErr = "";
$nombre = $email = $genero = $comentario = $pais = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombreErr = "Campo requerido";
  } else {
    $nombre = test_input($_POST["nombre"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Campo requerido";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["pais"])) {
    $pais = "";
  } else {
    $pais = test_input($_POST["pais"]);
  }

  if (empty($_POST["comentario"])) {
    $comentario = "";
  } else {
    $comentario = test_input($_POST["comentario"]);
  }

  if (empty($_POST["genero"])) {
    $generoErr = "Campo requerido";
  } else {
    $genero = test_input($_POST["genero"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Formulario registro</h2>
<p><span class="error">* Campos requeridos</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="nombre">
  <span class="error">* <?php echo $nombreErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Pais: <input type="text" name="pais">
  <span class="error"><?php echo $paisErr;?></span>
  <br><br>
  Comentario: <textarea name="comentario" rows="5" cols="40"></textarea>
  <br><br>
  Genero:
  <input type="radio" name="genero" value="femenino">Femenino
  <input type="radio" name="genero" value="masculino">Masculino
  <input type="radio" name="genero" value="otro">Otro
  <span class="error">* <?php echo $generoErr;?></span>
  <br><br>
  <input type="submit" name="Registrarse" value="Registrarse">  
</form>

<?php
echo "<h2>Datos:</h2>";
echo $nombre;
echo "<br>";
echo $email;
echo "<br>";
echo $pais;
echo "<br>";
echo $comentario;
echo "<br>";
echo $genero;
?>




<!--Footer-->
<?php
  require "footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>