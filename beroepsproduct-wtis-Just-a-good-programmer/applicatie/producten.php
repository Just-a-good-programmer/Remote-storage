<?php require_once __DIR__ . '/datalaag/db_connectie.php'; ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
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
            <a href="bestelling.php">
                <img src="afbeeldingen/winkelmandje.png" alt="Bestelling"> Bestelling
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
    
    <main>
    <div class="main-container">
    <?php
        
        $pizzaName = isset($_GET['pizza_name']) ? $_GET['pizza_name'] : '';

        
        $sql = "SELECT p.name, p.price, COALESCE(STRING_AGG(i.name, ', '), 'Geen interessante ingredienten') as ingredients,
                t.name AS categorie
                FROM Product p
                LEFT JOIN Product_Ingredient pi ON p.name = pi.product_name
                JOIN ProductType t ON p.type_id = t.name
                LEFT JOIN Ingredient i ON pi.ingredient_name = i.name
                WHERE p.name LIKE CONCAT('%', ?, '%')
                GROUP BY t.name, p.name, p.price
                ORDER BY t.name, p.price";

        $stmt = $verbinding->prepare($sql);
        $stmt->bindValue(1, $pizzaName, PDO::PARAM_STR); 
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

        
        if (count($result) > 0) {
            
            foreach ($result as $row) {
                echo "<div class='gerecht'>";
                echo "<div class='box'>" . htmlspecialchars($row["categorie"]) . "</div>";
                echo "<img src='afbeeldingen/" . htmlspecialchars($row["name"]) . ".jpg' alt='" . htmlspecialchars($row["name"]) . "' class='image'>";
                echo "<div class='box'>" . htmlspecialchars($row["name"]) . "</div>";
                echo "<div class='box'>€" . number_format($row["price"], 2) . "</div>";
                echo "<div class='button-container'>";
                echo "<button class='add-button'>+</button>";
                echo "<label for='info-toggle-" . htmlspecialchars($row["name"]) . "' class='info-button'>Info</label>";
                echo "</div>";

                
                echo "<input type='checkbox' id='info-toggle-" . htmlspecialchars($row["name"]) . "' class='info-toggle'>";
                echo "<div class='popup'>";
                echo "<label for='info-toggle-" . htmlspecialchars($row["name"]) . "' class='close-button'>X</label>";
                echo "<p>Ingredienten</p>";
                echo "<ul>";
                $ingredients = explode(', ', $row["ingredients"]);
                foreach ($ingredients as $ingredient) {
                    echo "<li><p>" . htmlspecialchars($ingredient) . "</p></li>";
                }
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            
            echo "<p>Geen pizza's gevonden met de opgegeven naam.</p>";
        }

        
        $stmt->closeCursor();
        ?>
    </div>
    </main>

</div>
</body>
</html>