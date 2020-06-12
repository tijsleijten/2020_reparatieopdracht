<?php
require 'header.php';

//als er een boodschap meegegeven is in de url wordt hij met onderstaande code weergegeven.
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}
?>

<h1>FIFA groep X</h1>
<p>Hier moet algemene info over het project komen (eis 802, pas aan werken in sprint RC).</p>
<a href="dashboard.php">Ga naar het dashboard (eis 106) &gt;</a>

<?php
require 'footer.php';
?>