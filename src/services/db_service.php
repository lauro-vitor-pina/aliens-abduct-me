<?php

require_once(__DIR__ . '../../config/env_loader.php');

function db_service_get_dbc()
{
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) or die('Faield to connect Database');

    return $dbc;
}

function db_service_close_dbc($dbc)
{
    if ($dbc != null) {
        mysqli_close($dbc);
    }
}
