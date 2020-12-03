<?php
require('model/autoloader.class.php');

function voir()
{
    require('vue/accueil.php');
}
function regarder()
{
    require('vue/regarder.php');
}

function coucou()
{
    $nouveau = new NeManager();
    $elle = $nouveau->getMon();
    require('vue/elle.php');
}
function verifier()
{
    $nouveau = new NeManager();
    $verif = $nouveau->verifNom();
    $estBon = password_verify($_POST['nom'],$verif['nom']);

        if (!$verif)
        {
                echo 'Erreur de renseignement';
        }
        else
        {
            if($estBon) {
                             session_start();
                             $_SESSION['prenom'] = $_POST['prenom'];
                            //  $id = $_SESSION['id'];
                            //  echo $id;
                             echo 'Bienvenue';
                             echo ' </br>';
                        }
            else {
                    echo 'Mauvais identifiant ou mot de passe !';
                 }
        }
   // echo var_dump($verif);
    require('vue/moncompte.php');
}
function abonner()
{
    session_start();
    $nouveau = new NeManager();
    $id = $nouveau->getMonCv();

    $_SESSION['idp'] = $id;

    require('vue/moncompte.php');
}
function voirMon()
{
    session_start();
    // echo '     tsdjfkh gjksdfhgjklhsdfnkgvndfhklgnsdfhkloto      '.$_SESSION['idp'];
    $idperso = $_SESSION['idp'];
    $nouveau = new NeManager();
    $vais = $nouveau->getVoirCv($idperso);
    require('vue/voir.php');
}
function deco()
{
    session_start();
    $_SESSION = array();
    session_destroy();    
}