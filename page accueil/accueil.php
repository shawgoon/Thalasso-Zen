<?php include('./header.php'); ?>

<nav>
    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="http://localhost/Thalasso-Zen/page chambre/chambre.php">Chambres</a></li>
        <li><a href="http://localhost/Thalasso-Zen/page activite/activite.php">Activités</a></li>
        <li><a href="http://localhost/Thalasso-Zen/page resto - bar/resto - bar.php">Resto - Bar</a></li>
        <li><a href="http://localhost/Thalasso-Zen/page reservation/reservation.php">Reservation</a></li>
    </ul>
</nav>
<main>
<section id="slideShow">
    <div class="container">
        <div class="silder">
            <figure>
                <img class="image" src="http://localhost/Thalasso-Zen/pictures/accueil/le domaine.jpg" alt=""/>
                <figcaption>Le domaine</figcaption>
            </figure><!-- 
            --><figure>
                <img class="image" src="http://localhost/Thalasso-Zen/pictures/accueil/canal boisé.jpg" alt=""/>
                <figcaption>Le canal boisé</figcaption>
            </figure><!-- 
            --><figure>
                <img class="image" src="http://localhost/Thalasso-Zen/pictures/accueil/equipe.jpg" alt=""/>
                <figcaption>Notre équipe</figcaption>
            </figure>
        </div>
    </div>
</section>
<section>
    <div id="aPropos">
        <div>
            <div>
                <h3>A propos</h3>
            </div>
        </div>
        <p>Situé entre Dieppe et Rouen dans la vallée  de la Scie, 
        notre établissement est un hâvre de paix et de relaxation 
        pour la famille, les couples, ou bien entre amis.
        La cadre idilique en bord de rivière relaxant en tout point.
        Et avec toutes nos activités vous repartirez détendu.</p>
    </div>
    <div id="parc">
        <div>
            <div>
                <h3>Notre parc</h3>
            </div>
        </div>
        <p>Des promenades agréables et reposantes.</p>
        <img src="http://localhost/Thalasso-Zen/pictures/accueil/canal boisé.jpg" alt="canal boisé">
    </div>
    <div>
        <img src="http://localhost/Thalasso-Zen/pictures/accueil/equipe.jpg" alt="notre équipe">
        <div>
            <div>
                <h3>Notre équipe</h3>
            </div>
        </div>
        <p>Jeune et dynamique, notre équipe sera aux petits soins pour vous.</p>
    </div>
</section>
<section>
    <a href="http://localhost/Thalasso-Zen/page reservation/reservation.php">
        <div id="reservation">
            <p>Réservez dès maintenant</p>
        </div>
    </a>
</section>
</main>
<?php include('./footer.php'); ?>

