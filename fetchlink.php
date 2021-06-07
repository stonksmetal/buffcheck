<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a id="downloadAnchorElem" style="display:none"></a>
  </body>
</html>

<?php

//$url = "https://prices.csgotrader.app/2021/03/04/buff163.json";
// $url = "http://data.fixer.io/api/latest?access_key=a8eebd7991ccb1da2654554cfb462885";
// $json = file_get_contents($url);
// $json_data = json_decode($json, true);
// echo "My token: ". $json_data["access_token"];
// if(empty($json_data)){echo "<script > alert('shit')</script>";}
//
// print_r($json_data);
//file_put_contents("Tmpfile.zip", fopen("https://prices.csgotrader.app/2021/03/04/buff163.json", 'r'));
//file_put_contents("Tmpfile.zip", file_get_contents("https://prices.csgotrader.app/2021/03/04/buff163.json")));


// assuming file.zip is in the same directory as the executing script.
// $file = 'Tmpfile.zip';
//
// // get the absolute path to $file
// $path = "./buffcheck";
//
$inp = file_get_contents('https://prices.csgotrader.app/2021/03/04/buff163.json');
echo "inp:".$inp;
$tempArray = json_decode($inp);
echo "temparray=".$tempArray;

$jsonData = json_encode($tempArray);
echo "jsonData:".$jsonData;
file_put_contents('results.json', $jsonData);
 ?>
