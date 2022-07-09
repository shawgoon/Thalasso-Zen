<?php
// insérez vos coordonées d'herbegement
$user = "root";
$mdp = "";
$host = "localhost";
$dbName = "Thalasso-Zen";

try
{
  $instance = new PDO ("mysql:host=".$host.";dbname=".$dbName, $user, $mdp, array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ));
} catch (PDOException $e){
  die('Erreur :'.$e->getMessage());
} ?>