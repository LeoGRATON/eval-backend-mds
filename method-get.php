<?php
   if ( isset( $_GET['lg-submit'] ) ) {

     $nom = $_GET['lg-nom-du-client'];
     $ville = $_GET['lg-ville'];
     $phone = $_GET['lg-phone'];
     $email = $_GET['lg-email'];


     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>';
     echo 'Nom : ' . $nom . '   /Ville : ' . $ville . '   /Téléphone du client : ' . $phone . '   /E-mail : ' . $email;
     exit;
  }
?>
