<?php
$password = "pass123"; // Définir votre mot de passe ici
?>

<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="content">
        <form action="index.php" method="post">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required placeholder="Votre mot de passe ici" maxlength="8">
            <input type="submit" value="Envoyer">
        </form>
    </div>
</div>
