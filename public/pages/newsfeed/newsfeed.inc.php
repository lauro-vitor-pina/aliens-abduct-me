<?php 

require_once(__DIR__ . '../../../../src/services/aliens_abduction/aliens_abduction_service_get_all.php');

$abductions = aliens_abduction_service_get_all('when_it_happened', 'DESC');