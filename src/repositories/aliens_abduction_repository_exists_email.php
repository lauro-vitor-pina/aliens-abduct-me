<?php

function aliens_abduction_repository_exists_email($dbc, $email)
{
    $query = "SELECT COUNT(abduction_id) as qtd 
              FROM `aliens_abduction`
              WHERE email = '$email' ";

    $result_query = mysqli_query($dbc, $query);

    $result = mysqli_fetch_array($result_query)['qtd'];

    return $result > 0;
}
