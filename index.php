<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
$pastFormData = json_decode($jsonFormData, TRUE);
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
       <?php echo $nav;?>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>A Bootstrap 5 Starter Template</h1>
                <p class="lead">A complete project boilerplate built with Bootstrap</p>
                <p>Bootstrap v5.1.3</p>
            </div>
          <hr>
          <br>
          <div class="mainForm">
            <form action="/redirect.php" method="post">
              <label for="fName">First Name:</label><br>
              <input type="text" id="fName" name="fName"><br>
              <label for="lName">Last Name:</label><br>
              <input type="text" id="lName" name="lName"><br>
              <label for="email">Email:</label><br>
              <input type="text" id="email" name="email"><br>
              <label for="age">Age:</label><br>
              <input type="number" id="age" name="age"><br>
              <label for="gender">Gender:</label><br>
              <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="nonBinary">Non Binary</option>
              </select><br><br>
               <label for="relationship">Relation with Person:</label><br>
              <select id="relationship" name="relationship">
                <option value="friend">Friend</option>
                <option value="coworker">Coworker</option>
                <option value="familyMember">Family Member</option>
              </select><br><br>
              <input type="submit" value="Create" name="btn_create">
            </form>
          </div>
          <hr>
          <div class="displayData">
            <?php 

  foreach ($pastFormData as $key => $item) {
     foreach ($pastFormData as $key => $value) {
  echo "<div class='row justify-content-center mt-2'>";
  echo "<div class='card' style='width: 80%;'>"; 
  echo "First Name: ".$value['fName']."<br>"; 
  echo "Last Name: ".$value['lName']."<br>";
  echo "Email: ".$value['email']."<br>";
  echo "Age: ".$value['age']."<br>";
  echo "Gender: ".$value['gender']."<br>";
  echo "Relationship: ".$value['relationship']."<br>";
  echo '<a href="/edit.php?uid='.$value["uid"].'">Edit Info</a>';
  echo "</div>";
  echo "</div>";  
   
}
  }
          ?> 
          </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
