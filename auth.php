<?php

if ($_SERVER['REQUEST_METHOD']) {
    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php');
        die();
    }
}

