<?php

function only_letters_validator($value)
{
    $regex = "/^[a-zA-ZÀ-ÖØ-öø-ÿçÇ' ]*$/";

    return preg_match($regex, $value);
}
