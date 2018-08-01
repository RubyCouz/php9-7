<?php
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
$futurDay = mktime(0, 0, 0, date('m'), date('d')+20, date(Y));

 ?>
 <!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Prédiction</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- affichage du résultat -->
          <p>
Dans 20 jours, nous serons le <?php echo strftime('%A %e %B %Y', $futurDay) ?>.
          </p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Fermer</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer aussi...</button>
        </div>
      </div>
    </div>
  </div>
        <script src="assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" charset="utf-8"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" charset="utf-8"></script>
   <script src="assets/js/script.js" charset="utf-8"></script>
  </body>
</html>
