<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="black";
$conn=mysqli_connect($servername,$username,$password,$database);

 if(!$conn){
   echo "Your connection was lost";
 }
else{
   echo "Your connection was successfull";
 }
echo "<br>";  //primary key cannot be duplicated.

 $sql="INSERT INTO `protrip` (`Sno`, `Name`, `Class`, `Section`) VALUES ('22', 'manjulika', '101', 'aa')";
 $result=mysqli_query($conn,$sql);

 if(!$result){
    echo "Your result was lost";
  }
 else{
    echo "Your result was successfull";
  }



?>