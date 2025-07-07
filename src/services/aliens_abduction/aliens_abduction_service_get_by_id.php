<?php

require_once(__DIR__ . '../../db_service.php');
require_once(__DIR__ . '../../../repositories/aliens_abduction_repository_get_by_id.php');

function aliens_abduction_service_get_by_id($abduction_id)
{
    $dbc = db_service_get_dbc();

    $result = aliens_abduction_repository_get_by_id($dbc, $abduction_id);

    db_service_close_dbc($dbc);

    return $result;
}
