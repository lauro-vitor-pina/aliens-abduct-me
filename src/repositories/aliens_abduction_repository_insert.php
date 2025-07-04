<?php


function aliens_abduction_repository_insert(
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
) {

    $first_name = mysqli_real_escape_string($dbc, trim($first_name));
    $last_name = mysqli_real_escape_string($dbc, trim($last_name));
    $when_it_happened = mysqli_real_escape_string($dbc, trim($when_it_happened));
    $how_long = mysqli_real_escape_string($dbc, trim($how_long));
    $how_many = mysqli_real_escape_string($dbc, trim($how_many));
    $alien_description = mysqli_real_escape_string($dbc,  trim($alien_description));
    $what_they_did = mysqli_real_escape_string($dbc, trim($what_they_did));
    $email = mysqli_real_escape_string($dbc, trim($email));
    $other = mysqli_real_escape_string($dbc, trim($other));


    $query = "INSERT INTO `aliens_abduction`(
        `first_name`, 
        `last_name`, 
        `when_it_happened`, 
        `how_long`, 
        `how_many`, 
        `alien_description`, 
        `what_they_did`, 
        `fang_spotted`, 
        `email`,
        `other` 
    ) VALUES (
        '$first_name',
        '$last_name',
        '$when_it_happened',
        '$how_long',
        '$how_many',
        '$alien_description',
        '$what_they_did',
        '$fang_spotted',
        '$email',
        '$other'
    )";

    mysqli_query($dbc, $query);
}
