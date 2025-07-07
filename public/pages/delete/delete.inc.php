<?php

require_once(__DIR__ . '../../../../src/services/aliens_abduction/aliens_abduction_service_get_by_id.php');
require_once(__DIR__ . '../../../../src/services/aliens_abduction/aliens_abduction_service_delete.php');

$message_error = '';
$message_success = '';
$abduction = null;

if (isset($_GET['abduction_id'])) {

    $abduction = aliens_abduction_service_get_by_id($_GET['abduction_id']);

} else if (isset($_POST['confirm'])) {

    $abduction_id = $_POST['abduction_id'];

    try {
        aliens_abduction_service_delete($abduction_id);
        $message_success = 'Abduction was deleted with success.';
    } catch (Exception $ex) {
        $message_error = $ex->getMessage();
    }

} else {
    header('Location: ../index/');
    exit;
}
