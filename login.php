<?php

$host="localhost";

$user="root";

$password="";

$db="login";

//for logout option using session

session_start();

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection_error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")

{
    $username=$_POST["username"];

    $password=$_POST["password"];
// username and password is coming from database
    $sql="select * from login_form where username='".$username."' AND password='".$password."'";

    //if the username and pasword exists or nt

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    //user_type is also coming from database

    if($row["user_type"]=="user" && $row["password"]=="1234")
    {
        $_SESSION["username"]=$username;

        $_SESSION["password"]=$password;

        header('location:home.php');
    }

    else if($row["user_type"]=="admin" && $row["password"]=="12345")
    {
        $_SESSION["username"]=$username;

        $_SESSION["password"]=$password;

        header('location:home.php');
    }


    else
    {
        header("location: login.php?error=Incorrect Username Or Password.");
        exit();
    }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<link rel="stylesheet" href="style.css">
 
<div class="conntainer">
  
<section class="login">

<h1>LOGIN</h1>
<br>

<form action="#" method="POST">



    <label>username</label>

    <input type="text" name="username" required placeholder="enter username">  
    
    <br>
    <br>

    <label>password</label>

    <input type="password" name="password" required placeholder="enter password"> 
    
    <br>
    <br>

    <div class="button">

    <input type="submit" value="login">

    </div>
    

</form>



</section>

</div>

</body>
</html>