<?php
   //start the session
   session_start();

   //check if session variable contains products already
   if (isset($_SESSION["cart"])) {

      //get counter and increment 1
      $currentCounter = $_SESSION["numInCart"];
      $newCounter = $currentCounter + 1;

      //get current cart
      $currentCart = $_SESSION["cart"];

      //get product to be added
      $productToAdd = $_GET["product"];

      //add new product to array
      array_push($currentCart, $productToAdd);

      //set session cart variable equal to new array
      $_SESSION["cart"] = $currentCart;
      $_SESSION["numInCart"] = $newCounter;
   }

   else {
      //create counter to keep track of num in cart
      $counter = 1;

      //create array for session variable
      $productArray = new array();

      //get product to be added
      $productToAdd = $_GET["product"];

      //add new product to array
      array_push($productArray, $productToAdd);

      //set session cart variable equal to new array
      $_SESSION["cart"] = $productArray;
      $_SESSION["numInCart"] = $counter;   
   }
   
   echo $_SESSION["numInCart"];
?>