<?php

function aliens_abduction_repository_update(
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
) {
    $first_name = mysqli_real_escape_string($dbc, $first_name);
    $last_name = mysqli_real_escape_string($dbc, $last_name);
    $when_it_happened = mysqli_real_escape_string($dbc, $when_it_happened);
    $how_long = mysqli_real_escape_string($dbc, $how_long);
    $how_many = mysqli_real_escape_string($dbc, $how_many);
    $alien_description = mysqli_real_escape_string($dbc,  $alien_description);
    $what_they_did = mysqli_real_escape_string($dbc, $what_they_did);
    $fang_spotted = mysqli_real_escape_string($dbc, $fang_spotted);
    $email = mysqli_real_escape_string($dbc, $email);
    $other = mysqli_real_escape_string($dbc, $other);

    $query = "UPDATE `aliens_abduction` 
        SET 
            `first_name`='$first_name',
            `last_name`='$last_name',
            `when_it_happened`='$when_it_happened',
            `how_long`='$how_long',
            `how_many`='$how_many',
            `alien_description`='$alien_description',
            `what_they_did`='$what_they_did',
            `fang_spotted`='$fang_spotted',
            `other`='$other',
            `email`='$email' 
        WHERE `abduction_id`= $abduction_id";

    mysqli_query($dbc, $query);
}
