<?php

function connexionBDD()
{
	try
	{		
	$bdd = new PDO('mysql:host=localhost;port=3306;dbname=thalasso-zen;', 'root', '');
	}
	
	catch(Exception $e)
	{
		echo 'Erreur:'.$e->getMessage();
    }
	return $bdd;
}



