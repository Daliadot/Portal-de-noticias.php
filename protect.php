<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION[' '])) {
    die("Você não pode acessar esta página pois não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>