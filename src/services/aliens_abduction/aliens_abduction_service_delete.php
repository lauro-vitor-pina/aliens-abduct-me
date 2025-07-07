<?php

require_once(__DIR__  . '../../db_service.php');
require_once(__DIR__ . '../../../repositories/aliens_abduction_repository_delete.php');

function aliens_abduction_service_delete($abduction_id)
{
    $dbc = db_service_get_dbc();

    aliens_abduction_repository_delete($dbc, $abduction_id);

    db_service_close_dbc($dbc);
}
