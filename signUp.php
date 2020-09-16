<?php
include("connect.php");
?>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Sign Up</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="" method="post">
  
  <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
  <label for="inputName" class="sr-only">Name</label>
  <input type="name" name="name" id="inputName" class="form-control" placeholder="Name" required><br>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required><br>
  <label for="inputPhone" class="sr-only">Phone</label>
  <input autocomplete="true" name="phone" type="phone" id="inputPhone" class="form-control" placeholder="Phone" required autofocus><br>
  
  
  

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <input type = "submit" name="submit" value="Sign up" class="btn btn-lg btn-primary btn-block" />
  <a href="login.php">Go to Login</a>
  <p>Login if already registered</p>
</form>
<?php
if(isset($_POST["submit"]))
{
$id=1;
$name=$_POST["name"];
$pwd=$_POST["pwd"];
$email=$_POST["email"];
$phone=$_POST["phone"];
if(empty($name))
{
  echo "Please Enter Your Name";
}
if(!preg_match ("/^[a-zA-Z\s]+$/",$name))
{
  echo "Please Enter Characters Only!";
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
else if(!preg_match('/^[0-9]*$/',$phone))
{
   echo "Please Enter Only Digits!";
}
else if(strlen($phone)<10)
{
   echo "Phone Number Is less than 10, Please enter Valid Phone Number!";
}
else if(strlen($phone)>10)
{
   echo "Phone Number Is too large, Please enter Valid Phone Number!";
}

else
{
   $sql = "INSERT INTO signup VALUES (NULL, '$name', '$email','$pwd',$phone)";
   $data = mysqli_query($conn,$sql);
   if($data)
   {
     echo "Registration Is Successful!!";
     //header('Location : login.php');
     
   }
}


}


?>
</body>
</html>