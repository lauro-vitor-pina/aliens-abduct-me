<?php

function aliens_abduction_repository_get_all($dbc, $sort_prop, $sort_dir)
{
    $query = "SELECT 
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
    ";

    if(!empty($sort_prop) && !empty($sort_dir)){
        $query = $query . "ORDER BY $sort_prop $sort_dir";
    }

    $result_query = mysqli_query($dbc, $query);

    $rows = array();

    while($item = mysqli_fetch_array($result_query)){
        array_push($rows, $item);
    }

    return $rows;
}
