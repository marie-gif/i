<?php ob_start();?>
<section>



<h2>Inscription Cv</h2>



<form action = "index.php?action=coucou" method ="POST">
  
  <label for="votreNom">Votre Nom :</label>
  <input type="text" name="nom">
  <label for="votrePrenom">Votre Prenom :</label>
  <input type="text" name="prenom">
  <input type="submit" value="m'inscrire">

</form>
</section>

<?php               
$content = ob_get_clean();
require "vue/template.php";
?>
