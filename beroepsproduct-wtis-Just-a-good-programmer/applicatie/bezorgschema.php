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
        <a href="">
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
    
    <div class="main-container">
    <main>
        <div class="table-container">
            <table class="order-table">
                <tr>
                    <th>Ordernummer</th>
                    <th>Klant naam</th>
                    <th>Bezorger gebruikersnaam</th>
                    <th>Datum</th>
                    <th>Status</th>
                    <th>Bezorgaddres</th>
                </tr>
                <tr>
                    <td>1</td>                                      <!-- Row 1, Cell 1 -->
                    <td>John Doe</td>                               <!-- Row 1, Cell 2 -->
                    <td>rdeboer</td>                                <!-- Row 1, Cell 3 -->
                    <td>2025-01-22 07:48:00.000</td>                <!-- Row 1, Cell 4 -->
                    <td>Bestelling geplaatst</td>                   <!-- Row 1, Cell 5 -->
                    <td>Bakkerstraat 1, 6811EG, Arnhem</td>         <!-- Row 1, Cell 6 -->
                </tr>
                <tr>
                    <td>2</td>                                      <!-- Row 2, Cell 1 -->
                    <td>Maria Vermeer</td>                          <!-- Row 2, Cell 2 -->
                    <td>sbakker</td>                                <!-- Row 2, Cell 3 -->
                    <td>2025-01-22 08:03:00.000</td>                <!-- Row 2, Cell 4 -->
                    <td>Wordt bereid</td>                           <!-- Row 2, Cell 5 -->
                    <td>Jansplein 2, 6811GD, Arnhem</td>            <!-- Row 2, Cell 6 -->
                </tr>
                <tr>
                    <td>23</td>                                     <!-- Row 3, Cell 1 -->
                    <td>Maria Vermeer</td>                          <!-- Row 3, Cell 2 -->
                    <td>lheineken</td>                              <!-- Row 3, Cell 3 -->
                    <td>2025-01-24 08:18:00.000</td>                <!-- Row 3, Cell 4 -->
                    <td>Bestelling geplaatst</td>                   <!-- Row 3, Cell 5 -->
                    <td>Sint Jacobslaan 23, 6533BT, Nijmegen</td>   <!-- Row 3, Cell 6 -->
                </tr>
            </table>
        </div>
    </main>
    </div>

</div>
</body>
<footer>
    <a href="privacy_statement.php">Privacyverklaring</a>
</footer>
</body>
</html>
