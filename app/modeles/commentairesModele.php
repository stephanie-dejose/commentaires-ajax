<?php
/*
    ./app/modeles/commentairesModele.php
 */
namespace App\Modeles\CommentairesModele;

/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll(\PDO $connexion) :array {
  $sql = "SELECT *
          FROM commentaires
          ORDER BY created_at DESC;";

  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function addOne(\PDO $connexion, string $pseudo, string $commentaire){
  $sql = "INSERT INTO commentaires
          SET pseudo = :pseudo,
              texte = :texte,
              created_at = NOW();";

  $rs = $connexion->prepare($sql);
  $rs->bindValue(':pseudo', $pseudo, \PDO::PARAM_STR);
  $rs->bindValue(':texte', $commentaire, \PDO::PARAM_STR);
  $rs->execute();
  // Je retourne l'ID du commentaire
  return $connexion->lastInsertId();
}

function deleteOneById(\PDO $connexion, int $id) :bool {
  $sql = "DELETE FROM commentaires
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  return $rs->execute();
}

function updateOneById(\PDO $connexion, array $data) :bool {
  $sql = "UPDATE commentaires
          SET texte = :texte
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':texte', $data['texte'], \PDO::PARAM_STR);
  $rs->bindValue(':id', $data['id'], \PDO::PARAM_INT);
  return $rs->execute();
}
