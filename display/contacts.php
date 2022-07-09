<div id="contactWrap" class="hideContent" style="display:none;">
<h4>Nous contacter</h4>
    <form action="../common/insertContact.php" method="post">
      <select name="choice">
        <option value=""><< Sélectionnez >></option>
        <option value="renseignements">Renseignements</option>
        <option value="autre">Autre</option>
      </select><br>
      <label for="">Prénom <span class="star">*</span></label><br>
        <input type="text" name="firstname" placeholder="votre prénom"><br>
      <label for="">Nom <span class="star">*</span></label><br>
        <input type="text" name="name" placeholder="votre nom"><br>
      <label for="">Email <span class="star">*</span></label><br>
        <input type="email" name="email" placeholder="votre email"><br>
      <label for="">Votre message <span class="star">*</span></label><br>
        <textarea rows="5em" cols="80%" name="message" placeholder="votre message"></textarea>
      <br><br>
        <input type="submit" name="send" placeholder="envoyer">
    </form>
    <p><span class="star">*</span> champs obligatoire</p>
</div>
<style>
  h4{
    display: flex;
    justify-content: center;
    padding: 0.5em;
    font-size: 1.5em;
    color: #4FF216;
  }
    #contactWrap{
      width: 100%;height: 45vh;
      background-image: url(../assets/pictures/hidden-picts/bambou-gauche.webp);
      background-repeat: no-repeat;
      background-size: cover;
    }
    form{
      margin: 0 auto;
      width: 80%;
    }
    input
    {
      width: 100%;height: 1.6em;
      padding: 0 .3em;
    }
    textarea{
      width: 100%;height: 5em;
      padding: 0 .3em;
    }
    #contactWrap p{
      margin: 0.5em 10%;
      color: #4FF216;
    }

    /***** responsive Desktop *****/  

    @media screen and (min-width:576px){
      #contactWrap{
        width: 60%;
        margin: 0 auto;
      }
      form{
        width: 50%;
      }
      #contactWrap p{
      margin: 0.5em 25%;
    }
    } 
</style>
