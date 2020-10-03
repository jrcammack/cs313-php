<?php
   //start the session
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <title>Yukon Outfitters</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src="shopping_cartJS.js"></script>
      <!-- jQuery Library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../homeCSS.css">
   </head>

   <body>
      <div id="banner" class="container-fluid">
         <div id="bannerRow" class="row">
            <div id="bannerColumn" class="col-lg-12">
               <div class="hero-image">
                  <div class="hero-text"><h1>Your Cart</h1></div>
               </div>
            </div>
         </div>
      </div>
      <div id="infoRow" class="row">
         <div id="" class="col-lg-8"><div class=""></div></div>
         <div id="infoCol1" class="col-lg-2"><div id="numInCart" class="well well-lg">Number of Items in Cart: 0</div></div>
         <div id="infoCol1" class="col-lg-2"><div class=""><a href="browse.php" class="btn btn-primary">Return to Browse</a></div></div>
      </div>
      <div id="info" class="container-fluid">
         <?php
            echo "more coming soon here"
         ?>
      </div>      
   </body>

</html>