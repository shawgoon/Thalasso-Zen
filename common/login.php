<?php include ('../pdo.php');?>
<?php $connected = false;

session_start();

if (isset($_POST['phonenumber']) && isset($_POST['password'])) {

  $sql = "SELECT *
  FROM users
  WHERE phonenumber = '".$_POST['phonenumber']."'AND password = '".$_POST['password']."'";
  $users = $instance->query($sql)->fetch();
  
  if ($users) {
    $_SESSION['user'] = array(
      "userName" => $users['firstname'],
      "userId" => $users['user_id'],
      "grad" => $users['grad_id']
    );
    $connected = true;
}?>

  <?php if ($connected) { ?>
    <?php header('Location: http://localhost/Thalasso-Zen/index.php'); //donner votre adresse de la page d'accueil
    // $message = "vous êtes connecté !";
    exit();?>
  <?php } else { ?>
  
    <?php
    // $message = "vous n'êtes pas connecté ^^";
    header('Location: http://localhost/Thalasso-Zen/error-404.php');
    exit();
    ?>
  <?php } ?>
<?php } ?>
<div class="message">
        <h5 class=""><?php echo $message ?></h5>
        <?php if ($connected){ ?>
          <p>Ravie de vous revoir <?= $users['firstname']; ?>.</p>
       <?php } else {?>
        <p>Try again !</p>
        <?php } ?>
  </div>

