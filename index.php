<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>K&M</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
                         <div id="bannerImage" >     <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>K & M</h1>
                       <p> Flat 50% OFF on all premium brands </p>
                           <h5>The one stop for all your fashion needs</h5>
                       <a href="products.php" class="btn btn-default">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/accessories.jpg" alt=ACCESSORIES">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">ACCESSORIES</p>
                                        <p>Refresh your look with the latest collection of jewellery, watches and bags</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/apparel.jpg" alt="APPAREL">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">APPAREL</p>
                                    <p>Looking to match style and class with luxury and comfort? Search no more</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/footwear.jpg" alt="FOOTWEAR">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">FOOTWEAR</p>
                                   <p>Give your feet the beauty treatment that only brand-new footwear could provide</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>K & M</p>
                                  
                </center>
               </div>
           </footer>
        </div>
    </body>
</html>