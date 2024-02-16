<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- <link rel="stylesheet" href="../CSS/index.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body><br><br><br>
<table class="table table-striped ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Driver name</th>
      <th scope="col">Plate code</th>
      <th scope="col">Plate</th>
      <th scope="col">Company</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Service Type</th>
      <th scope="col">Request</th>
      <th scope="col">Date</th>

    </tr>
  <tbody>
                <?php
                require 'connect.php';
                             $display="SELECT * FROM request_for_car_service";
                             $display_query=mysqli_query($conn,$display);
                             
                             if ($display_query) {
                              while ($row=mysqli_fetch_array($display_query)) {
                                ?>
                                <tr>
                                <th ><?php echo $row['id']?></th>
                                <th ><?php echo $row['drivername']?></th>
                                <th ><?php echo $row['platecode']?></th>
                                <th ><?php echo $row['plate']?></th>
                                <th ><?php echo $row['company']?></th>
                                <th ><?php echo $row['vehiclename']?></th>
                                <th ><?php echo $row['vehicle_type']?></th>
                                <th ><?php echo $row['service_type']?></th>
                                <th ><?php echo $row['request']?></th>
                                <th ><?php echo $row['date']?></th>
                                </tr>
                                <?php
                              }
                             }else{
                                echo '<script>';
                                echo 'alert("not display")';
                                 echo '</script>';
                             }

                         
                ?>
 </tbody>
</thead>
</table>

</body>
</html>