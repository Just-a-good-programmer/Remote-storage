<?php
require_once 'db_conectie';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $role = $_POST['role'];


$statement 

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="stylesheet" href="styling_page.css">
</head>
<body>
    <header class="header">
        <img src="afbeeldingen/Pizza-logo.png" alt="Logo">
        <div class="search-bar">
            <input type="text" placeholder="Zoeken...">
            <button type="submit">Zoek</button>
        </div>
        <div class="header-buttons">
            <a href="winkelmand.php">
                <img src="afbeeldingen/winkelmandje.png" alt="Winkelmand"> Bestelling
            </a>
            <a href="profiel.php">
                <img src="afbeeldingen/user.png" alt="Account"> Account
            </a>
        </div>
    </header>

    <div class="container">
    <label class="hamburger-menu">
        <input type="checkbox">
    </label>
    <aside class="sidebar">
        <nav>
            <a href="Hoofdpagina_klanten.php">Home</a>
            <a href="producten.php" >Menu</a>
            <a href="profiel.php">Profiel</a>
            <a href="bestelling.php" >Bestelling</a>
        </nav>
    </aside>
    
    
    <div class="search-bar">
    <div class="search-container">
    <form action="inloggen.php" method="POST">
        <label for="voornaam">Voornaam: </label>
        <input type="text" placeholder="voornaam">
        <label for="voornaam">Achternaam: </label>
        <input type="text" placeholder="achternaam">
        <label for="voornaam">Gebruikersnaam: </label>
        <input type="text" placeholder="gebruikersnaam">
        <label for="voornaam">Wachtwoord: </label>
        <input type="text" placeholder="wachtwoord">
        <label for="voornaam">Wachtwoord opnieuw: </label>
        <input type="text" placeholder="wachtwoord">
        <label for="role">Soort account: </label>
        <select name="role" id="role">
            <option value="Client">Klant</option>
            <option value="Personnel">Werknemer</option>
        <button type="submit">Registreren</button>
        </form>
    </div>
    </div>
    </div>
    
</body>
</html>