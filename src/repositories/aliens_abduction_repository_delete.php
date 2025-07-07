<?php

function aliens_abduction_repository_delete($dbc, $abduction_id)
{
    $query = "DELETE FROM `aliens_abduction` WHERE `abduction_id` = $abduction_id";

    mysqli_query($dbc, $query);
}
