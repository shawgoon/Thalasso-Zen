<div id="contactWrap" class="hideContent" style="display:none;">
<h3>Nous contacter</h3>
    <form action="" method="post">
      <label for="">Nom <span>*</span></label><br>
      <input type="text" name="name" placeholder="votre nom"><br>
      <label for="">Prénom <span>*</span></label><br>
      <input type="text" name="firstname" placeholder="votre prénom"><br>
      <label for="">Email <span>*</span></label><br>
      <input type="email" name="email" placeholder="votre email"><br>
      <label for="">Votre message <span>*</span></label><br>
      <textarea rows="5em" cols="80%" name="message" placeholder="votre message"></textarea>
      <br><br>
      <input type="submit" name="send" placeholder="envoyer">
    </form>
    <p><span>*</span> champs obligatoire</p>
</div>
<style>
  h3{
    display: flex;
    justify-content: center;
    padding: 0.5em;

  }
    #contactWrap{
      width: 100%;height: 45vh;
      background-image: url(../assets/pictures/hidden-picts/bambou-gauche.webp);
      background-repeat: no-repeat;
      background-size: 100%;
    }
    form{
      margin: 0 auto;
      width: 80%;
    }
    #contactWrap span{
      color: red;
    }
    input
    {
      width: 100%;height: 2em;
      padding: 0 .3em;
    }
    textarea{
      width: 100%;height: 6em;
      padding: 0 .3em;
    }
    #contactWrap p{
      margin: 0.5em 10%;
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
    } 
</style>
