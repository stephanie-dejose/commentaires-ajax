<?php
/*
    ./app/controleurs/commentairesControleur.php
 */
namespace App\Controleurs\CommentairesControleur;
use \App\Modeles\CommentairesModele AS Commentaire;

function indexAction(\PDO $connexion) {
  // Je vais chercher la liste des commentaires
    include '../app/modeles/commentairesModele.php';
    $commentaires = Commentaire\findAll($connexion);

  // Je charge la vue index dans $content1
    GLOBAL $content1, $title;
    $title = COMMENTAIRES_INDEX_TITLE;
    ob_start();
      include '../app/vues/commentaires/index.php';
    $content1 = ob_get_clean();
}

function addAction(\PDO $connexion, string $pseudo, string $commentaire) {
  // J'ajoute le commentaire dans la DB
    include_once '../app/modeles/commentairesModele.php';
    $commentaireID = Commentaire\addOne($connexion, $pseudo, $commentaire);
    //$commentaire = Commentaire\findOneById($commentaireID);
    include '../app/vues/commentaires/add.php';
}

function deleteAction(\PDO $connexion, int $id) {
  // Je demande au modèle de virer le commentaire
  // Et je retourne un booléen vers le JS
    include_once '../app/modeles/commentairesModele.php';
    echo Commentaire\deleteOneById($connexion, $id);
}

function updateAction(\PDO $connexion, array $data) {
  // Je demande au modèle de virer le commentaire
    include_once '../app/modeles/commentairesModele.php';
    echo Commentaire\updateOneById($connexion, $data);
}
