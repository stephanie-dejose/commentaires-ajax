<?php
/*
    ./app/vue/commentaires/add.php
    variables disponibles:
    - $commentaires: ARRAY(ARRAY(id, texte, pseudo, created_at, updated_at))
*/
?>

<li class="collection-item avatar post" data-id="<?php echo $commentaireID; ?>">
  <i class="material-icons circle green">insert_chart</i>
  <div class="title"><?php echo $pseudo; ?></div>
  <div class="text truncate"><?php echo $commentaire; ?></div>
  <div>
    <a href="#" class="edit">Editer le texte</a> |
    <a href="#" class="delete">Supprimer la publication</a>
  </div>
</li>
