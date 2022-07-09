<?php include('../header.php'); ?>


<?php $insertSuccess = $instance -> prepare("INSERT INTO users (firstname, name, phonenumber, email, password, grad_id)
VALUES (:firstname,:name,:phonenumber,:email,:password,:grad_id)"); 
$insertSuccess ->execute(array(
    "firstname" => $_POST["firstname"],
    "name" => $_POST["name"],
    "phonenumber" => $_POST["phonenumber"],
    "email" => $_POST["email"],
    "password" => $_POST["password"],
    "grad_id" => 1
  ));
if ($insertSuccess) {
    $message = "Vous avez été ajouté !";
    // header("Location: ../succes.php");
} else {
    $message = "Vous n'avez pas été ajouté !";
    // header("location: ../error-404.php");
}
?>
<div class="message">
        <h5 class=""><?php echo $message ?></h5>
        <p>Vous pouvez dès à présent vous connecter au site.</p>
  </div>
<?php include('../footer.php'); ?>