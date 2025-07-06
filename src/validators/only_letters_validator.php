<?php

function only_letters_validator($value)
{
    $regex = "/^[a-zA-Z-' ]*$/";

    return preg_match($regex, $value);
}
