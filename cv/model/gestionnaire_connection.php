<?php
if(isset($_COOKIE['prenom']))
{
    $_SESSION['prenom'] = $_COOKIE['prenom'];
}
if(isset($_SESSION['prenom']))
{
    $connecte = $_SESSION['prenom'];
    if($connecte)
    {
        echo "<em><a href='index.php?action=deco&amp;'>Me deconnecter</a></em>";
    }
}