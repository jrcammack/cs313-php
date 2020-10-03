<!DOCTYPE html>
<html lang="en">

   <head>
      <title>Team Activity Week 03</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src=""></script>
      <!-- jQuery Library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="">
   </head>

   <body>
      <?php echo $_POST["name"]?><br>
      <?php echo $_POST["email"]?><br>
      <?php echo $_POST["major"]?><br>
      <?php echo $_POST["comments"]?><br>
      <?php 
         $na = $_POST["north america"];
         $sa = $_POST["south america"];
         $eu = $_POST["europe"];
         $as = $_POST["asia"];
         $au = $_POST["australia"];
         $af = $_POST["africa"];
         $an = $_POST["antarctica"];
         if (isset($na)){
            echo $na . "<br>"
         }
   </body>

</html>