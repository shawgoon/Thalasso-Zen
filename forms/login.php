<!-- formulaire de connexion -->
<div id="formLogin" class="hide" style="display:none;">
  <h2>Connexion</h2>
  <form class="" action=" " method="post">
    <label for="">Votre identifiant</label><br>
      <input required="required" step="10" type="text" name="phonenumber" placeholder="Votre numéro de téléphone">
    <label for="">Votre mot de passe</label><br>
      <input required="required" type="password" name="password" placeholder="Votre mot de passe"><br><br>
      <?php if (isset($_POST['phonenumber']) && isset($_POST['password'])) { ?>
    <input type="hidden" name="userId" value="<?php echo $user['id'] ?>">
      <?php } ?>
      <input type="submit" name="userName" value="connexion">
  </form>
</div>