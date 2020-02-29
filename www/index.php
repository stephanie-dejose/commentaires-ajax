<?php
/*
  ./www/index.php
 */

 require_once '../noyau/init.php'; //$connexion PDO et $content1=''
 include_once '../app/routeur.php'; // Hydrater $zone1 grâce à $connexion

 // On ne charge le template QUE SI on n'est PAS EN AJAX !!!
if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
        && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
require_once '../app/vues/templates/default.php'; // on affiche $content1
}
