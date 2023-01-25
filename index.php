<?php
session_start();

$password = "pass123"; // Définir votre mot de passe ici

if (isset($_POST["password"]) && $_POST["password"] == $password) {
    $_SESSION["authentified"] = true;
}

if (isset($_SESSION["authentified"]) && $_SESSION["authentified"] == true) {
    // Afficher le contenu protégé
    echo "Contenu protégé";
} else {
    // Afficher un message d'erreur
    echo "Mot de passe incorrect";
}
?>

<link rel="stylesheet" href="style.css">