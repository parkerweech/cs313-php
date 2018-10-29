<?php 

$shows = $_POST["cart"];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--<link rel="stylesheet" type="text/css" href="bootstrap.css">-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<style>

  body {
      position: relative;
      top: 20;
      padding: 5px;
  }

  button{
    margin: 0 auto;
}

  ul.nav-pills {
      position: fixed;
      top: 460px;
      padding: 5px;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }

  #Concerts {color: #fff; background-color: #1E88E5;}
  #Festivals {color: #fff; background-color: #673ab7;}
  #Football {color: #fff; background-color: #ff9800;}
  #Basketball {color: #fff; background-color: #00bcd4;}
  #Baseball {color: #fff; background-color: #009688;}
  
  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
        margin-left: 150px;
    }
  }
  </style>

</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
<div class="jumbotron">		
	<h1> Front Row</h1>			
	<p> Concert, sports and event tickets</p>
</div>
<nav class="navbar navbar-default">
  	<div class="container-fluid">
  	<div class="navbar-header">
      <a class="navbar-brand" href="#">Front Row</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="shopping_cart.php">Home</a></li>
      <li><a href="shopping_cart_browse.php">Browse</a></li>
      <li class="active"><a href="#">Cart</a></li>
    </ul>
  </div>
</nav>

	<?
		if (sizeof($shows) == 0) {
			echo "Your cart is empty.";
		}

		elseif (sizeof($shows) != 0) {
			echo "The following items are in your cart: \n \n";
		}

		foreach ($shows as $show) {
			$show_clean = htmlspecialchars($show);
			echo "<li><p>$show_clean</p></li>";
		}

	?>

	</body>

</html>