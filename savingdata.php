<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>
    <?php
    require'_nav.php';
    ?>
  
   <div class="container">
       <h1 class=text-center>
           signup to our website
       </h1>
       <form action="savingdata.php" method="post">

       <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>


  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>

 

  <div class="form-group">
    <label for="desc">Concern</label>
    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
 



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    
  <?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $desc=$_POST['desc'];

$servername = "localhost";
$username = "root";
$password = "";
$database="contacts";
$conn=mysqli_connect($servername,$username,$password,$database);

 if(!$conn){
   echo "Your connection was lost";
 }
else{
   echo "Your connection was successfull";
   $sql="INSERT INTO `contactus` (`srno`, `name`, `email`, `concern`) VALUES ('1', '$name', '$email', '$desc')";
   $result=mysqli_query($conn,$sql);
  
   if($result){
   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>SUCCESS!!</strong> You are a legend.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
   else{
      echo "Your result was lost";
    }
}  
  }
  ?>
  </body>
  </html>