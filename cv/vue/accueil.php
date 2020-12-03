<?php ob_start();?>
<section>
	
<h2> Veuillez vous inscrire afin de pouvoir creer votre cv :<h2>

   <!-- <em><a href="index.php?action=regarder&amp;">M'inscrire</a></em>
   <em><a href="index.php?action=deco&amp;">Me deconnecter</a></em> -->

   </section>

<?php               
$content = ob_get_clean();
require "vue/template.php";
?>
