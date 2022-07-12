<?php include ('../pdo.php');
session_start();?>
<?php //include('/header.php'); var_dump($_SESSION);?>
<div class="message">
  <?php if (!empty($_SESSION)){ ?>
      <h5 class=""><?= $message ?></h5>
      <p>Ravie de vous revoir <?= $users['firstname']; ?>.</p>
      <p>Vous allez être rediriger vers l'accueil dans 5 secondes.</p>
  <?php } ?>
</div>
  <?php //include('/footer.php'); ?>
<?php sleep(5);
header('Location: http://localhost/Thalasso-Zen/index.php'); ?>