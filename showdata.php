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
 echo "<br>";

 $sql="SELECT * FROM `4`";
 $result=mysqli_query($conn,$sql);
 $num= mysqli_num_rows($result);//it will give you no of rows.

echo "<br>";

echo $num;
while($row=mysqli_fetch_assoc($result)){
    //   echo var_dump($row);
echo "<br>";
    echo $row ['Sr No'] . " Hello " .  $row ['Name'] . " your class is "  . $row ['Class'] . " your Section is  " . $row ['Section'];
      echo "<br>";
}


 ?>