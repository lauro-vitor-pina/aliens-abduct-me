<?php

require_once (__DIR__ . '../../db_service.php');
require_once(__DIR__ . '../../../repositories/aliens_abduction_repository_insert.php');

function aliens_abduction_service_insert(
    $first_name,
    $last_name,
    $when_it_happened,
    $how_long,
    $how_many,
    $alien_description,
    $what_they_did,
    $fang_spotted,
    $email,
    $other
) {
    $dbc = db_service_get_dbc();


    aliens_abduction_repository_insert(
        $dbc,
        $first_name,
        $last_name,
        $when_it_happened,
        $how_long,
        $how_many,
        $alien_description,
        $what_they_did,
        $fang_spotted,
        $email,
        $other
    );

    db_service_close_dbc($dbc);
}
