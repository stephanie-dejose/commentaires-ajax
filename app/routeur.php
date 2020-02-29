<?php
/*
  ./app/routeur.php
 */

 /*
 ROUTE POUR SUPPRIMER UN COMMENTAIRE
 PATTERN: /commentaire/delete
 CTRL: commentairesControleur
 ACTION: deleteAction
 */

 if (isset($_GET['commentaire'])):
   include '../app/routeurs/commentairesRouteur.php';

/*
ROUTE PAR DEFAUT
PATTERN: /
CTRL: commentairesControleur
ACTION: index
*/
else:
  include '../app/controleurs/commentairesControleur.php';
  \App\Controleurs\CommentairesControleur\indexAction($connexion);
endif;
