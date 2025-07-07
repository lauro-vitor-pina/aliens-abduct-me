<?php

function aliens_abduction_repository_get_by_id($dbc, $abduction_id)
{
    $query ="SELECT 
                `abduction_id`, 
                `first_name`, 
                `last_name`, 
                `when_it_happened`, 
                `how_long`, 
                `how_many`, 
                `alien_description`, 
                `what_they_did`, 
                `fang_spotted`, 
                `other`, 
                `email` 
            FROM `aliens_abduction`
            WHERE `abduction_id` = $abduction_id";

    $result_query = mysqli_query($dbc, $query);

    $item = mysqli_fetch_array($result_query);

    return $item;
}
