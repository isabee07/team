<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
$pastFormData = json_decode($jsonFormData, TRUE);

foreach ($pastFormData as $key => $value) {
  if ($value['uid'] == $_GET['uid']) {
    $editUid = $value['uid']; 
    $editfName = $value['fName']; 
    $editlName = $value['lName']; 
    $editEmail = $value['email']; 
    $editAge = $value['age']; 
    $editGender = $value['gender']; 
    $editRelationship = $value['relationship']; 
  }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bare - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
       <?php echo $nav ?>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                 <form action="/redirectUrMom.php" method="post">
  <label for="fName">First name:</label><br>
  <input type="text" id="fName" name="fName" value="<?php echo $editfName; ?>"><br>
  <label for="lName">Last name:</label><br>
  <input type="text" id="lName" name="lName" value="<?php echo $editlName; ?>"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="<?php echo $editEmail; ?>"><br>
  <label for="age">Age:</label><br>
  <input type="number" id="age" name="age" value="<?php echo $editAge; ?>"><br>
  <label for="gender">Gender:</label><br>
  <select id="gender" name="gender" value="<?php echo $editGender; ?>">
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="nonBinary">Non Binary</option>
              </select><br><br>
  <label for="relationship">Relation with Person:</label><br>
              <select id="relationship" name="relationship" value="<?php echo $editRelationship; ?>">
                <option value="friend">Friend</option>
                <option value="coworker">Coworker</option>
                <option value="familyMember">Family Member</option>
              </select><br><br>
<input type="hidden" id="uid" name="uid" value="<?php echo $_GET['uid']; ?>"><br>
        <input type="submit" value="Save Changes" name="btn_edit">
</form>
         <?php echo $_GET['uid']; ?>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
