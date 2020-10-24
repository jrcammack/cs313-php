<?php
   //start the session
   session_start();
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

                     //check whether the user is newly registered or not 
                     //and get uname from correct source
                     $uname = '';

                     if(isset($_SESSION["newUser"]) and $_SESSION["newUser"] == true){
                        $uname = $_SESSION['newUname'];
                     }
                     else {
                        $uname = $_SESSION["verifiedUname"];
                     }

                     //if submit was pressed then send query to DB for storage
                     if(isset($_POST["addNewGame"])){
                        $gameType = $_POST["gameType"];
                        $gameDate = $_POST["gameDate"];
                        $courseName = $_POST['courseName'];
                        $score = $_POST['score'];

                        $statement = $db->prepare("INSERT INTO golf_game (game_type_id, user_name, game_date, course_name, score) VALUES (:game_type_id, :user_name, :game_date, :course_name, :score)");
                        $statement->bindValue(':game_type_id', $gameType);
                        $statement->bindValue(':user_name', $uname);
                        $statement->bindValue(':game_date', $gameDate);
                        $statement->bindValue(':course_name', $courseName);
                        $statement->bindValue(':score', $score);

                        $statement->execute();
                     }
   
                     $games = $db->prepare("SELECT u.first_name, u.last_name, gt.game_type, g.game_date, g.course_name, g.score
                                           FROM users u INNER JOIN golf_game g ON u.user_name = g.user_name
                                           INNER JOIN game_type_lookup gt ON g.game_type_id = gt.game_type_id 
                                           WHERE u.user_name = :uname");
                     $games->execute(array(':uname' => $uname));
   
                     while ($sRow = $games->fetch(PDO::FETCH_ASSOC))
                     {
                        $fname = $sRow["first_name"];
                        $lname = $sRow["last_name"];
                        $gameType = $sRow["game_type"];
                        $date = $sRow["game_date"];
                        $course = $sRow["course_name"];
                        $score = $sRow["score"];
   
                        echo "<p>$fname $lname $gameType $date $course $score</p>";
                     }
                  ?>
                  <form method="POST" action="user_dash.php">
                     Add New Game:<br>
                     Game Type:<select name="gameType">
                        <option value="1">9-Hole</option>
                        <option value="2">18-Hole</option>
                     </select><br>
                     Game Date:<input type="date" name="gameDate"><br>
                     Course Name:<input type="text" name="courseName"><br>
                     Score:<input type="number" name="score"><br>
                     <input type="submit" name="addNewGame"><br>
                  </form>
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