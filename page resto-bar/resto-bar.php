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
<p style="font-size:3em;">C'est la page resto-bar</p>
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
</main>
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