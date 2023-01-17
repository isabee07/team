<?php 
$jsonFormdata = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data.json"); 
$pastFormdata = json_decode($jsonFormData, TRUE);

$uid = 1008; 

foreach ($pastFormData as $key => $item) {
  
}

echo $pastFormData; 
?> 