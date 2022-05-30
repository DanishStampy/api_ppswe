<?php

use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Firestore\DocumentReference;
use Google\Cloud\Firestore\CollectionReference;

class Firestore{

  private FirestoreClient $firestore;
  private string $collectionName;
  private string $documentName;

  public function __construct()
  {
    $this->firestore = new FirestoreClient([
      "keyFilePath" => "keys\ppswe-d7ee1-aba320f20be2.json",
      "projectId" => "ppswe-d7ee1",
    ]);
  }


  /*
  * $uid = patient id
  * $email = patient email
  */


  /*
  * getPatientEmail
  * 
  * retrieve patient email based on uid given 
  */
  public function getPatientEmail(string $uid){

    $userRef = $this->firestore->collection('users')->document($uid);
    $snapshot = $userRef->snapshot();

    if ($snapshot->exists()) {
      return $snapshot->get('email');
    }
  }

  /*
  * setPatientEmail
  * 
  * update/set patient email on caregiver document 
  */
  public function setPatientEmail(string $email_caregiver, string $email_patient){
    
    $userRef = $this->firestore->collection('users');
    $query = $userRef->where('email', '=', $email_caregiver)->documents();

    foreach( $query as $document) {
      if ($document->exists()) {
        print_r($document->id());
      }

      $userRef->document($document->id())->update([
        ['path' => 'patientEmail', 'value' => $email_patient]
      ]);
    }
  
    print_r("<br>Done update!");
  }
  
}