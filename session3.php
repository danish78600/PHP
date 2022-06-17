<?php
session_start();
if(isset($_SESSION['username']))
{
echo "Welcome". $_SESSION['username'];
echo "<br>";
echo "Password is". $_SESSION['password'];
echo "<br>";
echo "You have login successfully";
}
else
{
    echo "You have successfully logged out";
}
?>