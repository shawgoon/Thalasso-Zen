<?php include('../header.php'); ?>


<!-- requête de suppression d'un utilisateur -->

<?php $deleteSuccess = $instance -> prepare("DELETE  FROM view WHERE id_view =".$_POST["id_view"]);
$deleteSuccess ->execute(array(
    "id_view" => $_POST["id_view"],
  ));
if ($deleteSuccess) {
    $message = "L'avis a été supprimé !";
} else {
    $message = "L'avis n'a pas été supprimé !";
}
?>

    <div class="message">
      <h5 class=""><?php echo $message ?></h5>
      <a href="http://localhost/Thalasso-Zen/adminUpdate/updateView.php">Retour à la liste</a>
  </div>
<?php include('../footer.php'); ?>