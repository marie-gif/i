<?php ob_start();?>
<section>
	<h2>
Veuillez rentrer vos informations de confirmation :
<h2>
<form action = "index.php?action=verifier" method ="POST">
  
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
 