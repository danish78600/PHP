<?php
$server="localhost"; 
 $username="root";
$password="";
$database="users";
$conn= mysqli_connect($server,$username,$password,$database);
if($conn){
    echo "success";
}
else{
    echo "wromng";
}

$sql="UPDATE `users` SET `username`='ba1' WHERE `users`. `username`='danwe112' LIMIT 1";

$result=mysqli_query($conn,$sql);
if($result)
{
    echo "pro";
} 
?>