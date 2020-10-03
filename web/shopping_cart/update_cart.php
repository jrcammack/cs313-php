<?php
   //start the session
   session_start();

   class Tent {
      private $quantity = 0;
      private $price = 200.00;
      private $totalPrice = $quantity * $price;

      public function getQuantity(){
         return $this->$quantity;
      }
      public function setQuantity($num){
         $this->$quantity = $num;
      }
      public function getPrice(){
         return $this->$price;
      }
      public function setPrice($num){
         $this->$price = $num;
      }
      public function getTotalPrice(){
         return $this->$totalPrice;
      }
   }

   class CampingChair {
      private $quantity = 0;
      private $price = 50.00;
      private $totalPrice = $quantity * $price;

      public function getQuantity(){
         return $this->$quantity;
      }
      public function setQuantity($num){
         $this->$quantity = $num;
      }
      public function getPrice(){
         return $this->$price;
      }
      public function setPrice($num){
         $this->$price = $num;
      }
      public function getTotalPrice(){
         return $this->$totalPrice;
      }
   }

   class Cookware {
      private $quantity = 0;
      private $price = 20.00;
      private $totalPrice = $quantity * $price;

      public function getQuantity(){
         return $this->$quantity;
      }
      public function setQuantity($num){
         $this->$quantity = $num;
      }
      public function getPrice(){
         return $this->$price;
      }
      public function setPrice($num){
         $this->$price = $num;
      }
      public function getTotalPrice(){
         return $this->$totalPrice;
      }
   }

   class Cooler {
      private $quantity = 0;
      private $price = 40.00;
      private $totalPrice = $quantity * $price;

      public function getQuantity(){
         return $this->$quantity;
      }
      public function setQuantity($num){
         $this->$quantity = $num;
      }
      public function getPrice(){
         return $this->$price;
      }
      public function setPrice($num){
         $this->$price = $num;
      }
      public function getTotalPrice(){
         return $this->$totalPrice;
      }
   }

   class Flashlight {
      private $quantity = 0;
      private $price = 10.00;
      private $totalPrice = $quantity * $price;

      public function getQuantity(){
         return $this->$quantity;
      }
      public function setQuantity($num){
         $this->$quantity = $num;
      }
      public function getPrice(){
         return $this->$price;
      }
      public function setPrice($num){
         $this->$price = $num;
      }
      public function getTotalPrice(){
         return $this->$totalPrice;
      }
   }

   class Hammock {
      private $quantity = 0;
      private $price = 75.00;
      private $totalPrice = $quantity * $price;

      public function getQuantity(){
         return $this->$quantity;
      }
      public function setQuantity($num){
         $this->$quantity = $num;
      }
      public function getPrice(){
         return $this->$price;
      }
      public function setPrice($num){
         $this->$price = $num;
      }
      public function getTotalPrice(){
         return $this->$totalPrice;
      }
   }

   class HikingBackpack {
      private $quantity = 0;
      private $price = 100.00;
      private $totalPrice = $quantity * $price;

      public function getQuantity(){
         return $this->$quantity;
      }
      public function setQuantity($num){
         $this->$quantity = $num;
      }
      public function getPrice(){
         return $this->$price;
      }
      public function setPrice($num){
         $this->$price = $num;
      }
      public function getTotalPrice(){
         return $this->$totalPrice;
      }
   }

   class MountainBike {
      private $quantity = 0;
      private $price = 250.00;
      private $totalPrice = $quantity * $price;

      public function getQuantity(){
         return $this->$quantity;
      }
      public function setQuantity($num){
         $this->$quantity = $num;
      }
      public function getPrice(){
         return $this->$price;
      }
      public function setPrice($num){
         $this->$price = $num;
      }
      public function getTotalPrice(){
         return $this->$totalPrice;
      }
   }

   class SleepingBag {
      private $quantity = 0;
      private $price = 90.00;
      private $totalPrice = $quantity * $price;

      public function getQuantity(){
         return $this->$quantity;
      }
      public function setQuantity($num){
         $this->$quantity = $num;
      }
      public function getPrice(){
         return $this->$price;
      }
      public function setPrice($num){
         $this->$price = $num;
      }
      public function getTotalPrice(){
         return $this->$totalPrice;
      }
   }

   

   //get counter and increment 1
   $currentCounter = $_SESSION["numInCart"];
   $newCounter = $currentCounter + 1;

   //get product to be added
   $productToAdd = $_GET["product"];
   $newProduct = '';

   switch ($productToAdd) {
      case 'tent':
         if ($_SESSION["tent"] = '') {
            $newProduct = new Tent;
            $newProduct->setQuantity($_SESSION['tent']->getQuantity() + 1)
            $_SESSION["tent"] = $newProduct;
         }
         else {
            $_SESSION["tent"]->setQuantity($_SESSION['tent']->getQuantity() + 1)
         }
         break;
      case 'camping chair':
         if ($_SESSION["camping chair"] = '') {
            $newProduct = new CampingChair;
            $newProduct->setQuantity($_SESSION['camping chair']->getQuantity() + 1)
            $_SESSION["camping chair"] = $newProduct;
         }
         else {
            $_SESSION["camping chair"]->setQuantity($_SESSION['camping chair']->getQuantity() + 1)
         }
         break;
      case 'cookware':
         if ($_SESSION["cookware"] = '') {
            $newProduct = new Cookware;
            $newProduct->setQuantity($_SESSION['cookware']->getQuantity() + 1)
            $_SESSION["cookware"] = $newProduct;
         }
         else {
            $_SESSION["cookware"]->setQuantity($_SESSION['cookware']->getQuantity() + 1)
         }
         break;
      case 'cooler':
         if ($_SESSION["cooler"] = '') {
            $newProduct = new Cooler;
            $newProduct->setQuantity($_SESSION['cooler']->getQuantity() + 1)
            $_SESSION["cooler"] = $newProduct;
         }
         else {
            $_SESSION["cooler"]->setQuantity($_SESSION['cooler']->getQuantity() + 1)
         }
         break;
      case 'flashlight':
         if ($_SESSION["flashlight"] = '') {
            $newProduct = new Flashlight;
            $newProduct->setQuantity($_SESSION['flashlight']->getQuantity() + 1)
            $_SESSION["flashlight"] = $newProduct;
         }
         else {
            $_SESSION["flashlight"]->setQuantity($_SESSION['flashlight']->getQuantity() + 1)
         }
         break;
      case 'hammock':
         if ($_SESSION["hammock"] = '') {
            $newProduct = new Hammock;
            $newProduct->setQuantity($_SESSION['hammock']->getQuantity() + 1)
            $_SESSION["hammock"] = $newProduct;
         }
         else {
            $_SESSION["hammock"]->setQuantity($_SESSION['hammock']->getQuantity() + 1)
         }
         break;
      case 'hiking backpack':
         if ($_SESSION["hiking backpack"] = '') {
            $newProduct = new HikingBackpack;
            $newProduct->setQuantity($_SESSION['hiking backpack']->getQuantity() + 1)
            $_SESSION["hiking backpack"] = $newProduct;
         }
         else {
            $_SESSION["hiking backpack"]->setQuantity($_SESSION['hiking backpack']->getQuantity() + 1)
         }
         break;
      case 'mountain bike':
         if ($_SESSION["mountain bike"] = '') {
            $newProduct = new MountainBike;
            $newProduct->setQuantity($_SESSION['mountain bike']->getQuantity() + 1)
            $_SESSION["mountain bike"] = $newProduct;
         }
         else {
            $_SESSION["mountain bike"]->setQuantity($_SESSION['mountain bike']->getQuantity() + 1)
         }
         break;
      case 'sleeping bag':
         if ($_SESSION["sleeping bag"] = '') {
            $newProduct = new SleepingBag;
            $newProduct->setQuantity($_SESSION['sleeping bag']->getQuantity() + 1)
            $_SESSION["sleeping bag"] = $newProduct;
         }
         else {
            $_SESSION["sleeping bag"]->setQuantity($_SESSION['sleeping bag']->getQuantity() + 1)
         }
         break;     
   }

   $_SESSION["numInCart"] = $newCounter;
   
   echo $_SESSION["numInCart"];
?>