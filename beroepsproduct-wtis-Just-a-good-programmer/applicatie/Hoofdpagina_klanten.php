<?php require_once __DIR__ . '/datalaag/db_connectie.php';

 if (isset($_GET['q'])) {
    $search_term = $_GET['q'];
  
    // Sanitize the search term to prevent SQL injection
    $search_term = mysqli_real_escape_string($conn, $search_term);
  
    $sql = "SELECT * FROM Product WHERE name LIKE '%" . $search_term . "%'"; 
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      // Output results (example: display in a table)
      echo "<table>";
      echo "<tr><th>name</th><th>price</th><th>type_id</th></tr>"; // Replace with actual column names
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td></tr>" . $row["type_id"] . "</td></tr>"; 
      }
      echo "</table>";
    } else {
      echo "No results found.";
    }
  }

?>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Sole Machina</title>
    <link rel="stylesheet" href="styling_page.css">
</head>
<body>
    <div class="header-container">
    <header class="header">
        <img src="afbeeldingen/Pizza-logo.png" alt="Logo">
        <div class="search-bar">
        <form method="GET"> 
            <input type="text" name="q" placeholder="Zoeken...">
            <button type="submit">Zoek</button>
        </form>
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
        <div class="content">
            <h1>Welkom bij Pizzeria Sole Machina </h1>
        </div>
        </main>
    </div>
</body>
<footer>
    <a href="privacy_statement.php">Privacyverklaring</a>
</footer>

</html>