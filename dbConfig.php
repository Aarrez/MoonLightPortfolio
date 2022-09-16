<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php

$dbhost="localhost";
$dbUsr="Aaron";
$dbPass="pdpquo7G";
$dbName="portfolioserver";


$conn = New mysqli($dbhost, $dbUsr, $dbPass, $dbName);

if($conn -> connect_error){
  die("Connection failed: " . $conn->connect_error);
}
?>

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
