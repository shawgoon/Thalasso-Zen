<?php include('../header.php'); ?>


<!-- requête de suppression d'un message -->

<?php $deleteSuccess = $instance -> prepare("DELETE  FROM contacts WHERE id =".$_POST["id"]);
$deleteSuccess ->execute(array(
    "id" => $_POST["id"],
  ));
if ($deleteSuccess) {
    $message = "Le message a été supprimé !";
} else {
    $message = "Le message n'a pas été supprimé !";
}
?>

    <div class="message">
      <h5 class=""><?php echo $message ?></h5>
      <a href="http://localhost/Thalasso-Zen/adminUpdate/updateMessage.php">Retour à la liste</a>
  </div>
<?php include('../footer.php'); ?>