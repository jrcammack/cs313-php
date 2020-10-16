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
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
               <div class="well well-lg text-center">
                  <?php
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
   
                     $uname = $_POST['uname'];

                     echo $uname;
   
                     $games = $db->prepare("SELECT u.first_name, u.last_name, gt.game_type, g.game_date, g.course_name, g.score
                                           FROM users u INNER JOIN golf_game g ON u.user_name = g.user_name
                                           INNER JOIN game_type_lookup gt ON g.game_type_id = gt.game_type_id 
                                           WHERE u.user_name = :uname");
                     $games->execute(array(':uname' => $uname));
   
                     while ($sRow = $games->fetch(PDO::FETCH_ASSOC))
                     {
                        $fname = $sRow["u.first_name"];
                        $lname = $sRow["u.last_name"];
                        $gameType = $sRow["gt.game_type"];
                        $date = $sRow["g.game_date"];
                        $course = $sRow["g.course_name"];
                        $score = $sRow["g.score"];
   
                        echo "<p>$fname $lname $gameType $date $course $score</p>";
                     }
                  ?>
               </div>
            </div>
            <div class="col-lg-2"></div>
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