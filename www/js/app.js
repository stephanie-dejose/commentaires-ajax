/*
  ./www/js/app.js
 */

$(function(){

  /* ---------------------------------------
      AJOUT D'UN COMMENTAIRE
  --------------------------------------- */

  // Je capture l'envoi du formulaire
  $('#form_commentaires').submit(function(e){
    e.preventDefault();
    $.ajax({
      url: 'commentaire/add',
      data: {
        pseudo: $('#pseudo').val(),
        commentaire: $('#commentaire').val()
      },
      method: 'post'
    })
    .done(function(reponsePHP){
      $('#listeDesPosts').prepend(reponsePHP).find('li:first').hide().slideDown();
    })
    .fail(function(){
      alert("Problème durant la transaction !");
    });

  });

/* ---------------------------------------
    SUPPRESSION D'UN COMMENTAIRE
--------------------------------------- */

  $('#listeDesPosts').on('click','.delete', function(e){
    e.preventDefault();
    if(confirm("Etes-vous certain de vouloir supprimer l'enregistrement ?")) {
      $.ajax({
        url: 'commentaire/delete/' + $(this).closest('li').attr('data-id'),
        context: this
      })
      .done(function(reponsePHP){
        if(reponsePHP == 1) {
          $(this).closest('li').slideUp(function(){
            $(this).remove();
          });
        }
      })
      .fail(function(){
        alert("Problème durant la transaction !");
      });
    }
  });

/* --------------------------------------------
    EDITION D'UN COMMENTAIRE : FORUMAIRE .edit
-------------------------------------------- */

  $('#listeDesPosts').on('click','.edit',function(e){
    e.preventDefault();
    $(this).toggleClass('edit validate').text('Valider les modifications');
    let elementTexte = $(this).closest('li').find('.text');
    let contenu = elementTexte.text();
    elementTexte.html('<input type="text"/>')
                .find('input')
                .val(contenu);
  });

  /* ------------------------------------------------------
      EDITION D'UN COMMENTAIRE (AJAX) : FORUMAIRE .validate
  ------------------------------------------------------ */

  $('#listeDesPosts').on('click', '.validate', function(e){
    let contenu = $(this).closest('li').find('.text input').val();
    e.preventDefault();
    $.ajax({
        url: 'commentaire/update/' + $(this).closest('li').attr('data-id'),
        data: {
          texte: contenu
        },
        method: 'post',
        context: this
    })
    .done(function(reponsePHP){
      $(this).closest('li').find('.text').html(contenu);
      $(this).toggleClass('edit validate').text('Editer les modifications');
    })
    .fail(function(e){
      console.log(e);
    });
  });

  $('#listeDesPosts').on('keyup','.text input',function(e){
    if(e.keyCode == 13) {
      let contenu = $(this).val();
      e.preventDefault();
      $.ajax({
          url: 'commentaire/update/' + $(this).closest('li').attr('data-id'),
          data: {
            texte: contenu
          },
          method: 'post',
          context: this
      })
      .done(function(reponsePHP){
        $(this).closest('li')
               .find('.validate')
               .toggleClass('edit validate')
               .text('Editer le texte');
        $(this).closest('.text').html(contenu);
      })
      .fail(function(e){
        console.log(e);
      });
    }
  });
});
