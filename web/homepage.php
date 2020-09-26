<!DOCTYPE html>
<html lang="en">

   <head>
      <title>The Camping Guide</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src="homeJS.js"></script>
      <!-- jQuery Library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="homeCSS.css">
   </head>

   <body>
      <div id="banner" class="container-fluid">
         <div id="bannerRow" class="row">
            <div id="bannerColumn" class="col-lg-12">
               <div class="hero-image">
                  <div class="hero-text"><h1>There's a whole world waiting to be explored</h1></div>
               </div>
            </div>
         </div>
      </div>
      <div id="intro" class="container-fluid">
         <div id="introRow" class="row">
            <div id="introCol" class="col-lg-12">
               Hey there everyone! I just wanted to take a moment to tell you about one of my favorite things, 
               which is camping. Camping has always been special to me as it has been a chance to get always
               from the struggles and cares of everyday life. Camping is awesome because it gives you a 
               chance to disconnect from things like technology and work and experience the great outdoors. 
               I have found that being away from everything and able to sit back and relax outside and just
               watch the world around me, is very relaxing and rewarding. You don't have to be an expert to do it,
               just try it out and have fun! Below are some fun facts and information about camping. 
            </div>
         </div>
      </div>
      <div id="info" class="container-fluid">
         <div id="infoRow" class="row">
            <div id="infoCol1" class="col-lg-4"><div onclick="revealFact1()" class="well well-lg">Are there any benefits?</div></div>
            <div id="infoCol2" class="col-lg-4">
               <div onclick="revealItems()" class="well well-lg">
                  What Should I Bring??
               </div>
            </div>
            <div id="infoCol3" class="col-lg-4"><div onclick="revealFact2()" class="well well-lg">Do a lot of people go camping?</div></div>
         </div>
         <div id="infoRow1" class="row">
            <div id="infoCol" class="col-lg-12">Here are a few popular places to find good camping gear if you are just starting out!<?php echo "Rgiht now it is" . date("h:i:sa") . ". What are you waiting for?"; ?></div>
         </div>
         <div id="infoRow2" class="row">
            <div id="infoCol4" class="col-lg-3"><img src="cabelas_logo.png" alt="cabelas" height="200px" width="200px"></div>
            <div id="infoCol5" class="col-lg-3"><img src="rei_logo.png" alt="rei" height="200px" width="200px"></div>
            <div id="infoCol6" class="col-lg-3"><img src="walmart_logo.png" alt="walmart" height="200px" width="300px"></div>
            <div id="infoCol7" class="col-lg-3"><img src="amazon_logo.png" alt="amazon" height="200px" width="200px"></div>
         </div>
      </div>      
   </body>

</html>