<div class="row">
  <div class="form-group">
  <h2>S'inscrire</h2>
  <?php
    if (!empty($erreurs_inscription)) {
      echo '<ul>';
      foreach ($erreurs_inscription as $e) {
        echo '  <li>' . $e . '</li>';
      }
      echo '</ul>';
    }
    echo $form_inscription;
   ?>

  </div>
</div>
