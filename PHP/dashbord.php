<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}else{

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="../CSS/_index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Orelega+One&family=Protest+Revolution&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>EIIDE GARAGE</title>
</head>
<body >

    <div class="top-bar-item ">
        <div class="logo">
            <span>EIIDE</span>  AUTO
            <hr>
            
        </div>
        <div class="working-time">
            <div class="icon">
           <span class="material-symbols-outlined">
                  schedule
                     </span>
            <h3 class="text-muted">Opening Hour</h3>
        </div>
            <p class="text-muted">Mon - Fri , 2:30 - 10:30 (<?php echo date("l") ?>) 
        </div>
        <div class="Call-time">
            <div class="icon">
                <span class="material-symbols-outlined">
                    call
                    </span>
            <h3 class="text-muted">Call Us</h3>

            </div>
            <p class="text-muted">+251</p>
        </div>
        <div class="Email-time">
       <div class="icon">
                <span class="material-symbols-outlined">
                    mail
                    </span>
            <h3 class="text-muted">Email Us</h3>
            </div>
            <p class="text-muted">example@gmail.com</p>
        </div>
    </div>
<header>
    <nav>
<div class="container-xxl ">
   
    <ul  class="bg-dark ">
    
        <li><a href="./dashbord.php" class="home" style="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="./service.html">Service</a></li>
        <li><a href="">Price</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="./admin_login.php">Admin</a></li>
        <li><a href="./Request.php">Request for Car Service</a></li>
        <li><a href=""style="display:flex ;align-items: center;">
      <span class="material-symbols-outlined "style="font-size:45px; " >account_circle</span>
        <span style="font-size:10px;">  <?php echo $_SESSION['user'];?></span></a></li>
      
        <li><a href="./logout.php"><i class="bi bi-box-arrow-right"></i></a></li>

    </ul>
</div>

</nav>

</header>
</div><br><br>

 <div class="main-part container">
    <h1 >BOLO</h1>
<div class="bolo">
   
    <div class="img">
        <img src="../Img/pexels-brady-knoll-3221165.jpg" alt="" srcset="">
       
    </div>
    <div class="dialog">
        <p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template. On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks.</p>
    
    
</div> 
        </div><br><br><hr><br><br>
       


<h1>Car washing</h1>
<div class="bolo">

    <div class="dialog">
        <p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template. On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks.</p>
    
    </div>
   
    <div class="img">
        <img src="../Img/pexels-khunkorn-laowisit-5233271.jpg" alt="" srcset="">
       
        </div>
    </div><br><br><hr><br><br>


    <h1>Service</h1>
    <div class="bolo">
        <div class="img">
            <img src="../Img/pexels-cottonbro-studio-4480453.jpg" alt="" srcset="">
        </div>
        <div class="dialog">
            <p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template. On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks.</p>
        
        </div>
        </div> <br><br><hr><br><br>
        <h1>Body</h1>
        <div class="bolo">
          
            <div class="dialog">
                <p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template. On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks.</p>
            
            </div>
            <div class="img">
                <img src="../Img/depositphotos_56693085-stock-photo-car-body-work-auto-repair.jpg" alt="" srcset="">
            </div>
            </div> 
    </div>
</div><br><br><hr><br><br>
<div class="eiide-text">
    
    <p>Ethiopian Industrial Inputs Development Enterprise</p>
</div><br><br>
<div class="arrow">
    <span class="material-symbols-outlined"> keyboard_double_arrow_down</span>
</div><br><br><hr><br><br>

<div class="our-product">
<h1>Our Others Products </h1>
   <div class="our-img">
<div class="img">
        <img src="../Img/pexels-cottonbro-studio-4489765.jpg" alt="" srcset="">
        <img src="../Img/pexels-gerd-altmann-21694.jpg" alt="" srcset="">
        <img src="../Img/pexels-khunkorn-laowisit-5233271.jpg" alt="" srcset="">
         <img src="../Img/pexels-cottonbro-studio-4489765.jpg" alt="" srcset="">
         
       
       
      
    </div>
</div>
</div>

























<footer  class="bg-dark text-white">
<div class="footer-container">
      <div class="contact">
        <h3>Contact</h3><br>
        <p class="">EIIDE Garage <br>Piassa Atiklt Tera <br>europeangarage94@gmail.com <br> <a href="www.eiide.com">www.eiide.com </a> <br> +251</p>

       
      </div>
      <div class="service-hours">
        <h3>Service Hours</h3><br>
      <p class="">Monday – Friday , 2:30 - 10:30 (<?php echo date("l") ?>) <br>Saturday Appointment Only. Closed Sunday. </p>
      
      </div>
      <div class="company">
        <h3>Company</h3><br>
         <img src="../img/images.jpg" alt="" srcset="">
         </div>
        </div><br><br><br><br>

        <h4 style="font-size:12px;text-align:center" >&copy; <?php echo date('Y') ?> <span style="color:rgb(239,76,37)" >Ethiopian Industrial Inputs Development Enterprise  </span>, All Right Reserved. <span style="color:rgb(239,76,37)" >developed By Surafel D.</span> </h4><br><br><br>
</footer>
</body>
</html>




    <?php
}


?>
        
        
       