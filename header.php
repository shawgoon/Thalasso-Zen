<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thalasso Zen</title>
    <link rel="stylesheet" href="http://localhost/Thalasso-Zen/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/Thalasso-Zen/assets/css/accueil.css">
    <!-- <link rel="stylesheet" href="http://localhost/Thalasso-Zen/assets/css/activite.css">
    <link rel="stylesheet" href="http://localhost/Thalasso-Zen/assets/css/chambre.css">
    <link rel="stylesheet" href="http://localhost/Thalasso-Zen/assets/css/resto-bar.css">
    <link rel="stylesheet" href="http://localhost/Thalasso-Zen/assets/css/reservation.css"> -->
    <script src="http://localhost/Thalasso-Zen/assets/js/hide.js" defer></script>
    <script src="http://localhost/Thalasso-Zen/assets/js/master.js" defer></script>
</head>
<body>
    <header>
        <div id="headerImg"></div>
        <div id="logo">
        <h1>Thalasso<br>
            <span>ZEN</span></h1>
        </div>
        
        <div id="login"><a href="#formSignup">Inscription</a> | <a href="#formLogin">Connexion</a></div>
    </header>
    <div id="content" style="display:none;"></div>
        <div id="wrapper" style="display:none;">
            <?php include "/forms/signup.php" ?>
            <?php include "/forms/login.php" ?>
        </div>
    

    <nav>
        <ul>
            <li><a href="http://localhost/Thalasso-Zen/page accueil/accueil.php">Accueil</a></li>
            <li><a href="http://localhost/Thalasso-Zen/page chambre/chambre.php">Chambres</a></li>
            <li><a href="http://localhost/Thalasso-Zen/page activite/activite.php">Activités</a></li>
            <li><a href="http://localhost/Thalasso-Zen/page resto-bar/resto-bar.php">Resto - Bar</a></li>
            <li><a href="http://localhost/Thalasso-Zen/page reservation/reservation.php">Reservation</a></li>
        </ul>
    </nav>
    
