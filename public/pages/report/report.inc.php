<?php

require_once(__DIR__ . '../../../../src/validators/only_letters_validator.php');
require_once(__DIR__ . '../../../../src/validators/email_validator.php');
require_once(__DIR__ . '../../../../src/validators/only_numbers_validator.php');
require_once(__DIR__ . '../../../../src/services/aliens_abduction/aliens_abduction_service_save.php');
require_once(__DIR__ . '../../../../src/services/aliens_abduction/aliens_abduction_service_get_by_id.php');

$abduction_id = null;

$first_name = '';
$first_name_err = '';

$last_name = '';
$last_name_err = '';

$email = '';
$email_err = '';

$when_it_happened = '';
$when_it_happened_err = '';

$how_long = '';
$how_long_err = '';

$how_many = '';
$how_many_err = '';

$alien_description =  '';
$alien_description_err = '';

$what_they_did = '';
$what_they_did_err = '';

$fang_spotted = '';
$fang_spotted_err = '';

$other = '';

$success_message = '';
$error_message = '';

if (isset($_POST['submit'])) {

    if (isset($_POST['abduction_id'])) {
        $abduction_id = (int)$_POST['abduction_id'];
    }

    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $when_it_happened = trim($_POST['when_it_happened']);
    $how_long = trim($_POST['how_long']);
    $how_many = trim($_POST['how_many']);
    $alien_description = trim($_POST['alien_description']);
    $what_they_did = trim($_POST['what_they_did']);
    $fang_spotted = trim($_POST['fang_spotted']);
    $other = trim($_POST['other']);


    $result_validation = validate_form_report(
        $first_name,
        $first_name_err,
        $last_name,
        $last_name_err,
        $email,
        $email_err,
        $when_it_happened,
        $when_it_happened_err,
        $how_long,
        $how_long_err,
        $how_many,
        $how_many_err,
        $alien_description,
        $alien_description_err,
        $what_they_did,
        $what_they_did_err,
        $fang_spotted,
        $fang_spotted_err
    );


    if ($result_validation) {

        try {

            aliens_abduction_service_save(
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
            );

            $success_message = 'Your abduction has been reported.';
        } catch (Exception $ex) {
            $error_message = $ex->getMessage();
        }
    }
} else if (isset($_GET['abduction_id'])) {

    try {
        $abduction_id = (int)$_GET['abduction_id'];

        $result = aliens_abduction_service_get_by_id($abduction_id);

        if ($result != null) {

            $first_name = $result['first_name'];
            $last_name = $result['last_name'];
            $email = $result['email'];
            $when_it_happened = $result['when_it_happened'];
            $how_long = $result['how_long'];
            $how_many = $result['how_many'];
            $alien_description = $result['alien_description'];
            $what_they_did = $result['what_they_did'];
            $fang_spotted = $result['fang_spotted'];
            $other = $result['other'];
        }
    } catch (Exception $ex) {
        $error_message = 'An error in get abduction.';
    }
}

#region VALIDATE


function validate_form_report(
    &$first_name,
    &$first_name_err,
    &$last_name,
    &$last_name_err,
    &$email,
    &$email_err,
    &$when_it_happened,
    &$when_it_happened_err,
    &$how_long,
    &$how_long_err,
    &$how_many,
    &$how_many_err,
    &$alien_description,
    &$alien_description_err,
    &$what_they_did,
    &$what_they_did_err,
    &$fang_spotted,
    &$fang_spotted_err
) {

    $result = array();

    array_push($result, execute_validation($first_name, $first_name_err, 'validate_first_name'));

    array_push($result, execute_validation($last_name, $last_name_err, 'validate_last_name'));

    array_push($result, execute_validation($email, $email_err, 'validate_email'));

    array_push($result, execute_validation($when_it_happened, $when_it_happened_err, 'validate_when_it_happened'));

    array_push($result, execute_validation($how_long, $how_long_err, 'validate_how_long'));

    array_push($result, execute_validation($how_many, $how_many_err, 'validate_how_many'));

    array_push($result, execute_validation($alien_description, $alien_description_err, 'validate_alien_description'));

    array_push($result, execute_validation($what_they_did, $what_they_did_err, 'validate_what_they_did'));

    array_push($result, execute_validation($fang_spotted, $fang_spotted_err, 'validate_fang_spotted'));

    if (in_array(false, $result))
        return false;
    else
        return true;
}

function execute_validation($field, &$field_err, $function_name)
{
    $result = call_user_func($function_name, $field);

    if (!is_null($result)) {
        $field_err = $result;
        return false;
    }

    return true;
}

function validate_first_name($first_name)
{
    if (empty($first_name)) {
        return "First name is required.";
    }

    if (!only_letters_validator($first_name)) {
        return "At first name only letters and space are allowed.";
    }

    return null;
}

function validate_last_name($last_name)
{
    if (empty($last_name)) {
        return 'Last name is required';
    }

    if (!only_letters_validator($last_name)) {
        return "At Last name only letters and space are allowed.";
    }

    return null;
}

function validate_email($email)
{
    if (empty($email)) {
        return 'Email is required.';
    }

    if (!email_validator($email)) {
        return 'Email is invalid.';
    }

    return null;
}

function validate_when_it_happened($when_it_happened)
{
    if (empty($when_it_happened)) {
        return 'When did it happened is required.';
    }

    $today = mktime(0, 0, 0, date('m'), date('d'), date('y')); //recupera a data de hoje as meia noite.

    $when_it_happened_time = strtotime($when_it_happened);

    if ($when_it_happened_time >= $today) {     //a data não pode ser futura
        return 'Invalid date, because the abduction can not ocurr in the future.';
    }

    return null;
}


function validate_how_many($how_many)
{
    if (empty($how_many)) {
        return 'How many is required.';
    }

    if (!only_numbers_validator($how_many)) {
        return 'At how many only numbers are allowed.';
    }

    return null;
}

function validate_how_long($how_long)
{
    if (empty($how_long)) {
        return 'How long is required.';
    }

    return null;
}

function validate_alien_description($alien_description)
{
    if (empty($alien_description)) {
        return  'Alien description is required.';
    }

    return null;
}

function validate_what_they_did($what_they_did)
{
    if (empty($what_they_did)) {
        return 'What they did is required';
    }

    return null;
}

function validate_fang_spotted($fang_spotted)
{
    if (empty($fang_spotted)) {
        return 'See my dog fang is required';
    }

    return null;
}

#endregion
