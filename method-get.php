<?php
   if ( isset( $_GET['lg-submit'] ) ) {

     $nom = $_GET['lg-nom-du-client'];
     $ville = $_GET['lg-ville'];
     $phone = $_GET['lg-phone'];
     $email = $_GET['lg-email'];
     $email = $_GET['lg-email'];

     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>';
     echo 'Nom : ' . $nom . '   /Ville : ' . $ville . '   /Téléphone du client : ' . $phone . '   /E-mail : ' . $email;
     if(isset($_GET['lg-project'])){
                if($_GET['lg-project'] == "wp"){
                        echo "Vous avez choisi <b>wordpress</b>";
                }elseif($_GET['lg-project'] == "vue"){
                        echo "Vous avez choisi <b>Vue.js</b>";
                }
        }

        $choix1= $_GET['lg-email'];

        if(isset($_GET['check'])){
                   foreach ($_GET['check'] as $valeur) {
                     echo "Vous avez choisi <b>Contact</b>";
                   }
           }
        exit;
  }
?>
