<!DOCTYPE html>
<html lang="en">

   <head>
      <title>Scripture Finder</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src="homeJS.js"></script>
      <!-- jQuery Library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="team_prac_w05CSS.css">
   </head>

   <body>
      <div id="banner" class="container-fluid">
         <div id="bannerRow" class="row">
            <div id="bannerColumn" class="col-lg-12">
               <div class="hero-image">
                  <div class="hero-text"><h1>SCRIPTURE RESOURCES</h1></div>
               </div>
            </div>
         </div>
      </div>
      <div id="intro" class="container-fluid">
         <div id="introRow" class="row">
            <div id="introCol" class="col-lg-12">
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

                  $statement = $db->query('SELECT book, chapter, verse, content FROM scriptures');
                  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                  {
                     echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b>' . ' ' . '-' . ' ' . '"' . $row['content'] . '"' . '<br><br>';
                  }

                  // foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
                  // {
                  //    echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b>' . ' ' . '-' . ' ' . $row['content'] . '<br';
                  // }
               ?>
               <form action="book_search.php" method="POST">
                     Book:<input type="text" name="book">
                     <button type="submit">Search</button>
               </form>
            </div>
         </div>
      </div>      
   </body>

</html>