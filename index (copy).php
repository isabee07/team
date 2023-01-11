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
      <link href="/style.css" rel="stylesheet" />
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
              <input type="submit" value="Submit">
            </form>
          </div>
          <hr>
          <div class="displayData">
            <?php 
  // foreach ($pastFormData as $key => $item) {
  //     echo $item['fName']."<br>"; 
  //     echo $item['lName']."<br>"; 
  //     echo $item['email']."<br>"; 
  //     echo $item['age']."<br>"; 
  //     echo $item['gender']."<br>"; 
  //     echo $item['relationship']."<hr>"; 
  // }

foreach ($pastFormData as $key => $value) {
  echo '<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-box center-version">
                <a href="#profile.html">
                    <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    <h3 class="m-b-xs"><strong>John Smith</strong></h3>
        
                    <div class="font-bold">Graphics designer</div>
                    <address class="m-t-md">
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
        
                </a>
                <div class="contact-box-footer">
                    <div class="m-t-xs btn-group">
                        <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                    </div>
                </div>

            </div>
        </div>';
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
