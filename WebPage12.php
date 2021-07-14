<!doctype html>
<html lang="en">
<head>
<title>Mike's Web Page 12</title>
<style>
img {
 margin-left:25%;
 margin-right:25%;
 width:50%;
}
.picture_title {
 margin-top:2em;
 text-align:center;
}
</style>
</head>
<body>
<?php
$LookInThisFolder='WebPage12_random_pictures';
include('KirksPictureGrabber.php');
echo '<div class="picture_title">'.$AltText.'</div>';
echo "\n".'<img src="'.$LookInThisFolder.'/'.$UseThisPicture.'" alt="'.$AltText.'">'."\n";
?>
</body>
</html>