<?php
session_start();


if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
    $login = $_SESSION['login'];
    $password = $_SESSION['password'];

    echo "<pre>";
    print_r("Login e senha do Usuário:\n") ;
    print_r("Login: " . $login . "\n");
    print_r( "Senha: " . $password . "\n");
    print_r("</pre>");
} else {
    print_r("Nenhum valor foi encontrado na sessão.");
}
?>
