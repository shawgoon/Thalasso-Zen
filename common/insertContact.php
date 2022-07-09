<?php include('../header.php'); ?>
<?php $insertSuccess = $instance -> prepare("INSERT INTO contacts (choice, firstname, name, email, message)
VALUES (:choice,:firstname,:name,:email,:message)"); 
$insertSuccess ->execute(array(
    "choice" => $_POST["choice"],
    "firstname" => $_POST["firstname"],
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "message" => $_POST["message"]
  ));
if ($insertSuccess) {
    $message = "Votre message nous est bien parvenu.";
    // header("Location: ../succes.php");
} else {
    $message = "Votre message ne nous est pas parvenu !";
    // header("location: ../error-404.php");
}
?>
<div class="message">
        <h5 class=""><?php echo $message ?></h5>
        <p>Nous vous apporterons une réponse très prochainement.</p>
  </div>
<?php include('../footer.php'); ?>