<?php

session_start();
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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Here are all upcoming events</title>
</head>
<body>

	<div>
		
		<h1>Here are all the tickets.</h1>

		<?php

			$statement = $db->prepare("SELECT day, city, state, country, venue, performer FROM event");
			$statement->execute();
			// Go through each result
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{

				// The variable "row" now holds the complete record for that
				// row, and we can access the different values based on their
				// name
				echo '<p>';
				echo '<strong>' . $row['performer'] . ' '; 
				echo $row['day'] . ' in ' . $row['city'];
				echo '</p>';
			}

		?>

	</div>

</body>
</html>