<?php

function conectarDB() {
    $db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');

    if(!$db) {
        echo "No se pudo coenectar";
        exit;
    }
    return $db;
}