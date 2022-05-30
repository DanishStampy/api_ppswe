<?php

require_once 'vendor/autoload.php';
require_once 'Models/firestore.php';

$db = new Firestore();

if (isset($_GET['uid'], $_GET['email'])) {
  
  $patient_uid = $_GET['uid'];
  $email_caregiver = $_GET['email'];

  $email_patient = $db->getPatientEmail($patient_uid);
  print_r($email_patient.'<br>');
  
  $db->setPatientEmail($email_caregiver, $email_patient);
}

?>