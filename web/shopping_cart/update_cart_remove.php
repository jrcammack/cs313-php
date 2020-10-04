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

   

   //get counter and increment 1
   $currentCounter = $_SESSION["numInCart"];
   $newCounter = $currentCounter - 1;

   //get product to be added
   $productToRemove = $_GET["product"];
   $newProduct;

   switch ($productToRemove) {
      case 'tent':
         if ($_SESSION["tent"] == '') {
            
         }
         else {
            $_SESSION["tent"]->setQuantity($_SESSION['tent']->getQuantity() - 1);
            $_SESSION["tent"]->setTotalPrice();
         }
         break;
      case 'camping chair':
         if ($_SESSION["camping chair"] == '') {
            
         }
         else {
            $_SESSION["camping chair"]->setQuantity($_SESSION['camping chair']->getQuantity() - 1);
            $_SESSION["camping chair"]->setTotalPrice();
         }
         break;
      case 'cookware':
         if ($_SESSION["cookware"] == '') {
            
         }
         else {
            $_SESSION["cookware"]->setQuantity($_SESSION['cookware']->getQuantity() - 1);
            $_SESSION["cookware"]->setTotalPrice();
         }
         break;
      case 'cooler':
         if ($_SESSION["cooler"] == '') {
            
         }
         else {
            $_SESSION["cooler"]->setQuantity($_SESSION['cooler']->getQuantity() - 1);
            $_SESSION["cooler"]->setTotalPrice();
         }
         break;
      case 'flashlight':
         if ($_SESSION["flashlight"] == '') {
            
         }
         else {
            $_SESSION["flashlight"]->setQuantity($_SESSION['flashlight']->getQuantity() - 1);
            $_SESSION["flashlight"]->setTotalPrice();
         }
         break;
      case 'hammock':
         if ($_SESSION["hammock"] == '') {
            
         }
         else {
            $_SESSION["hammock"]->setQuantity($_SESSION['hammock']->getQuantity() - 1);
            $_SESSION["hammock"]->setTotalPrice();
         }
         break;
      case 'hiking backpack':
         if ($_SESSION["hiking backpack"] == '') {
            
         }
         else {
            $_SESSION["hiking backpack"]->setQuantity($_SESSION['hiking backpack']->getQuantity() - 1);
            $_SESSION["hiking backpack"]->setTotalPrice();
         }
         break;
      case 'mountain bike':
         if ($_SESSION["mountain bike"] == '') {
            
         }
         else {
            $_SESSION["mountain bike"]->setQuantity($_SESSION['mountain bike']->getQuantity() - 1);
            $_SESSION["mountain bike"]->setTotalPrice();
         }
         break;
      case 'sleeping bag':
         if ($_SESSION["sleeping bag"] == '') {
            
         }
         else {
            $_SESSION["sleeping bag"]->setQuantity($_SESSION['sleeping bag']->getQuantity() - 1);
            $_SESSION["sleeping bag"]->setTotalPrice();
         }
         break;     
   }

   $_SESSION["numInCart"] = $newCounter;
   
   echo $_SESSION["numInCart"];
?>