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
       <?php echo $nav ?>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>A Bootstrap 5 Starter Template</h1>
              <?php 
foreach ($pastFormData as $key => $item) {
  if ($item['relationship'] === "familyMember") {
    echo $item['fName']."<br>"; 
    echo $item['lName']."<br>"; 
    echo $item['email']."<br>"; 
    echo $item['age']."<br>"; 
    echo $item['Message']."<br>"; 
    echo $item['relationship']."<hr>"; 
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
