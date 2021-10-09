<?php 
$txt_header='

<header>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark background">
   <div class="container">
     <a class="navbar-brand" href="index.php">
       <img src="img/banner_more/cineOnline.png" alt="Logo" width="98" height="28">
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
       aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarText">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <a class="nav-link" href="index.php">Cartelera php<span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="clasic.php">Clasicos php</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="funcion.php">Mi Funcion php</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="contact.php">Contacto php</a>
         </li>
       </ul>
     </div>
   </div>
 </nav>
</header>';

echo $txt_header;

?>