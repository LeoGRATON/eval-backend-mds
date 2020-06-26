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
      <select name="lg-project">
      Type de projet : <option value="wp" name="lg-wordpress">Wordpress</option>
      <option value="vue" name="lg-vue">Vue.js</option>
     </select>
     <div>
       <input type="checkbox" name="check[]">
         <label for="contact" name="contact" value="form-contact">Formulaire de contact avancé</label>
      </div>
      <div>
        <input type="checkbox" name="check[]">
        <label for="adaptations" name="adaptations">Adaptations mobile spécifiques</label>
      </div>
      <div>
        <input type="checkbox" name="check[]">
        <label for="lg-design" name="design">Design personnalisé</label>
      </div>
      <input type="submit" name="lg-submit" />
  </form>

</body>
</html>
<?php
