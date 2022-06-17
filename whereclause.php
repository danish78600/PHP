<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="kannu";
$conn=mysqli_connect($servername,$username,$password,$database);

 if(!$conn){
   echo "Your connection was lost";
 }
else{
   echo "Your connection was successfull";
 }
 echo "<br>";
 $result=mysqli_query($conn,$sql);
 $sql="SELECT * FROM `trip` WHERE `dest` = 'nepal'";

 $num= mysqli_num_rows($result);
echo $num;
echo "records have been found";
echo "<br>";
if($num>0)
{
  while($row=mysqli_fetch_assoc($result)){
    echo $row['sr'] . " hello " . $row['name']  ." Welcome to ". $row['dest'];
    echo "<br>";
}
}


if($result){
  echo "pro";
}
else {
  echo "noob";
}
?>