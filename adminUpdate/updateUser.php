<?php include('../header.php'); ?>

<!-- requête de mise à jour d'utilisateur -->

<?php $sql = "UPDATE users SET 
      firstname = '".$_POST['firstname']."',
      name = '".$_POST['name']."',
      phonenumber = '".$_POST['phonenumber']."',
      email = '".$_POST['email']."',
      password = '".$_POST['password']."',
      grad_id = '".$_POST['grad_id']."',
      my_zip = '".$_POST['my_zip']."',
      WHERE id=" .$_POST['userId'];
  $updateSuccess = $instance->exec($sql);
      if ($updateSuccess) {
        // return true;
        $message = "L'utilisateur a été modifié !";
      } else {
        $message = "L'utilisateur n'a pas été modifié !";
      } ?>
  <div class="message">
      <h5 class=""><?php echo $message ?></h5>
      <a href="http://localhost/Thalasso-Zen/index.php">Retour à l'accueil</a>
  </div>
<?php include('../footer.php'); ?>