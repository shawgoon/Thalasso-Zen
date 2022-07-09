<?php include('../header.php'); ?>


<!-- requête de suppression d'une réservation -->

<?php $deleteSuccess = $instance -> prepare("DELETE  FROM reservations WHERE id_reservation =".$_POST["id_reservation"]);
$deleteSuccess ->execute(array(
    "id_reservation" => $_POST["id_reservation"],
  ));
if ($deleteSuccess) {
    $message = "La réservation a été supprimé !";
} else {
    $message = "La réservation n'a pas été supprimé !";
}
?>

    <div class="message">
      <h5 class=""><?php echo $message ?></h5>
      <a href="http://localhost/Thalasso-Zen/adminUpdate/updateReservation.php">Retour à la liste</a>
  </div>
<?php include('../footer.php'); ?>