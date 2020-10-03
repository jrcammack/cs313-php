<?php
   //start the session
   session_start();

   //get counter and increment 1
   $currentCounter = $_SESSION["numInCart"];
   $newCounter = $currentCounter + 1;

   //get current cart
   $currentCart = array();
   $currentCart = $_SESSION["cart"];

   //get product to be added
   $productToAdd = $_GET["product"];

   //add new product to array
   array_push($currentCart, $productToAdd);

   //set session cart variable equal to new array
   $_SESSION["cart"] = $currentCart;
   $_SESSION["numInCart"] = $newCounter;
   
   echo $_SESSION["numInCart"];
?>