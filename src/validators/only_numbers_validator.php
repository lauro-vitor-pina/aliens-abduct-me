<?php

function only_numbers_validator($value)
{
    $regex = "/^\d{1,}$/";

    return preg_match($regex, $value);
}
