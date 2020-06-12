<?php
require '../header.php';

//als er een boodschap meegegeven is in de url wordt hij met onderstaande code weergegeven.
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

//alle gegevens uit tabel teams worden er uit gehaald
//...

//we loopen door al onze teams en geven ze stuk voor stuk weer met onderstaande list-items. Elk item is een link naar een detailpagina.
//...
?>

<h1>Alle teams:</h1>

<!--Met deze link gaan we naar ons formulier om een nieuw team toe te voegen.-->
<p><a href="create.php">Maak een nieuw team</a></p>

<?php
require '../footer.php';
?>