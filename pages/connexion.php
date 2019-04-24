<?php
// Sous WAMP (Windows)
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=recherche_emploi;charset=utf8', 'recherche_emploi', 'recherche_emploi');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>