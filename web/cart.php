<?php 

$shows = $_POST["cart"];

?>

<html>
	<head>
		<title>Shopping Cart</title>
	</head>

	<body>

		<?

			foreach ($shows as $show) {
				$show_clean = htmlspecialchars($show);
				echo "<li><p>$show_clean</p></li>";
			}

		?>

	</body>

</html>