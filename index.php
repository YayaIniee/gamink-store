<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamink Store</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">      
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<!-- global styles -->
		<link href="css/flexslider.css" rel="stylesheet"/>
		<link href="css/main.css" rel="stylesheet"/>
    <!-- scripts -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
		<script src="js/superfish.js"></script>	
		<script src="js/jquery.scrolltotop.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<div class="container-fluid bg-dark">
   <div id="top-bar" class="bg-light">
     <div class="row">
       <div class="span4">
         <a href="index.php" class="logo pull-left"><img src="img/BrandGS-b.png" class="site_logo" alt="" width="150px" ></a>
         <div class="span8">
           <div id="menu_user" class="account pull-right">
             <ul class="user-menu">
               <li class="nav-item"><a href="index.php" class="nav-link text-warning">Home</a></li>
               <li class="nav-item"><a href="index.php?p=about" class="nav-link text-warning">About Us</a></li>
               <li class="nav-item"><a href="index.php?p=contact" class="nav-link text-warning">Contact</a></li>

              <?php
                if(isset($_SESSION["role"]))
                {
                  if($_SESSION["role"] == "admin")
                  {
              ?>
               <li class="nav-item"><a href="index.php?p=accountlist" class="nav-link text-warning">User</a></li>
               <li class="nav-item"><a href="index.php?p=rolelist" class="nav-link text-warning">Role</a></li>
               <li class="nav-item"><a href="index.php?p=pembelilist" class="nav-link text-warning">Pembeli</a></li>
               <li class="nav-item"><a href="index.php?p=categorylist" class="nav-link text-warning">Category</a></li>
               <li class="nav-item"><a href="index.php?p=menulist" class="nav-link text-warning">Menu</a></li>
               <li class="nav-item"><a href="index.php?p=bannerlist" class="nav-link text-warning">Banner</a></li>
               <li class="nav-item"><a href="index.php?p=pesananlist" class="nav-link text-warning">Pesanan</a></li>
               <?php
                  } 
                    else //member
                  {
                ?>
                <li class="nav-item"><a href="index.php?p=historypesanan" class="nav-link text-warning"></a>History Pesanan</li>
                <li class="nav-item"><a href="index.php?p=cart" class="nav-link text-warning"></a>Keranjang</li>
                <?php
                  }
                ?>
                <li class="nav-item"><a href="index.php?p=logout" class="nav-link text-warning">Logout</a></li>
                <?php
                }
                  else  // guest
                {
                ?>
                <li class="nav-item"><a href="index.php?p=register" class="nav-link text-warning">Register</a></li>
                <li class="nav-item"><a href="index.php?p=login" class="nav-link text-warning">Login</a></li> 
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


</body>
</html>