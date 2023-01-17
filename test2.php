<?php 
$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data.json"); 
$pastFormData = json_decode($jsonFormData, TRUE);

$uid = 1008; 

foreach ($pastFormData as $key => $item) {
  if ($item['uid'] == $uid) {
    echo $item['fName']; 
    $pastFormData[$key]['fName'] = "jesus";
  }
}

echo '<pre>'; 
var_dump($pastFormData); 
echo '</pre>';
?> 