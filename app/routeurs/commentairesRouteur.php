<?php
/*
  ../app/routeurs/commentaires.php
  Routeur des commentaires
 */
use \App\Controleurs\CommentairesControleur;

include_once '../app/controleurs/commentairesControleur.php';

switch ($_GET['commentaire']) {
  case 'add':
    CommentairesControleur\addAction($connexion, $_POST['pseudo'], $_POST['commentaire']);
    break;
  case 'delete':
    CommentairesControleur\deleteAction($connexion, $_GET['id']);
    break;
  case 'update':
    CommentairesControleur\updateAction($connexion, ['texte' => $_POST['texte'], 'id' => $_GET['id']]);
    break;
}
