<?php include('../header.php'); ?>

<!-- requête de mise à jour d'utilisateur -->

<?php if(isset($_POST['updateUser'])){

  $sql = "UPDATE users SET 
      firstname = '".$_POST['firstname']."',
      name = '".$_POST['name']."',
      phonenumber = '".$_POST['phonenumber']."',
      email = '".$_POST['email']."',
      password = '".$_POST['password']."',
      
      WHERE user_id=" .$_POST['userId']; var_dump($sql);

      $updateSuccess = $instance->exec($sql);
      if ($updateSuccess) {
        // return true;
        $message = ", ton compte a été modifié !";
      } else {
        $message = ", ton compte n'a pas été modifié !";
      } ?>
  <?php } ?>
  <div class="message">
      <h5 class=""><?= $_POST['firstname'] ?><?= $message ?></h5>
      <a href="http://localhost/Thalasso-Zen/index.php">Retour à l'accueil</a>
  </div>
<?php include('../footer.php'); ?>