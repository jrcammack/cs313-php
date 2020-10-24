<?php
   //start the session
   session_start();
   $_SESSION["newUser"] = true;
   $_SESSION['newUname'] = '';
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
      <div id="homeLogin" class="container-fluid">
         <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-2">
               <form method="POST" action="register_new_user.php">
                  User Name:<input type="text" name="uname"><br>
                  First Name:<input type="text" name="fname"><br>
                  Last Name:<input type="text" name="lname"><br>
                  <input type="submit" name="register"><br>
               </form>
               <?php
                  if(isset($_POST["register"])){
                     //get current usernames
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
                  
                     $statement = $db->prepare("SELECT user_name FROM users");
                     $statement->execute();
                     $potentialUname = $_POST["uname"];
                     $fname = $_POST["fname"];
                     $lname = $_POST["lname"];
                     $canRegister = true;
                     
                  
                     while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                     {
                        if($potentialUname == $row["user_name"]){
                           echo "Username is already in use, please choose another.";
                           $canRegister = false;
                           break;
                        }
                     }
                  
                     if($canRegister){
                        $statement = $db->prepare("INSERT INTO users VALUES (:uname, :fname, :lname)");
                        $statement->bindValue(':uname', $potentialUname);
                        $statement->bindValue(':fname', $fname);
                        $statement->bindValue(':lname', $lname);
                  
                        $statement->execute();
                        $_SESSION['newUname'] = $_POST['uname'];
                        header("Location: user_dash.php");
                     }
                  }
               ?>
            </div>
            <div class="col-lg-5"></div>
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