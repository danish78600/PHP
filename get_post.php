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
   require '_nav.php'
   ?>
   <div class="container">
       <h1 class=text-center>
           signup to our website
       </h1>
       <form action="get_post.php" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Singup</button>
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
  </body>

  <?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $email=$_POST['username'];
    $password=$_POST['password'];
    echo '<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>You have successfully signed up . Your username is $email and your password is $password</p>
    <hr>
    <p class="mb-0">Make Sure your password will be safe and secured.</p>
  </div>';
  }
  ?>
</html>