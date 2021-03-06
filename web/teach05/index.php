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

echo 'Getting ready to run the query';


foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
{
  var_dump($row);
  echo ‘Book: ' . $row[‘book'];
  echo ' Chapter: ' . $row[‘chapter'];
  echo ' Verse: ' . $row[‘verse’];
  echo ' Content: ' . $row[‘content'];
  echo '<br/>';
}

?>