<?php

require_once(__DIR__ . '../../db_service.php');
require_once(__DIR__ . '../../../repositories/aliens_abduction_repository_get_all.php');

function aliens_abduction_service_get_all($sort_prop, $sort_dir)
{
    $dbc = db_service_get_dbc();

    $rows = aliens_abduction_repository_get_all($dbc, $sort_prop, $sort_dir);

    db_service_close_dbc($dbc);

    return $rows;
}
