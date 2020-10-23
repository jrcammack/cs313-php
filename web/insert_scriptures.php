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

   $statement = $db->prepare('INSERT INTO scriptures (book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)');

   $statement->bindValue(':book', $book);
   $statement->bindValue(':chapter', $chapter);
   $statement->bindValue(':verse', $verse);
   $statement->bindValue(':content', $content);

   $statement->execute();

   $scripId = $db->lastInsertId("scriptures_id_seq");

   foreach($topics_array as $topic){
      $statement = $db->prepare('INSERT INTO link_scriptures_topics (topic_id, scripture_id) VALUES (:topicId, :scriptureId)');
      $statement->bindValue(':topicId', $topic);
      $statement->bindValue(':scriptureId', $scripId);
      $statement->execute();
   }

   header("Location: show_scriptures.php");

   die();
?>