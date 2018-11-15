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
		
		<h1>Upcoming Events:</h1>

		<?php

			$name = $_GET['id'];

			echo "<html><h3>Tickets for ".$name."</h3></html>";

			$statement = $db->prepare("SELECT id, section, seat, price FROM ticket WHERE event=$name");
			$statement->execute();
			// Go through each result

			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>'
				echo "Section " . $row['section'] . " - Seat " . $row['seat'] . " - Price: $" . $row['price']; 
				echo '</p>'
			}

		?>

	</div>

</body>
</html>