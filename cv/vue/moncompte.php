<?php ob_start();?>
<section>
<h2>Mon Compte</h2>

<?php


if (isset($_SESSION['prenom']))
{
    echo 'Bonjour ' . $_SESSION['prenom'];
    $mon = $_SESSION['prenom'];
    echo 'bonjour' .$mon;
    echo '<a href="index.php?action=voirMon" method = "GET">Voir mon cv </a></em>';
    echo var_dump($mon);
}
else
{
    echo 'bye';
    
}

?>


<form action = "index.php?action=abonner" method ="POST">
  <input type="hidden" value= "<?php $mon ?>"> 
  <label for="adresse" >Votre adresse :</label>
  <input type="text" value="votre adresse" name="adresse">
  </br>
  <label for="telephone">Votre téléphone :</label>
  <input type="text" value="" name="telephone">
  </br>
  <label for="mail">Votre mail :</label>
  <input type="text" value="" name="mail">
  </br>
  <textarea name="experience" rows="8" cols="">
Votre experience professionelle.
</textarea>
</br>
<textarea name="competence" rows="8" cols="">
Vos competences professionelle.
</textarea>
</br>
  <input type="checkbox" name="permis" checked="checked" />
  <select name="choix">
    <option value="choix1">a</option>
    <option value="choix2">B</option>
    <option value="choix3">bsr</option>
    <option value="choix4">camion</option>
</select>

</br>
<textarea name="langue" rows="" cols="">
Langue
</textarea>
</br>
  <input type="checkbox" name="poli" checked="checked" />
  <select name="choix">
    <option value="choix1">Cordialement</option>
    <option value="choix2">Bien Cordialement</option>
    <option value="choix3">Je vous remercie</option>
    <option value="choix4">A très vite j'éspère</option>
</select>
</br>
  <input type="submit" value="valider mon cv">

</form>
</section>

<?php               
$content = ob_get_clean();
require "vue/template.php";
?>

