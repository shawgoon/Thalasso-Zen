
<!-- formulaire d'inscription -->
<div id="formSignup" class="hide" style="display:none;">
    <?php if (!empty($_SESSION['user'])) { ?>
    <?php 
        $sql = "SELECT * FROM users WHERE user_id"; //=" .$_POST['userId'];
        $users = $instance->query($sql)->fetch/* All */();
    ?>
    <h2>Modification</h2>
        <form class="" action="../common/updateUser.php" method="post">
    <?php } else { ?>
    <h2>Inscription</h2>
        <form class="" action="../common/insertUser.php" method="post">
    <?php } ?>
            <label for="">Nom <span class="star">*</span></label><br>
                <input required="required" type="text" name="name" value="<?php if (!empty($_SESSION)) {echo $users['name'];} ?>">
            <label for="">Prénom <span class="star">*</span></label><br>
                <input required="required" type="text" name="firstname" value="<?php if (!empty($_SESSION)) {echo $users['firstname'];} ?>">
            <label for="">N° de téléphone <span class="star">*</span></label><br>
                <input required="required" step="10" type="text" name="phonenumber" value="<?php if (!empty($_SESSION)) {echo $users['phonenumber'];} ?>">
            <label for="">Email <span class="star">*</span></label><br>
                <input required="required" type="mail" name="email" value="<?php if (!empty($_SESSION)) {echo $users['email'];} ?>">
                <input  type="hidden" name="grad_id" value="<?php if (!empty($_SESSION)) {echo $users['grad_id'];} ?>">
        <?php if (empty($_SESSION['user']) || isset($_POST['changePass'])) {?>
            <label for="">Mot de passe <span class="star">*</span></label>
                <input required="required" type="password" name="password" value="">
            <label for="">Confirmation Mot de passe <span class="star">*</span></label>
                <input required="required" type="password" name="confirmPassword" value=""><br><br>
        <?php } else { ?>
        <?php } ?>
        <?php if (!empty($_SESSION['user'])) { ?>
                <input type="submit" name="updateUser" value="Modifier">
            <?php } else { ?>
                <input type="submit" name="createUser" value="Valider">
        <?php } ?>
        </form>
    <p>Tous les champs <span class="star">* </span>sont requis</p>
</div>