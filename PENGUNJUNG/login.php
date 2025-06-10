<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
     <link rel="stylesheet" href="/RPL/login.css">
</head>
<body>
    <div class="container-login">
        <div class="login-form">
            <?php
                echo '<p class="small-text">desa sepakung</p>';
                echo '<h1>Login</h1>';
                echo '<form action="proses_login.php" method="POST">';
                echo '<input type="text" id="username" name="username" placeholder="username" required />';
                echo '<input type="password" id="password" name="password" placeholder="password" required />';
                echo '<button type="submit">Log in</button>';
                echo '</form>';
                echo '<p class="terms">Terms of Services and Privacy Policy</p>';
            ?>
        </div>
    </div>
</body>
</html>
