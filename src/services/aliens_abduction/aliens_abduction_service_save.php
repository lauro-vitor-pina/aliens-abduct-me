<?php

require_once(__DIR__ . '../../db_service.php');
require_once(__DIR__ . '../../../repositories/aliens_abduction_repository_insert.php');
require_once(__DIR__ . '../../../repositories/aliens_abduction_repository_exists_email.php');
require_once(__DIR__ . '../../../repositories/aliens_abduction_repository_update.php');

function aliens_abduction_service_save(
    $abduction_id,
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

    $exists_email = aliens_abduction_repository_exists_email($dbc, $abduction_id, $email);

    if ($exists_email) {
        throw new Exception('Exists an abudction with this email. Please input another email.');
    }

    if ($abduction_id == null) {

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

    } else {

        aliens_abduction_repository_update(
            $dbc,
            $abduction_id,
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
    }

    db_service_close_dbc($dbc);
}
