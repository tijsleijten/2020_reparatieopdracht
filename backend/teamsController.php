<?php
require 'connection.php';

//als de gebruiker rechtstreeks probeert te navigeren naar deze controller wordt hij terugverwezen naar het dashboard, omdat hij vanuit een post-verzoek (form in dit geval) moet komen.
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    $msg = "Je kunt deze pagina alleen bereiken via een veilige form-invoer.";
    header("location: ../dashboard.php?msg=$msg");
    exit;
}


if($_POST['type'] == 'create'){

	$name = $_POST['name'];
	//...  <--- Andere velden nog invullen!

	//we inserten de gegevens uit ons formulier met de tussenstap placeholders om sql-injectie te voorkomen.
	//pas later koppelen we de placeholders aan de daadwerkelijke variabelen.
	
	//...

	//we geven een boodschap mee aan de gebruiker die op dashboard.php wordt laten zien als een team succesvol is toegevoegd.
	$msg = "Team is succesvol toegevoegd.";
	header("location: ../dashboard.php?msg=$msg");
	exit;
}

if($_POST['type'] == 'delete'){
	
	//Zie vooral ook de lessen PHP-Basics!
	//...

	//Check ook of het verwijderen wel mag (eis 202)

}


?>