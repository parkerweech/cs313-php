<!DOCTYPE html>
<html>
<head>
	<title>Browse</title>
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
      <li class="active"><a href="#">Browse</a></li>
      <li><a href="cart.php">Cart</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Upcoming Events</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" style="text-align: center;">
        <img src="OBJcatch_new.jpg" alt="Giants" style="width:100%;">
        <div class="carousel-caption">
        	<h3>Giants vs. Cowboys</h3>
        	<p>12/20/18</p>
      	</div>
      </div>
    
      <div class="item" style="text-align: center;">
        <img src="mlb.jpg" alt="Baseball" style="width:100%;">
        <div class="carousel-caption">
        	<h3>Red Sox vs. Astros - Game 1</h3>
        	<p>11/12/18</p>
      	</div>
      </div>

      <div class="item" style="text-align: center;">
        <img src="lifeis.jpg" alt="Beautiful" style="width:100%;">
        <div class="carousel-caption">
        	<h3>Life is Beautiful Festival</h3>
        	<p>9/21/19</p>
      	</div>
      </div>

      <div class="item" style="text-align: center;">
        <img src="TOP.jpg" alt="Twenty" style="width:100%;">
        <div class="carousel-caption">
        	<h3>Twenty One Pilots - Bandito Tour</h3>
        	<p>Tour Dates Vary</p>
      	</div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<form action="cart.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-4"</div>
            <div class="col-4">
                Twenty One Pilots - Chicago - 10/4/18<input type="checkbox" name="cart[]" value="Twenty One Pilots - Chicago - 10/4/18">
                Twenty One Pilots - Columbus - 10/7/18<input type="checkbox" name="cart[]" value="Twenty One Pilots - Columbus - 10/7/18">
                Twenty One Pilots - New York - 10/8/18<input type="checkbox" name="cart[]" value="Twenty One Pilots - New York - 10/8/18">
                iHeartMusic Festival - Las Vegas - 10/15/18<input type="checkbox" name="cart[]" value="iHeartMusic Festival - Las Vegas - 10/15/18">
                Life is Beautiful Festival - Los Angeles - 11/18/18<input type="checkbox" name="cart[]" value="Life is Beautiful Festival - Los Angeles - 11/18/18">
                OneRepublic - Seattle - 11/22/18<input type="checkbox" name="cart[]" value="OneRepublic - Seattle - 11/22/18">
                OneRepublic - Boise - 11/24/18<input type="checkbox" name="cart[]" value="OneRepublic - Boise - 11/24/18">
                Migos - Atlanta - 11/28/18<input type="checkbox" name="cart[]" value="Migos - Atlanta - 11/28/18">
                Cardi B - Miami - 12/4/18<input type="checkbox" name="cart[]" value="Cardi B - Miami - 12/4/18">
                Not So Silent Christmas - Denver - 12/24/18<input type="checkbox" name="cart[]" value="Not So Silent Christmas - Denver - 12/24/18">
                Post Malone - Los Angeles - 1/8/19<input type="checkbox" name="cart[]" value="Post Malone - Los Angeles - 1/8/19">
                Post Malone - Sacramento - 1/9/19<input type="checkbox" name="cart[]" value="Post Malone - Sacramento - 1/9/19">
                Post Malone - Portland - 1/11/19<input type="checkbox" name="cart[]" value="Post Malone - Portland - 1/11/19">
                Post Malone - Seattle - 1/12/19<input type="checkbox" name="cart[]" value="Post Malone - Seattle - 1/12/19">
                Post Malone - Vancouver - 1/15/19<input type="checkbox" name="cart[]" value="Post Malone - Vancouver - 1/15/19">
                Halsey - Cleveland - 2/4/19<input type="checkbox" name="cart[]" value="Halsey - Cleveland - 2/4/19">
                Starset - Dallas - 2/15/19<input type="checkbox" name="cart[]" value="Starset - Dallas - 2/15/19">
                <input type="submit" value="Add To Cart"> 
              </div>
            </div class="col-4"></div>
          </div>
        </div>
      </form>  

</body>
</html>