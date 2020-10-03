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
                  <div class="hero-text"><h1>ADVENTURE IS WAITING</h1></div>
               </div>
            </div>
         </div>
      </div>
      <div id="infoRow" class="row">
         <div id="" class="col-lg-8"><div class=""></div></div>
         <div id="infoCol1" class="col-lg-2"><div class="well well-lg">Number of Items in Cart: 0</div></div>
         <div id="infoCol1" class="col-lg-2"><div class=""><button class="addCart" type="button">View Cart</button></div></div>
      </div>
      <div id="info" class="container-fluid">
         <div id="infoRow" class="row">
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="well well-lg"><img src="tent.jpg" class="" alt="tent" width="200px" height="100px"></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="well well-lg"><img src="camping_chair.jpg" class="" alt="camping chair" width="200px" height="100px"></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="well well-lg"><img src="cookware.jpg" class="" alt="cookware" width="200px" height="100px"></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row itemDescripRow">
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="itemDescription">TENT $200.00<br><br><button onclick="addToCart('tent')" class="addCart" type="button">Add to Cart</button></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="itemDescription">CAMPING CHAIR $50.00<br><br><button onclick="addToCart('camping chair')" class="addCart" type="button">Add to Cart</button></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="itemDescription">COOKWARE $20.00<br><br><button onclick="addToCart('cookware')" class="addCart" type="button">Add to Cart</button></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="well well-lg"><img src="cooler.jpg" class="" alt="cooler" width="200px" height="100px"></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="well well-lg"><img src="flashlight.jpg" class="" alt="flashlight" width="200px" height="100px"></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="well well-lg"><img src="hammock.jpg" class="" alt="hammock" width="200px" height="100px"></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row itemDescripRow">
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="itemDescription">COOLER $40.00<br><br><button onclick="addToCart('cooler')" class="addCart" type="button">Add to Cart</button></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="itemDescription">FLASHLIGHT $10.00<br><br><button onclick="addToCart('flashlight')" class="addCart" type="button">Add to Cart</button></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="itemDescription">HAMMOCK $75.00<br><br><button onclick="addToCart('hammock')" class="addCart" type="button">Add to Cart</button></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="well well-lg"><img src="hiking_backpack.jpg" class="" alt="backpack" width="200px" height="100px"></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="well well-lg"><img src="mountain_bike.jpg" class="" alt="mountain bike" width="200px" height="100px"></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="well well-lg"><img src="sleeping_bag.jpg" class="" alt="sleeping bag" width="200px" height="100px"></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row itemDescripRow">
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="itemDescription">HIKING BACKPACK $100.00<br><br><button onclick="addToCart('hiking backpack')" class="addCart" type="button">Add to Cart</button></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="itemDescription">MOUNTAIN BIKE $250.00<br><br><button onclick="addToCart('mountain bike')" class="addCart" type="button">Add to Cart</button></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="infoCol1" class="col-lg-2"><div class="itemDescription">SLEEPING BAG $90.00<br><br><button onclick="addToCart('sleeping bag')" class="addCart" type="button">Add to Cart</button></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
            <div id="" class="col-lg-1"><div class=""></div></div>
         </div>
      </div>      
   </body>

</html>