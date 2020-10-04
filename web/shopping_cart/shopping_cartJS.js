function addToCart(value) {   

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
      document.getElementById("numInCart").innerHTML = "Number of Items in Cart: " + this.responseText;
     }
   };
   xhttp.open("GET", "update_cart.php?product=" + value, true);
   xhttp.send();
 }

 function removeFromCart(value) {   

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
      document.getElementById("numInCart").innerHTML = "Number of Items in Cart: " + this.responseText;
      location.reload();
     }
   };
   xhttp.open("GET", "update_cart_remove.php?product=" + value, true);
   xhttp.send();
 }