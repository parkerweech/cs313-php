<?php 

$shows = $_POST["cart"];

?>

<html>
	<head>
		<title>Shopping Cart</title>
	</head>

	<body>

		<?

			echo "Outside loop";

			foreach ($shows as $show) {
				$show_clean = htmlspecialchars($show)
				echo "Inside loop";
			}

		?>

	</body>

</html>