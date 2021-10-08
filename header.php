<?php 
$txt_header='

<header>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark background">
   <div class="container">
     <a class="navbar-brand" href="index.html">
       <img src="img/banner_more/cineOnline.png" alt="Logo" width="98" height="28">
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
       aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarText">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <a class="nav-link" href="index.php">Cartelera<span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="html/clasic.html">Clasicos</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="html/funcion.html">Mi Funcion</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="html/contact.html">Contacto</a>
         </li>
       </ul>
     </div>
   </div>
 </nav>
</header>';

echo $txt_header;

?>