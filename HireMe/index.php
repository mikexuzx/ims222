<!doctype html>
<html lang="en">
<head>
<title>Mike's Hire Me Site</title>
<link href="xuz76.css?18" media="screen" rel="stylesheet" type="text/css"/>
</head>
<header>
	<a href="index.php" id="logo"><img src="img/site_logo.jpg" alt="site_logo"></a>
	<nav>
		
		<ul>
			
<li><a href="index.php" class="active_menu_item">Home</a></li>
<li><a href="resume.php" class="main_menu_item">Resumé</a></li>
<li><a href="portfolio.php" class="main_menu_item">Portfolio</a></li>
<li><a href="contactme.php" class="main_menu_item">Contact Me</a></li>
		</ul>
	</nav>
</header>
<body>
<section>
<h1>Hello!</h1>
<h2>Welcome to Mike's Hire Me Site. I am a sophomore Emerging Technology in Business + Design student at Miami University. I plan to look for an internship in User Interface design next summer vacation. I'm looking forward to learning more designing stuff in different regions!</h2>
<br>
<br>
<br>

<?php
$LookInThisFolder='HireMe_random_pictures';
include('KirksPictureGrabber.php');
echo '<div class="picture_title">'.$AltText.'</div>';
echo "\n".'<img src="'.$LookInThisFolder.'/'.$UseThisPicture.'" alt="'.$AltText.'">'."\n";
?>

<?php
date_default_timezone_set('US/Eastern');
echo '<h2>Mike reminds you, today is '.date('l, M jS, Y').'</h2>';
?>

</section>
<footer>
<div style="padding: 1em 1.95em 1em 0em;">Mike's Hire Me Site | (513)331-1712</div>
</footer>
</body>
</html>