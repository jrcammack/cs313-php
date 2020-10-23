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

   $book = $_POST["book"];
   $chapter = $_POST["chapter"];
   $verse = $_POST["verse"];
   $content = $_POST["content"];
   $topics_array = $_POST["topics"];
   $topics_string = '';

   foreach ($topics_array as $topic){
      $topics_string .= $topics_string . ', ';
   }

   echo $book . ' ' . $chapter . ' ' . $verse . ' ' . $content . " " . $topics_string;

   // $scriptures = $db->prepare("SELECT book, chapter, verse, content FROM scriptures WHERE id = :id");
   // $scriptures->execute(array(':id' => $id));

   // while ($sRow = $scriptures->fetch(PDO::FETCH_ASSOC))
   // {
      

   //    echo "<p>$book $chapter:$verse - $content</p>";
   // }
?>