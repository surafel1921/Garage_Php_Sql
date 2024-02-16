
<?php

require 'connect.php';
$login_error='';
if (isset($_POST['submit'])) {
    $firstname=$_POST['firstname'];
    $password=$_POST['password'];



    $select="SELECT * FROM admin_login";
    $select_query=mysqli_query($conn,$select);
    if ($select_query) {
         while ($row=mysqli_fetch_assoc($select_query)) {
            $dbfirstname=$row['firstname'];
            $dbpassword=$row['password'];
        }


            if ($dbfirstname == $firstname && $dbpassword == $password) {
                session_start();
                $_SESSION['user']=$dbfirstname;
                header('location:admin.php');


         }else{
             $login_error ='Please first registration'.mysqli_error($conn);
         }



}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="../CSS/gara_login.css">
    <title>Document</title>
</head>
<body class="">
    <div class="container ">

               <form action="admin_login.php" method="post">
                   <label for="Firstname" class="lable">Firstname </label><br>
                   <input type="text" name="firstname"required id=""><br>
                   <label for="passcode" class="lable">Passward</label><br>
                   <input type="password" name="password" id=""><br><br>
                   <p style="color:red"><?php echo $login_error?></p><br>
                   <input type="submit" value="Login" name="submit" class="submit text-white">
              
               </form><br>
               <p class="text-white">Not Registerd?<a href="./signin.php">Create an account</a></p>
                                 
    </div>
</body>
</html>

