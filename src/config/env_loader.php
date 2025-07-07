<?php

//este script é utilizado para carregar as variáveis do arquivo env de acordo com o ambiente

$host = $_SERVER['SERVER_NAME'];

if ($host == 'localhost' || $host == '127.0.01') {
    require_once(__DIR__ . '/env_vars.local.php');
} else {
    require_once(__DIR__ . '/env_vars.production.php');
}


