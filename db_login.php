<?php
session_start();
include("db_connection.php"); //Establishing connection with our database

$error = ""; //Variable for storing our errors.
if(isset($_POST["login"]))
{
if(empty($_POST["email"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];

// To protect from MySQL injection
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);
$password = md5($password);

//Check username and password from database
$sql="SELECT id FROM users WHERE email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) == 1)
{
header("location: home.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect username or password.";
}

}
}

?>