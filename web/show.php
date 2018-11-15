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
	<title>Upcoming shows</title>
</head>
<body>

	<div>

		<?php

			$name = $_GET['id'];			
			// Go through each result

			// $stmt = $db->prepare("SELECT day, city, state, country, venue, performer FROM event WHERE id=$name");
   //          $stmt->execute();
   //          $row_2 = $stmt->fetch(PDO::FETCH_ASSOC)

			// echo "<html><h3>Tickets for ". $row_2['performer'] . " at " . $row_2['city'] . " on " . $row_2['date'] 
			// 		"</h3></html>";

			$statement = $db->prepare("SELECT id, section, seat, price FROM ticket WHERE event=$name");
			$statement->execute();

			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>';
				echo "Section " . $row['section'] . " - Seat " . $row['seat'] . " - Price: $" . $row['price']; 
				echo '</p>';
				echo '<br>';
				$id = $row[id];
				echo "<a href='show.php?id=$id'>Purchase Ticket</a>";
			}

		?>

	</div>

</body>
</html>