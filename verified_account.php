<?php

require_once 'vendor/autoload.php';
require_once 'Models/firestore.php';

$db = new Firestore();

if (isset($_GET['uid'], $_GET['email'])) {

  $patient_uid = $_GET['uid'];
  $email_caregiver = $_GET['email'];

  $email_patient = $db->getPatientEmail($patient_uid);
  // print_r($email_patient . '<br>');
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Caregiver Account</title>
    <link rel="icon" href="css/logo_ppswe_web.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>

  <body style="background-color: #e9ecef;">


    <!-- start body -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">

      <!-- start logo -->
      <tr>
        <td align="center" bgcolor="#e9ecef">
          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
            <tr>
              <td align="center" valign="top" style="padding: 36px 24px;">
                <a href="https://www.blogdesire.com" target="_blank" style="display: inline-block;">
                  <img src="css/logo_ppswe_web.png" alt="Logo" border="0" width="120px" style="display: block;">
                </a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- end logo -->

      <!-- start hero -->
      <tr>
        <td align="center" bgcolor="#e9ecef">
          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
            <tr>
              <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
                <?php

                $db->setPatientEmail($email_caregiver, $email_patient, $patient_uid);
              }

                ?>
                </h1>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- end hero -->

      <!-- start copy block -->
      <tr>
        <td align="center" bgcolor="#e9ecef">
          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

            <!-- start copy -->
            <tr>
              <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                <p style="margin: 0;">The patient data has been succesfully sync to your account. You are able to monitor patient's medicine intake daily, and generate medication report.</p>
              </td>
            </tr>
            <!-- end copy -->


            <!-- start copy -->


            <!-- start copy -->
            <tr>
              <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
                <p style="margin: 0;">Cheers,<br> PPSWE</p>
              </td>
            </tr>
            <!-- end copy -->

          </table>
        </td>
      </tr>
      <!-- end copy block -->


    </table>
    <!-- end body -->

  </body>

  </html>