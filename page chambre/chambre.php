<?php include('../header.php'); ?>
<style>
    /* changement de css nav */
    nav{
        background: #504646;
    }
    nav a{
        color: #4FF216;
    }
</style>

<main>
<p style="font-size:3em;">C'est la page chambre</p>
    <section>
        <div class="diaporama">
            <div class="flecheDroit">
                <img src="http://localhost/Thalasso-Zen/assets/pictures/diaporama/flecheDroit.png" alt="flecheDroit">
            </div>
            <div class="flecheGauche">
                <img src="http://localhost/Thalasso-Zen/assets/pictures/diaporama/flecheGauche.png" alt="flecheGauche">
            </div>
            <div class="nbrSlider">
                <img src="http://localhost/Thalasso-Zen/assets/pictures/diaporama/nbrSlider.png" alt="nbrSlider">
            </div>
        </div>
    </section>
    <section>
    <div class="sectionNosChambre">
        <div class="sectionNosChambreSide">
            <div class="grandTitre">Nos Chambres</div>


            <section class="chambreFamille">
                <div class="petitTitre">Chambre Famille</div>
                <div class="divChambre">
                    <div class="imageChambre"></div>
                    <p class="texteChambre">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus cumque nobis architecto quidem quod, hic deserunt perspiciatis est natus aliquam dolores saepe tenetur eveniet deleniti repellat temporibus qui molestiae porro! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic accusamus, commodi sit aliquid rem nulla, quis assumenda quos asperiores, sint nobis minima omnis praesentium nihil autem dicta perferendis voluptatum!</p>
                </div>
                <button class="buttonAchat">réserver cette chambre</button>
            </section>
            <section class="chambreCouple">
                <div class="petitTitre">Chambre Couple</div>
                <div class="divChambre">
                <div class="imageChambre"></div>
                    <p class="texteChambre">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus cumque nobis architecto quidem quod, hic deserunt perspiciatis est natus aliquam dolores saepe tenetur eveniet deleniti repellat temporibus qui molestiae porro! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic accusamus, commodi sit aliquid rem nulla, quis assumenda quos asperiores, sint nobis minima omnis praesentium nihil autem dicta perferendis voluptatum!</p>
                </div>
                <button class="buttonAchat">réserver cette chambre</button>
            </section>
            <section class="chambreAmi">
                <div class="petitTitre">Chambre Ami</div>
                <div class="divChambre">
                <div class="imageChambre"></div>
                    <p class="texteChambre">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus cumque nobis architecto quidem quod, hic deserunt perspiciatis est natus aliquam dolores saepe tenetur eveniet deleniti repellat temporibus qui molestiae porro! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic accusamus, commodi sit aliquid rem nulla, quis assumenda quos asperiores, sint nobis minima omnis praesentium nihil autem dicta perferendis voluptatum!</p>
                </div>
                <button class="buttonAchat">réserver cette chambre</button>
            </section>
        </div>
    </div>
    </section>
</main>

<!-- /* css Will */ -->

<style>      

/* section diaporama */
.diaporama {
    position: relative;
    width: 100%;
    height: 50vh;
    background-color: black;
}
.flecheDroit,
.flecheGauche,
.nbrSlider {
    display: flex;
    position: absolute;
    width: 5rem;
    height: 100%;
}
.flecheDroit {
    right: 0;
    align-items: center;
}
.flecheGauche {
    left: 0;
    align-items: center;
}
.nbrSlider {
    width: 100%;
    justify-content: center;
    align-items: end; 
}
.flecheDroit img, .flecheGauche img{
    width: 100%;
}
.nbrSlider img{
    width: 5rem;
    padding-bottom: 1.5rem;
}

/* section chambres */
.sectionNosChambre{
    background-color: #505050;
}

.sectionNosChambreSide{
    width: 90%;
    margin: 0 auto;
    padding-bottom: 5rem;
}

.grandTitre{
    color: #4FF216;
    font-size: 5rem;
    letter-spacing: 1rem;
    text-align: center;
    padding: 3rem 0 5rem 0;
}

.petitTitre{
    color: #4FF216; 
    font-size: 3rem;
    letter-spacing: 1rem;
    text-align: center;
    margin: 4rem 0;
}

.divChambre{
    display: flex;
    justify-content: space-between;
    margin: 2rem 0;
}

.imageChambre{
    background-color: white;
    width: 30%;
    height: 25vh;
}

.texteChambre{
    width: 60%;
    color: #4FF216;
    text-align: center;
    display: flex;
    align-items: center;
}

.buttonAchat{
    background-color: red;
    width: 100%;
    border: none;
    letter-spacing: 1rem;
    font-size: 2rem;
    padding: 0.5rem 0;
    margin: 3rem 0 10rem 0;
}
</style>


<?php include('../footer.php'); ?>
<style>
    /* changement de css footer */
footer{
    background: #504646;
    color: #4FF216;
}
footer a{
    color: #4FF216;
}
</style>