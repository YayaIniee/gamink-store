<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamink Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
 <div class="container-fluid">
   <div id="top-bar" class="container">
     <div class="row">
       <div class="span4">
         <a href="index.php" class="logo pull-left"><img src="" class="site_logo" alt=""></a>
         <div class="span8">
           <div id="menu_user" class="account pull-rigth">
             <ul class="user-menu">
               <li><a href="index.php">Home</a></li>
               <li><a href="index.php?p=about">About Us</a></li>
               <li><a href="index.php?p=contact"></a></li>

              <?php
                if(isset($_SESSION["role"]))
                {
                  if($_SESSION["role"] == "admin")
                  {
              ?>
               <li><a href="index.php?p=accountlist">User</a></li>
               <li><a href="index.php?p=rolelist">Role</a></li>
               <li><a href="index.php?p=pembelilist"></a></li>
               <li><a href="index.php?p=categorylist">Category</a></li>
               <li><a href="index.php?p=menulist"></a>Menu</li>
               <li><a href="index.php?p=bannerlist">Banner</a></li>
               <li><a href="index.php?p=pesananlist">Pesanan</a></li>
               <?php
                  } 
                    else //member
                  {
                ?>
                <li><a href="index.php?p=historypesanan"></a>History Pesanan</li>
                <li><a href="index.php?p=cart"></a>Keranjang</li>
                <?php
                  }
                ?>
                <li><a href="index.php?p=logout">Logout</a></li>
                <?php
                }
                  else
                {
                ?>
                <li><a href="index.php?p=register">Register</a></li>
                <li><a href="index.php?p=login">Login</a></li> 
                <?php 
                } 
                ?>

             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>




    <div id="top-bar" class="container-fluid">
        <div class="container">
            <div class="row mt-2">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/foto1.jpg" alt="" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="img/foto2.jpg" alt="" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="img/foto3.jpg" alt="" class="d-block" style="width:100%">
            </div>
          </div>
          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
            </div>
        </div>
    </div>
    <footer> <?php include 'footer.php' ?></footer>
</body>
</html>