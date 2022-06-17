<?php
// $fptr=fopen("if.txt","r");
// $con=fread($fptr,filesize("if.txt"));
// echo $con;


// readfile("if.txt");

// $fptr=fopen("if.txt","w");       //it will write this content in the file.
// $a=fwrite($fptr,"my name is lakhan sajno ka sajan");

// $fptr=fopen("if.txt","a");      //It will add content to the particular file.
// $a=fwrite($fptr,"my name is Danish");


 $fptr=fopen("if.txt","r");     
 while($a=fgetc($fptr)){
     echo $a;
     if($a=="D"){
         echo $a;
     }
 }
 echo $a;

?>