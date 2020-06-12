<?php
require 'header.php';

//als er een boodschap meegegeven is in de url wordt hij met onderstaande code weergegeven.
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}
?>

<h1>DASHBOARD</h1>
<p>Deze pagina moet beveiligd zijn, ofwel: je moet 'm pas kunnen zien als je bent ingelogd.. Dat ga je zelf nog bouwen!</p>

<ul>
	<li><strong>Teams:</strong></li>
	<li><a href="teams/index.php">Teams bekijken (eis 203)</a></li>
	<li><a href="teams/create.php">Nieuw team maken (eis 201)</a></li>
	<li><strong>Hier volgen de andere links vanaf het dashboard:</strong></li>
	<li>...</li>
</ul>

<?php
require 'footer.php';
?>