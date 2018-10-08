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
      position: -webkit-sticky;
      top: 20;
      padding: 5px;
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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Music</a></li>
      <li><a href="#">Sports</a></li>
      <li><a href="#">Events</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li class="active">
        	<a href="#Concerts">Concert Tours</a></li>
       	<li><a href="#Festivals">Festivals</a>
        <li><a href="#Football">Football</a></li>
        <li><a href="#Basketball">Basketball</a></li>
        <li><a href="#Baseball">Baseball</a></li>
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="Concerts">    
        <h1>Concert Tours</h1>
        <p>Attend the greatest, most highly acclaimed concert tours across the world. Genres ranging from hip-hop, rock, country and folk, there will be something near you that you won't want to miss.</p>
      </div>
      <div id="Festivals"> 
        <h1>Festivals</h1>
        <p>Why pick one when you can have many? Explore festivals events around the world, from the smaller local gatherings to the biggest festivals shows on the globe. Shop tickets for events like Coachella, Pinkpop, Reading & Leads and many more!</p>
      </div>        
      <div id="Football">         
        <h1>Football</h1>
        <p>College, NFL and Arena. Whether you want to root for your old Alma Mater, watch the greatest players in the National Football League or even attend something a bit more unique, we have tickets for you.</p>
      </div>
      <div id="Basketball">         
        <h1>Basketball</h1>
        <p>College and NBA. Craving some dunks and 3-point shots. We have a huge selection of tickets for basketball games in both college and NBA. Whether its a regular season college matchup or the 7th game of the NBA finals, we got you covered.</p>
      </div>      
      <div id="Baseball">         
        <h1>Baseball</h1>
        <p>MLB. Take me out to the ball game. Bring your peanuts and cracker-jacks because we have tickets to see any of your favorite major league baseball teams in action.</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>