<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';

  $jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
  //convert json data to php array
  $pastFormData = json_decode($jsonFormData, TRUE);

 $_SESSION["form"]["fName"] = $_POST['fName'];
 $_SESSION["form"]["lName"] = $_POST['lName'];
 $_SESSION["form"]["email"] = $_POST['email'];
 $_SESSION["form"]["age"] = $_POST['age'];
 $_SESSION["form"]["gender"] = $_POST['gender'];
 $_SESSION["form"]["relationship"] = $_POST['relationship'];        

foreach ($pastFormData as $key => $item) {
  if ($item['uid'] == $_POST['uid']) { 
    $pastFormData[$key]['fName'] = $_POST['fName'];
     $pastFormData[$key]['lName'] = $_POST['lName'];
     $pastFormData[$key]['email'] = $_POST['email'];
     $pastFormData[$key]['age'] = $_POST['age'];
     $pastFormData[$key]['gender'] = $_POST['gender'];
     $pastFormData[$key]['relationship'] = $_POST['relationship'];
  }
}

  // turn php array back into json data
  $jsonData = json_encode($pastFormData, JSON_PRETTY_PRINT);

  file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data.json', $jsonData);

    header('Location: /index.php');

?>