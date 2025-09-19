<?php require_once __DIR__ . '/datalaag/db_connectie.php';

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Sole Machina</title>
    <link rel="stylesheet" href="styling_page.css">
</head>

<header class="header">
    <img src="afbeeldingen/Pizza-logo.png" alt="Logo">
    <div class="search-bar">
        <input type="text" placeholder="Zoeken...">
        <button type="submit">Zoek</button>
    </div>
    <div class="header-buttons">
        <a href="Bezorgschema.php">
            <img src="afbeeldingen/Orderlijst.png" alt="Orderlijst"> Orderlijst
        </a>
        <a href="profiel.php">
            <img src="afbeeldingen/user.png" alt="Account"> Account
        </a>
    </div>
</header>
<body>
    <div class="container">
    <label class="hamburger-menu">
        <input type="checkbox">
    </label>

    <aside class="sidebar">
        <nav>
            <a href="Hoofdpagina_werknemers.php">Home</a>
            <a href="profiel.php">Profiel</a>
            <a href="Bezorgschema.php" >Bezorgschema</a>
        </nav>
    </aside>
    

    <div class="content">
        <h1>Welkom bij Pizzeria Sole Machina werknemer</h1>
    </div>

    </div>
    </body>
<footer>
    <a href="privacy_statement.php">Privacyverklaring</a>
</footer>

</html>
