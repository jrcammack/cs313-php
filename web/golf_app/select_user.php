<?php
   //start the session
   session_start();
   $_SESSION["newUSer"] = false;
   $_SESSION["verifiedUname"] = '';
?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <title>MyGolf</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src=""></script>
      <!-- jQuery Library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="golf_CSS.css">
   </head>

   <body>
      <div id="banner"></div>
      <nav class="navbar navbar-inverse">
         <div class="navbar-header">
            <a class="navbar-brand" href="golf_homepage.php">MyGolf Homepage</a>
         </div>     
      </nav>
      <div id="" class="container-fluid">
         <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
               <div class="well well-lg text-center">
                  <form action="select_user.php" method="POST">
                     Username:<input type="text" name="uname"><br>
                     <input type="submit" name="submitExistingUname">   
                  </form>
                  <?php
                     if(isset($_POST["submitExistingUname"])){
                        try
                        {
                           $dbUrl = getenv('DATABASE_URL');
                           
                           $dbOpts = parse_url($dbUrl);
                           
                           $dbHost = $dbOpts["host"];
                           $dbPort = $dbOpts["port"];
                           $dbUser = $dbOpts["user"];
                           $dbPassword = $dbOpts["pass"];
                           $dbName = ltrim($dbOpts["path"],'/');
                           
                           $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
                           
                           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        }
                     
                        catch (PDOException $ex)
                        {
                           echo 'Error!: ' . $ex->getMessage();
                           die();
                        }
                     
                        $uname = $_POST["uname"];
                     
                        $statement = $db->prepare("SELECT user_name FROM users WHERE user_name = :uname");
                        $statement->bindValue(':uname', $uname);
                        $statement->execute();
                     
                        $row = $statement->fetch();
                     
                        if($row){
                           $_SESSION["verifiedUname"] = $_POST["uname"];
                           header("Location: user_dash.php");
                        }
                        else {
                           echo "Username not found. Please return to home page and register or enter correct username.";
                        }
                     }
                  ?>
               </div>
            </div>
            <div class="col-lg-4"></div>
         </div>
      </div>
      <div id="footer" class="container-fluid">
         <p class="text-center align-middle">
            MyGolf is a golfer's best friend for scorekeeping. We offer an all in one solution which will<br>
            let you track your progress. Don't waste time trying to organize those physical cards anymore.<br>
            We'll caddy for you.
         </p>
      </div>          
   </body>

</html>