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
 echo "<br>";

 $sql="CREATE TABLE  `protrip` ( `Sno` INT(12) NULL ,  `Name` VARCHAR(11) NOT NULL ,  `Class` INT(11) NOT NULL ,  `Section` VARCHAR(11) NOT NULL )";
 $result=mysqli_query($conn,$sql);
 if($result){
     echo "The table was create successfully";
 }
 else
 {
     echo "The table was not created successfully";
 }
 ?>