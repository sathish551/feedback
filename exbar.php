<?php
include("conn.php");
$query = sprintf("SELECT valuable, studentdata FROM studentdata ORDER BY valuable");
$result = $mysqli->query($query);
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

$result->close();


$mysqli->close();


print json_encode($data);
[  
   {  
      "valuable":"StronglyAgree",
      "score":"0"
   },
   {  
      "valuable":"Agree",
      "score":"6"
   },
   {  
      "valuable":"Neutral",
      "score":"3"
   },
   {  
      "valuable":"Disagree",
      "score":"2"
   },
  
]
?>