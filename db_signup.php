<?php
  require_once "db_connection.php";
    if (isset($_POST['signup'])) {
        $name = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
        if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
            $name_error = "Name must contain only alphabets and space";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email ID";
        }
        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
        }
        if($password != $cpassword) {
            $cpassword_error = "Password and Confirm Password doesn't match";
        }
        if (!$error) {
            if(mysqli_query($conn, "INSERT INTO users(gender,username, email,password) VALUES( '" . $gender . "','" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
             header("location: login.php");
             $to = $_POST['email'];
             $subject = $_POST['username'];
             $message = "Account succesfully Created";
             $from = "kaingidaudi@gmail.com";
             $headers ="From:" . $from;
             if (mail($to,$subject,$message,$headers)) {
                 echo "mail sent";
             }
             else{
                echo "Something went wrong";
             }
             exit();
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }
?>