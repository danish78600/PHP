<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="danish";
$conn=mysqli_connect($servername,$username,$password,$database);



 if(!$conn){
   echo "Your connection was lost";
 }
else{
   echo "Your connection was successfull";
 }


$sql="CREATE DATABASE pro";
$result=mysqli_query($conn,$sql);

if(!$result){
  echo "Your database is not created";
}
else{
  echo "Your database is created";
}
?>
