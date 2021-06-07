<?php
$data =$_POST['data'];
//$datadecode = json_decode($data);
$obj = json_decode($data,true);
//$data = var_dump(json_decode($data));
 // print_r($obj);
// echo gettype($obj);

// echo $obj[1][1];
//echo $obj[0];

for ($i=1; $i < 6200 ; $i++) {
  $type = $obj[$i][0];
  $name = $obj[$i][1];
  $cond = $obj[$i][2];
  $price = $obj[$i][3];
  $buyorder = $obj[$i][4];
  $datum = $obj[$i][5];

    insertData($type, $name, $cond, $price, $buyorder, $datum);
}

function insertData($type, $name, $cond, $price, $buyorder, $datum){
include "dbcon.php";

$sql = "INSERT INTO data
VALUES ('$type', '$name', '$cond', $price, $buyorder, '$datum' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}


 ?>
