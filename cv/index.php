<?php
// define("URL",str_replace("index.php","",(isset($_SERVER["HTTPS"])
// ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require('controlleur/controlleur.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'voir') {
            voir();
        }
            if ($_GET['action'] == 'regarder') {
            //  if (isset($_GET['id']) && $_GET['id'] > 0) {
                regarder();
            }
           
            // if ($_GET['action'] == 'chaleur') {
            //     chaleur();
            // }
            if ($_GET['action'] == 'coucou') {
                coucou();
            }
            if ($_GET['action'] == 'verifier') {
                verifier();
            }
            if ($_GET['action'] == 'abonner') {
                abonner();
            }
            if ($_GET['action'] == 'voirMon') {
                // voirMon(12);
                
            //  if (isset($_SESSION['idp']) && $_SESSION['idp'] > 0) {
                voirMon();
            //  }
            }
            elseif ($_GET['action'] == 'deco') {
                deco();
            }
            else {
                throw new Exception();
            }
        }
    
    else {
        voir();
    }
}
catch(Exception $e) {
    echo ' ' . $e->getMessage();
}