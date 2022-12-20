<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';


 $_SESSION["form"]["fName"] = $_POST['fName'];
 $_SESSION["form"]["lName"] = $_POST['lName'];
 $_SESSION["form"]["email"] = $_POST['email'];
 $_SESSION["form"]["age"] = $_POST['age'];
 $_SESSION["form"]["gender"] = $_POST['gender'];
 $_SESSION["form"]["relationship"] = $_POST['relationship'];        
    
  //import json data from file
  $jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
  //convert json data to php array
  $pastFormData = json_decode($jsonFormData, TRUE);

  $largest_uid = 0;
  foreach ($pastFormData as $item) {
    if(isset($item['uid']) && $item['uid'] > $largest_uid)
      $largest_uid = $item['uid'];
  }

$newFormData = array(
                      "date"=>date("m/d/Y"),  
                      "fName"=>$_SESSION['form']['fName'], 
                      "lName"=>$_SESSION['form']['lName'],
                      "email"=>$_SESSION['form']['email'], 
                      "age"=>$_SESSION['form']['age'], 
                      "gender"=>$_SESSION['form']['gender'],
                      "relationship"=>$_SESSION['form']['relationship'],
                      "uid"=>$largest_uid + 1
                        );

  // add new form to existing array
  array_push($pastFormData, $newFormData);
  // turn php array back into json data
  $jsonData = json_encode($pastFormData);

  file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data.json', $jsonData);

    header('Location: /index.php');








?>