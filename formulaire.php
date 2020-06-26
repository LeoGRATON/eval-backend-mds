<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <style>

    </style>

</head>
<body>
  <form action="method-get.php" method="get">
      Nom du client :     <input type="text" name="lg-nom-du-client" />
      Ville :     <input type="text" name="lg-ville" />
      Numéro de téléphone : <input type="text" name="lg-phone" />
      E-mail :  <input type="text" name="lg-email" />
      <select name="project">
      Type de projet : <option value="wp">Wordpress</option>
      <option value="vue">Vue.js</option>
     </select>
     <div>
       <input type="checkbox" name="lg-contact">
         <label for="contact">Formulaire de contact avancé</label>
      </div>
      <div>
        <input type="checkbox" name="lg-adaptations">
        <label for="adaptations">Adaptations mobile spécifiques</label>
      </div>
      <div>
        <input type="checkbox" name="lg-design">
        <label for="design">Design personnalisé</label>
      </div>
      <input type="submit" name="lg-submit" />
  </form>

</body>
</html>
<?php
