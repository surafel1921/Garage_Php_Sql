<?php
require 'connect.php';
if (isset($_POST['send'])) {
    $Date=$_POST['date'];
    $Driver_Name=$_POST['drivername'];
    $Plate_Code=$_POST['platecode'];
    $Plate=$_POST['plate'];
     $Company=$_POST['company'];
    $vehicle_Name=$_POST['vehiclename'];
    $Request=$_POST['request'];
  
    $input="INSERT INTO request_for_car_service(date,drivername,platecode,plate,company,vehiclename,request) VALUES ('$Date','$Driver_Name','$Plate_Code','$Plate','$Company','$vehicle_Name','$Request')";
    $input_request=mysqli_query($conn,$input);

    if ($input_request) {
        echo '<script>';
        echo 'alert("inserted")';
        echo '</script>';
    }else{
        echo '<script>';
        echo 'alert("not inserted")';
         echo '</script>';
        // echo 'not'.mysqli_error($conn);
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
<link rel="stylesheet" href="../CSS/request.css">
    <title>Document</title>
</head>
<body><br>
    
        <div class="logo">
            <span>EIIDE</span>  AUTO REQUEST FORM
            <br>
            <hr>
            
        </div><br>
    <div class="container">
   <form action="Request.php" method="post">
   <label for="Date" class="lable">Date</label><br><br>
      <input type="date" name="date" id=""><br><br>

      <label for="Name"class="lable">Driver Name</label><br><br>
      <input type="text" name="drivername" id=""><br><br>
     
      <label for="Name"class="lable">Plate Code</label><br><br>
      <select name="platecode" id="">
        <option value=" "></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="35">35</option>


       
    </select><br><br>
 
      <label for="Name"class="lable">Plate</label><br><br>
      <input type="text" name="plate" id=""><br><br>

      <label for="Name"class="lable">Company</label><br><br>
    <select name="company" id="">
        <option value=" "></option>
        <option value="Ngo">Ngo</option>
        <option value="Government">Government</option>
        <option value="Privet Comp">Privet Comp.</option>
        <option value="Personal">Personal</option>
       
    </select><br><br>

   <label for="Name"class="lable">vehicle Name</label><br><br>
    <select name="vehiclename" id="">

        <option value=" "></option>
        <option value="Mercedes-Benz">Mercedes-Benz</option>
        <option value="Totota">Totota</option>
        <option value="Lexus">Lexus</option>
        <option value="Bmw">Bmw</option>
        <option value="Mazda">Mazda</option>
        <option value="Hyundai">Hyundai</option>
        <option value="Nissan">Nissan</option>
        <option value="Audi">Audi</option>
        <option value="Kia">Kia</option>
    </select><br><br>
    <label for="Name"class="lable">vehicle Type</label><br><br>
    <select name="vehiclename" id="">

        <option value=" "></option>
        <option value="Bus">Bus</option>
        <option value="Light Vehcles">Light Vehcles</option>
        <option value="Heavy Truck">Heavy Truck</option>
     
    </select><br><br>
    <label for="Name"class="lable">Service Type</label><br><br>
    <select name="vehiclename" id="">

        <option value=" "></option>
        <option value="car washing">car washing</option>
        <option value="Bolo">Bolo</option>
        <option value="Body">Body</option>
        <option value="Electric">Electric</option>
        <option value="Mazda"></option>
        <option value="Hyundai"></option>
        <option value="Nissan"></option>
        <option value="Audi"></option>
        <option value="Kia"></option>
    </select><br><br>
   
    <label for="Name"class="lable">Request</label><br><br>

     <textarea name="request" id="" cols="148" rows="4"></textarea> 

 <input type="submit" name="send"  value="Send"><br><br><br><br><br>
   </form>
    </div>
</body>
</html>