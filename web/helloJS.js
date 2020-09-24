function buttonClick() {
   alert("Clicked!")
}

function changeBgColor() {
   var newColor = document.getElementById("bgColor").value;
   if (document.getElementById("bgColor").value = null) {
      return;
   }
   document.getElementById("div1").style.backgroundColor = newColor;
   return;
}