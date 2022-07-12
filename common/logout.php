<?php include ('../pdo.php');?>
<?php 
    session_start();
    // On supprime la session, ce qui va déconnecter l'utilisateur.
    unset($_SESSION['user']);
    if (empty($_SESSION['user'])) { 
        $message = "Vous êtes déconnecté avec succès.";
    }
    ?>
    <div class="message">
        <h5 class=""><?php echo $message ?></h5>
        <?php if (empty($_SESSION)){ ?>
            <p>Au revoir.</p>
        <?php } else {?>
            <p>Vous êtes encore là ^^</p>
        <?php } ?>
    </div>
    
    
    
    <?php
       header('Location: http://localhost/Thalasso-Zen/index.php'); // renseigner la bonne adresse d'hébergeur( localhost)
       exit();
    ?>