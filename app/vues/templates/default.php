<?php
/*
  ./app/vues/templates/defaut.php
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Vos commentaires - <?php echo $title; ?></title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        <style>
            nav {
                padding-left: 30px;
            }
            #sectionPrincipale {
                margin-top: 30px;
            }
            .collection .collection-item{
                min-height: 0px !important;
            }

        </style>
    </head>
    <body>
        <nav class="grey darken-2">
                    <div class="nav-wrapper">
                      <a href="#" class="brand-logo left">Vos commentaires</a>
                    </div>
                  </nav>
        <section class="container" id="sectionPrincipale">
            <!--Formulaire-->
            <div class="row">
                <div class="col m4">
                    <form id="form_commentaires" class="card-panel">
                        <div class="input-field"><i class="material-icons prefix">account_circle</i>
                             <input type="text" id="pseudo" class="validate" required="required" />
                             <label for="pseudo">Votre pseudo</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">mode_edit</i>
                             <textarea id="commentaire" class="materialize-textarea validate" required="required"></textarea>
                             <label for="commentaire">Votre commentaire</label>
                        </div>
                        <div><button class="btn waves-effect waves-light" type="submit">Envoyer
                               <i class="material-icons right">send</i>
                             </button>
                        </div>
                    </form>
                </div>

<!-- ################### LISTE DES POSTS ###################### -->
                <div class="col m8">
                    <?php echo $content1; ?>
                </div>
<!-- ################### FIN DE LISTE DES POSTS ###################### -->

            </div>
        </section>

         <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Vos commentaires</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Menu</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#">Gestion des membres du personnel</a></li>
                  <li><a class="grey-text text-lighten-3" href="#">Autre page de gestion</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            ©2015 IEPS
            <a class="grey-text text-lighten-4 right" href="#!">Site public</a>
            </div>
          </div>
        </footer>
        <script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
        <script src='js/app.js'></script>
    </body>
</html>
