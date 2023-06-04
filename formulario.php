<?php
session_start();

if ($_POST) {
    
    $login = $_POST['login'];
    $password = $_POST['password'];


    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;

 
    header('Location: captura_sessao.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <h2>Formulário</h2>
    <form method="POST" action="">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" class="form-control" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control" required><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
