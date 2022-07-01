<!-- formulaire d'inscription -->
<div id="formSignup" class="hide" style="display:none;">
    <?php/*  if (!empty($_SESSION['user'])) {  */?>
    <!-- <h2>Modification</h2> -->
    <?php/*  } else { */ ?>
    <h2>Inscription</h2>
    <?php/*  }  */?>
    <?php //for ($i=0; $i < count($users); $i++) { ?>
    <form class="" action="" method="post">
        <label for="">Nom <span class="star">*</span></label><br>
            <input required="required" type="text" name="name" value="<?php /*if (!empty($_SESSION)) {echo $_SESSION['user']['name'];} */ ?>">
        <label for="">Prénom <span class="star">*</span></label><br>
            <input required="required" type="text" name="firstname" value="<?php /*if (!empty($_SESSION)) {echo $_SESSION['user']['firstname'];} */ ?>">
        <label for="">N° de téléphone <span class="star">*</span></label><br>
            <input required="required" step="10" type="number" name="phonenumber" value="<?php /* if (!empty($_SESSION)) {echo $_SESSION['user']['phonenumber'];} */ ?>">
        <label for="">Email <span class="star">*</span></label><br>
            <input required="required" type="mail" name="email" value="<?php /* if (!empty($_SESSION)) {echo $_SESSION['user']['email'];} */ ?>">
            <input  type="hidden" name="grad_id" value="<?php /* if (!empty($_SESSION)) {echo $_SESSION['user']['grad_id'];} */ ?>">
    <?php/*  if (empty($_SESSION['user']) || isset($_POST['changePass'])) { */?>
        <label for="">Mot de passe <span class="star">*</span></label>
            <input required="required" type="password" name="password" value="">
        <label for="">Confirmation Mot de passe <span class="star">*</span></label>
            <input required="required" type="password" name="confirmPassword" value=""><br><br>
    <?php/*  } else {  */?>
    <?php/*  }  */?>
            <input type="submit" name="createUser" value="Valider">
    </form>
    <p>Tous les champs <span class="star">* </span>sont requis</p>
</div>