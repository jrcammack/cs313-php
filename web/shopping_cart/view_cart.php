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
         return $this->$quantity;
      }
      function setQuantity($num){
         $this->$quantity = $num;
      }
      function getPrice(){
         return $this->$price;
      }
      function setPrice($num){
         $this->$price = $num;
      }
      function getTotalPrice(){
         return $this->$totalPrice;
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
                  <div class="hero-text"><h1>Your Cart</h1></div>
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
         <?php
            echo '<div id="infoRow" class="row">
                     <div id="" class="col-lg-12"><div class="">Tents: ' . $_SESSION['tent']->getQuantity() . ' Item total: $' . $_SESSION['tent']->getTotalPrice() . '</div></div>
                  </div>'   
         ?>
      </div>      
   </body>

</html>