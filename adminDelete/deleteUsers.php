<?php include('../header.php'); ?>


<!-- requête de suppression d'un utilisateur -->

<?php $deleteSuccess = $instance -> prepare("DELETE  FROM users WHERE user_id =".$_POST["user_id"]);
$deleteSuccess ->execute(array(
    "user_id" => $_POST["user_id"],
  ));
if ($deleteSuccess) {
    $message = "L'utilisateur a été supprimé !";
} else {
    $message = "L'utilisateur n'a pas été supprimé !";
}
?>

    <div class="message">
      <h5 class=""><?php echo $message ?></h5>
      <a href="http://localhost/Thalasso-Zen/adminUpdate/updateUsers.php">Retour à la liste</a>
  </div>
<?php include('../footer.php'); ?>