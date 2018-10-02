<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<!--<p>Welcome to the greatest homepage ever made
	...in the last 30 minutes
	...by me</p>
	<img src="gandalf_meme.jpg" alt="Study gandalf">-->

<div class="header">
  <h1>Homepage</h1>
  <p>Welcome.</p>
</div>

<div class="topnav">
  <a href="https://pure-badlands-14905.herokuapp.com/homepage.php">Homepage</a>
  <img src="mountains2.jpg">
</div>

<div class="row">
  <div class="column side">
    <h2>Side</h2>
    <?php  
    	echo "This is the left side.";
    ?>
  </div>
  <div class="column middle">
    <h2>Main Content</h2>
    <p>My name is Parker Weech. I'm a computer science major at BYU-I. I enjoy snowboarding, basketball, music and hanging out with my wife.. I'm from Moses Lake, WA. I'm the oldest of five siblings.

    Also, I like to party.</p>
  </div>
  <div class="column side">
    <h2>Side</h2>
    <p>This is the right side.</p>
  </div>
</div>

</body>
</html>