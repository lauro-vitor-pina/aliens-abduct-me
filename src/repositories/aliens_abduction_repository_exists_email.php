<?php

function aliens_abduction_repository_exists_email($dbc, $abduction_id, $email)
{
    $query = "SELECT COUNT(abduction_id) as qtd 
              FROM `aliens_abduction`
              WHERE email = '$email' 
              AND `abduction_id` != $abduction_id";

    $result_query = mysqli_query($dbc, $query);

    $result = mysqli_fetch_array($result_query)['qtd'];

    return $result > 0;
}
