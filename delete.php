<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="data";
$conn=mysqli_connect($servername,$username,$password,$database);

 if(!$conn){
   echo "Your connection was lost";
 }
else{
   echo "Your connection was successfull";
 }
 echo "<br>";
$sql="DELETE FROM `data` WHERE `name` = 'bhai'LIMIT 8"; //limit will tell us that how much particular rows to delete.

$result=mysqli_query($conn,$sql);
$aff=mysqli_affected_rows($conn);
 echo "No of rows $aff";
 echo "<br>";
if($result)
{
    echo "Success";
}
else{
    echo "Not";
}
?>