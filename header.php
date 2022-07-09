<?php require __dir__.'/common/initSession.php'; ?>
<?php include ('/pdo.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thalasso Zen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://localhost/Thalasso-Zen/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/Thalasso-Zen/assets/css/table.css">
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
<!-- affichage de session -->
        <div id="login"> 
			<?php if (!empty($_SESSION)) {  ?>
    <!-- affichage privé -->
            <div>
                <span class="session">Bonjour, <?php echo $_SESSION ['user']['userName']; ?></span><br>
                <a class="logout" href="../common/logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Déconnexion</a>
            </div>
            <?php } else { ?>
    <!-- affichage public	 -->
            <div><a href="#formSignup">Inscription</a> | <a href="#formLogin">Connexion</a></div>
            <?php } ?>
        </div>
    </header>
    <div id="content" style="display:none;"></div>
        <div id="wrapper" style="display:none;">
            <?php include "/forms/formSignup.php"; ?>
            <?php include "/forms/formLogin.php"; ?>
        </div>
    <?php if (!empty($_SESSION)) { ?>
        <nav id="session">
            <ul>
                <li><button class="userUpdate" href="#formSignup" value="">Modifier mes informations</button>
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['grad'] ?>"></li>
                <?php if (!empty($_SESSION['user']['grad'] >= 3)) { ?>  
                    <li>      
                        <select class="adminUpdate" name="admin" id=""onChange="location = this.options[this.selectedIndex].value;">
                            <option value=""><<-- Selectionnez -->></option>
                            <option value="http://localhost/Thalasso-Zen/data/dataUsers.php"><a href="">Utilisateurs</a></option>
                            <option value="http://localhost/Thalasso-Zen/data/dataMessage.php"><a href="">Messages</a></option>
                            <option value="http://localhost/Thalasso-Zen/data/dataReservation.php"><a href="">Réservations</a></option>
                            <option value="http://localhost/Thalasso-Zen/data/dataBedroom.php"><a href="">Chambres</a></option>
                            <option value="http://localhost/Thalasso-Zen/data/dataGrad.php"><a href="">Grade</a></option>
                            <option value="http://localhost/Thalasso-Zen/data/dataView.php"><a href="">Avis</a></option>
                        </select>   
                    </li>
                <?php  } ?>   
            </ul>
        </nav>            
        
    <?php } ?>
    <nav id="public">
        <ul>
            <li><a href="http://localhost/Thalasso-Zen/page accueil/accueil.php">Accueil</a></li>
            <li><a href="http://localhost/Thalasso-Zen/page chambre/chambre.php">Chambres</a></li>
            <li><a href="http://localhost/Thalasso-Zen/page activite/activite.php">Activités</a></li>
            <li><a href="http://localhost/Thalasso-Zen/page resto-bar/resto-bar.php">Resto-Bar</a></li>
            <li><a href="http://localhost/Thalasso-Zen/page reservation/reservation.php">Reservation</a></li>
        </ul>
    </nav>
    
