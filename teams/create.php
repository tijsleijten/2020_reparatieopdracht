<?php
require '../header.php';

//als er een boodschap meegegeven is in de url wordt hij met onderstaande code weergegeven.
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}
?>

<div class="form">
<form action="../backend/teamsController.php" method="post">
    <input type="hidden" name="type" value="create">

    
    <!-- zelf formuliervelden maken -->


    <div class="form-group">
        <input type="submit" value="Maak nieuw team">
    </div>

</div>

</form>

<?php
require '../footer.php';
?>