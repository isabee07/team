<?php include $_SERVER['DOCUMENT_ROOT'] . 'functions.php';


 $_SESSION["form.php"]["fName"] = $_POST['fName'];
 $_SESSION["form.php"]["fName"] = $_POST['lName'];
 $_SESSION["form.php"]["fName"] = $_POST['email'];
 $_SESSION["form.php"]["fName"] = $_POST['age'];
 $_SESSION["form.php"]["fName"] = $_POST['gender'];
 $_SESSION["form.php"]["fName"] = $_POST['relationship'];

  $newFormData = array(
                      "date"=>date("m/d/Y"),  
                      "fName"=>$_SESSION['form']['fName'], 
                      "lName"=>$_SESSION['form']['lName'],
                      "email"=>$_SESSION['form']['email'], 
                      "age"=>$_SESSION['form']['age'], 
                      "gender"=>$_SESSION['form']['gender']
                       "relationship"=>$_SESSION['form']['relationship']
                        );










?>