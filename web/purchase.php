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
	<title>Confirm Purchase</title>
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
      <li class="active"><a href="shopping_cart_browse.php">Browse</a></li>
      <li><a href="cart.php">Cart</a></li>
    </ul>
  </div>
</nav>

	<form action="cart.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-4"</div>
            <div class="col-4" style="text-align:center;">
               <?php

               $name = $_GET['id'];

               $statement = $db->prepare("SELECT event FROM ticket WHERE id=$name");
               $statement->execute();
               $row = $statement->fetch(PDO::FETCH_ASSOC);

               $event = $row['event'];

               $statement = $db->prepare("SELECT id, day, city, state, country, venue, performer FROM event WHERE id=$event");
               $statement->execute();
               //  // Go through each result
               $row = $statement->fetch(PDO::FETCH_ASSOC);
               echo '<p>';
               echo '<strong>' . $row['performer'] . '</strong>';
               echo '<br>';
               echo $row['day'];
               echo '<br>';
               echo $row['city'] . ", " . $row['state'] . " " . $row['country'];
               echo '<br>';
               echo $row['venue'];
               echo '<br>';

                $statement = $db->prepare("SELECT id, section, seat, price FROM ticket WHERE id=$name");
                $statement->execute();
                $row = $statement->fetch(PDO::FETCH_ASSOC);

                echo "Section: " . $row['section'];
                echo '<br>';
                echo "Seat: " . $row['seat'];
                echo '<br>';
                echo "Price: $" . $row['price'];
                echo '<br>';
                echo '<br>';
                echo "<a href='thankyou.php?id=$name'>Click to Confirm Purchase</a>";
                echo '</p>';
                echo '<br>';
                
              ?>

              </div>
            </div class="col-4"></div>
          </div>
        </div>
      </form>  

</body>
</html>