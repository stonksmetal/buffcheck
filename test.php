<?php

$data =$_POST['data'];
//$datadecode = json_decode($data);
$obj = json_decode($data,true);
//$data = var_dump(json_decode($data));
print_r($obj);
echo gettype($obj);
//echo $obj[0];

 ?>
