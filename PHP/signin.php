<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="../CSS/sign.css">
    <title>Document</title>
</head>
<body >
    <div class="container ">

               <form action="signin.php" method="post" >
               <label for="Firstname" class="lable" >Firstname </label><br>
                   <input type="text" name="firstname"id="" required><br>

                   <label for="Firstname"class="lable">Lastname </label><br>
                   <input type="text" name="lastname" id="" required><br>

                   <label for="Firstname"class="lable">Email </label><br>
                   <input type="text" name="email"id="" required><br>
                   
                   <label for="passcode"class="lable">Passward</label><br>
                   <input type="password" name="password" id=""><br><br>
                   <input class="text-white" type="submit" value="Signin" name="submit" class="submit">
              
               </form><br>
               <p class="text-white">Not Registerd?<a href="./login.php">Create an account</a></p>
                                 
    </div>
</body>
</html>

<?php
require 'connect.php';
  if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

            


$insert="INSERT INTO  garage_auto_tables(firstname,lastname,email,password) VALUE('$firstname','$lastname','$email','$password')";
$insert_query=mysqli_query($conn,$insert);

if ($insert_query) {
    header('location:dashbord.php');
    // echo '<script>';
    // echo 'alert("insertd data")';
    // echo '</script>';
    // echo 'insert';
}else{
    // echo ' not insert'.mysqli_error($conn);

     echo '<script>';
    echo 'alert("not insertd data")';
    echo '</script>';
}
}

?>
