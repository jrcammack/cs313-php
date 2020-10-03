<?php
   //start the session
   session_start();

   class Tent {
      public $quantity;
      public $price;
      public $totalPrice;

      function __construct() {
         $this->quantity = 0.0;
         $this->price = 200.00;
         $this->totalPrice = $this->quantity * $this->price;
      }

      function getQuantity(){
         return $this->quantity;
      }
      function setQuantity($num){
         $this->quantity = $num;
      }
      function getPrice(){
         return $this->price;
      }
      function setPrice($num){
         $this->price = $num;
      }
      function getTotalPrice(){
         return $this->totalPrice;
      }
      function setTotalPrice(){
         $this->totalPrice = $this->quantity * $this->price;
      }
   }

   class CampingChair {
      public $quantity;
      public $price;
      public $totalPrice;

      function __construct() {
         $this->quantity = 0.0;
         $this->price = 50.00;
         $this->totalPrice = $this->quantity * $this->price;
      }

      function getQuantity(){
         return $this->quantity;
      }
      function setQuantity($num){
         $this->quantity = $num;
      }
      function getPrice(){
         return $this->price;
      }
      function setPrice($num){
         $this->price = $num;
      }
      function getTotalPrice(){
         return $this->totalPrice;
      }
      function setTotalPrice(){
         $this->totalPrice = $this->quantity * $this->price;
      }
   }

   class Cookware {
      public $quantity;
      public $price;
      public $totalPrice;

      function __construct() {
         $this->quantity = 0.0;
         $this->price = 20.00;
         $this->totalPrice = $this->quantity * $this->price;
      }

      function getQuantity(){
         return $this->quantity;
      }
      function setQuantity($num){
         $this->quantity = $num;
      }
      function getPrice(){
         return $this->price;
      }
      function setPrice($num){
         $this->price = $num;
      }
      function getTotalPrice(){
         return $this->totalPrice;
      }
      function setTotalPrice(){
         $this->totalPrice = $this->quantity * $this->price;
      }
   }

   class Cooler {
      public $quantity;
      public $price;
      public $totalPrice;

      function __construct() {
         $this->quantity = 0.0;
         $this->price = 40.00;
         $this->totalPrice = $this->quantity * $this->price;
      }

      function getQuantity(){
         return $this->quantity;
      }
      function setQuantity($num){
         $this->quantity = $num;
      }
      function getPrice(){
         return $this->price;
      }
      function setPrice($num){
         $this->price = $num;
      }
      function getTotalPrice(){
         return $this->totalPrice;
      }
      function setTotalPrice(){
         $this->totalPrice = $this->quantity * $this->price;
      }
   }

   class Flashlight {
      public $quantity;
      public $price;
      public $totalPrice;

      function __construct() {
         $this->quantity = 0.0;
         $this->price = 10.00;
         $this->totalPrice = $this->quantity * $this->price;
      }

      function getQuantity(){
         return $this->quantity;
      }
      function setQuantity($num){
         $this->quantity = $num;
      }
      function getPrice(){
         return $this->price;
      }
      function setPrice($num){
         $this->price = $num;
      }
      function getTotalPrice(){
         return $this->totalPrice;
      }
      function setTotalPrice(){
         $this->totalPrice = $this->quantity * $this->price;
      }
   }

   class Hammock {
      public $quantity;
      public $price;
      public $totalPrice;

      function __construct() {
         $this->quantity = 0.0;
         $this->price = 75.00;
         $this->totalPrice = $this->quantity * $this->price;
      }

      function getQuantity(){
         return $this->quantity;
      }
      function setQuantity($num){
         $this->quantity = $num;
      }
      function getPrice(){
         return $this->price;
      }
      function setPrice($num){
         $this->price = $num;
      }
      function getTotalPrice(){
         return $this->totalPrice;
      }
      function setTotalPrice(){
         $this->totalPrice = $this->quantity * $this->price;
      }
   }

   class HikingBackpack {
      public $quantity;
      public $price;
      public $totalPrice;

      function __construct() {
         $this->quantity = 0.0;
         $this->price = 100.00;
         $this->totalPrice = $this->quantity * $this->price;
      }

      function getQuantity(){
         return $this->quantity;
      }
      function setQuantity($num){
         $this->quantity = $num;
      }
      function getPrice(){
         return $this->price;
      }
      function setPrice($num){
         $this->price = $num;
      }
      function getTotalPrice(){
         return $this->totalPrice;
      }
      function setTotalPrice(){
         $this->totalPrice = $this->quantity * $this->price;
      }
   }

   class MountainBike {
      public $quantity;
      public $price;
      public $totalPrice;

      function __construct() {
         $this->quantity = 0.0;
         $this->price = 250.00;
         $this->totalPrice = $this->quantity * $this->price;
      }

      function getQuantity(){
         return $this->quantity;
      }
      function setQuantity($num){
         $this->quantity = $num;
      }
      function getPrice(){
         return $this->price;
      }
      function setPrice($num){
         $this->price = $num;
      }
      function getTotalPrice(){
         return $this->totalPrice;
      }
      function setTotalPrice(){
         $this->totalPrice = $this->quantity * $this->price;
      }
   }

   class SleepingBag {
      public $quantity;
      public $price;
      public $totalPrice;

      function __construct() {
         $this->quantity = 0.0;
         $this->price = 90.00;
         $this->totalPrice = $this->quantity * $this->price;
      }

      function getQuantity(){
         return $this->quantity;
      }
      function setQuantity($num){
         $this->quantity = $num;
      }
      function getPrice(){
         return $this->price;
      }
      function setPrice($num){
         $this->price = $num;
      }
      function getTotalPrice(){
         return $this->totalPrice;
      }
      function setTotalPrice(){
         $this->totalPrice = $this->quantity * $this->price;
      }
   }
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
                  <div class="hero-text"><h1>YOUR CART</h1></div>
               </div>
            </div>
         </div>
      </div>
      <div id="infoRow" class="row">
         <div id="" class="col-lg-8"><div class=""></div></div>
         <div id="infoCol1" class="col-lg-2"><div id="numInCart" class="well well-lg">Number of Items in Cart: <?php echo $_SESSION["numInCart"] ?></div></div>
         <div id="infoCol1" class="col-lg-2"><div class=""><a href="browse.php" class="btn btn-primary">Return to Browse</a></div></div>
      </div>
      <div id="info" class="container-fluid">
         <div id="infoRow" class="row">
            <div id="" class="col-lg-3"><div class=""></div></div>
            <div id="" class="col-lg-6"><div class="well well-lg center">Tents: <?php $_SESSION['tent']->getQuantity() ?> total: $<?php $_SESSION['tent']->getTotalPrice() ?></div></div>
            <div id="" class="col-lg-3"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-3"><div class=""></div></div>
            <div id="" class="col-lg-6"><div class="well well-lg center">Camping Chairs: <?php $_SESSION['camping chair']->getQuantity() ?> total: $<?php $_SESSION['camping chair']->getTotalPrice() ?></div></div>
            <div id="" class="col-lg-3"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-3"><div class=""></div></div>
            <div id="" class="col-lg-6"><div class="well well-lg center">Cookware Sets: <?php $_SESSION['cookware']->getQuantity() ?> total: $<?php $_SESSION['cookware']->getTotalPrice() ?></div></div>
            <div id="" class="col-lg-3"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-3"><div class=""></div></div>
            <div id="" class="col-lg-6"><div class="well well-lg center">Coolers: <?php $_SESSION['cooler']->getQuantity() ?> total: $<?php $_SESSION['cooler']->getTotalPrice() ?></div></div>
            <div id="" class="col-lg-3"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-3"><div class=""></div></div>
            <div id="" class="col-lg-6"><div class="well well-lg center">Flashlights: <?php $_SESSION['flashlight']->getQuantity() ?> total: $<?php $_SESSION['flashlight']->getTotalPrice() ?></div></div>
            <div id="" class="col-lg-3"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-3"><div class=""></div></div>
            <div id="" class="col-lg-6"><div class="well well-lg center">Hammocks: <?php $_SESSION['hammock']->getQuantity() ?> total: $<?php $_SESSION['hammock']->getTotalPrice() ?></div></div>
            <div id="" class="col-lg-3"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-3"><div class=""></div></div>
            <div id="" class="col-lg-6"><div class="well well-lg center">Hiking BackPacks: <?php $_SESSION['hiking backpack']->getQuantity() ?> total: $<?php $_SESSION['hiking backpack']->getTotalPrice() ?></div></div>
            <div id="" class="col-lg-3"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-3"><div class=""></div></div>
            <div id="" class="col-lg-6"><div class="well well-lg center">Mountain Bikes: <?php $_SESSION['mountain bike']->getQuantity() ?> total: $<?php $_SESSION['mountain bike']->getTotalPrice() ?></div></div>
            <div id="" class="col-lg-3"><div class=""></div></div>
         </div>
         <div id="infoRow" class="row">
            <div id="" class="col-lg-3"><div class=""></div></div>
            <div id="" class="col-lg-6"><div class="well well-lg center">Sleeping Bags: <?php $_SESSION['sleeping bag']->getQuantity() ?> total: $<?php $_SESSION['sleeping bag']->getTotalPrice() ?></div></div>
            <div id="" class="col-lg-3"><div class=""></div></div>
         </div>  
      </div>      
   </body>

</html>