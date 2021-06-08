<?php
$data =$_POST['data'];
//$datadecode = json_decode($data);
$obj = json_decode($data,true);

//$data = var_dump(json_decode($data));
 // print_r($obj);
// echo gettype($obj);

// echo $obj[1][1];
//echo $obj[0];
$insertValues = "" ;
for ($i=1; $i < 4035 ; $i++) {
  $type = $obj[$i][0];
  $name = $obj[$i][1];
  $name = str_replace("'", "", $name);
  $cond = $obj[$i][2];
  $price = $obj[$i][3];
  $buyorder = $obj[$i][4];
  $tournament = $obj[$i][5];
  $datum = $obj[$i][6];

  if(!empty($type)){
    $insertValues = $insertValues . "('$type','$name','$cond',$price,$buyorder,'$tournament','$datum'),";
    //insertData($type, $name, $cond, $price, $buyorder, $datum);
    }
}

//echo substr($insertValues, 0, -1);
$insertValues = substr($insertValues, 0, -1). ";";
//echo $insertValues;
insertLotofData( $insertValues);

function insertLotofData( $valueString){
  include "dbcon.php";

  $sql = "INSERT INTO data (`type`, `name`, `cond`, `price`, `buyorder`, `tournament`, `date`)
  VALUES $valueString";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }



function insertFewData($where, $type, $name, $cond, $price, $buyorder, $datum){
include "dbcon.php";

$sql = "INSERT INTO $where
VALUES ('$type', '$name', '$cond', $price, $buyorder, '$datum' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}


 ?>
