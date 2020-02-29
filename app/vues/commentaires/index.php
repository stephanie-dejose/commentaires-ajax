<?php
/*
    ./app/vue/commentaires/index.php
    variables disponibles:
    - $commentaires: ARRAY(ARRAY(id, texte, pseudo, created_at, updated_at))
*/
?>

<ul id="listeDesPosts" class="collection">
   <?php foreach ($commentaires as $commentaire): ?>
     <li class="collection-item avatar post" data-id="<?php echo $commentaire['id']; ?>">
         <i class="material-icons circle green">insert_chart</i>
         <div class="title"><?php echo $commentaire['pseudo']; ?></div>
         <div class="text truncate"><?php echo $commentaire['texte']; ?></div>
         <div>
           <a href="#" class="edit">Editer le texte</a> |
           <a href="#" class="delete">Supprimer la publication</a>
         </div>
     </li>
   <?php endforeach; ?>
 </ul>
