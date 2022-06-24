<div class="diaporama">
    <div class="flecheDroit"><img src="../pictures/diaporama/flecheDroit.png" alt="flecheDroit"></div>
    <div class="flecheGauche"><img src="../pictures/diaporama/flecheGauche.png" alt="flecheGauche"></div>
    <div class="nbrSlider"><img src="../pictures/diaporama/nbrSlider.png" alt="nbrSlider"></div>

</div>


<style>
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