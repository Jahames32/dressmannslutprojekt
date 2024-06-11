<?php
session_start();

// Korrekt användarnamn och lösenord
$correct_username = 'mahamed';
$correct_password = 'mahamed';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kontrollera om användarnamn och lösenord är korrekta
    if ($username === $correct_username && $password === $correct_password) {
        // Omdirigera till korg.html om inloggningen lyckas
        header('Location: korg.html');
        exit();
    } else {
        // Visa felmeddelande om inloggningen misslyckas
        $error_message = 'Fel användarnamn eller lösenord.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="login-form">
        <h1>Konto</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>logga in</h2>
                    <?php
                    if (isset($error_message)) {
                        echo '<p style="color:red;">' . $error_message . '</p>';
                    }
                    ?>
                    <form action="login.php" method="post">
                        <input type="text" name="username" placeholder="username" required autofocus="">
                        <input type="password" name="password" placeholder="user password" required>
                        <button class="btn" type="submit">logga in</button>
                    </form>
                    <p class="account">inget konto? <a href="#">skriv upp dig</a></p>
                </div>
                <div class="form-img">
                    <img src="Nike Women's DayBreak Vintage Shoes 'Stadium Green' (DX0751-301) Expeditedship _ eBay.jfif" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
