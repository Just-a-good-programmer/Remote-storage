<?php require_once __DIR__ . '/datalaag/db_connectie.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);;
    $password = $_POST["password"];
    
    
    
    $sql = "SELECT * FROM [User] WHERE username = :username ";
    $stmt = $verbinding->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
    
    if ($user) {
        if (password_verify($password, $user['password'])){
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        }
        header("Location: profiel.php");
    } else {
        echo "<p>Ongeldige gebruikersnaam of wachtwoord.</p>";
    } 
}


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="styling_page.css">
</head>
<body>
<header class="header">
        <img src="afbeeldingen/Pizza-logo.png" alt="Logo">

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
    <main>
    <div class="content">
    <h2>Login</h2>

    <form action="inloggen.php" method="POST">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Inloggen</button>
    </form>
    </div>
    </main>
    
    </div>
</body>
</html>