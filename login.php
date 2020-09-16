<?php
session_start();
$db_host = 'localhost:3320';
$db_name = 'galwanvalley';
$db_user = 'root';
$db_pass = '';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if(isset($_REQUEST['submit']))
{
 $username=$_REQUEST['name'];
 $password=$_REQUEST['pwd'];
 $query=mysqli_query($mysqli,"select * from signup where name='$username' && pwd='$password'");
 $row=mysqli_num_rows($query);
 if($row == true)
 {
  $_SESSION['name']=$username;
  header('location:product.php');
 }
 else
 {
    header('location:login.php');
 }
}
?>
 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Log In</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

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
    <form class="form-signin" method="post" >

        <h1 class="h3 mb-3 font-weight-normal">Please Login </h1><br>
        <label for="inputUsername" class="sr-only">Username</label>
        <input autocomplete="off" type="username" id="inputUsername" class="form-control" placeholder="Username" required
            autofocus name="name"><br>
        

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="pwd">
        
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Log in</button>
        <p>Don't have an account...Sign Up</p>
        

    </form>
    
    
</body>


</html>