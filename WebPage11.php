<!doctype html>
<html lang="en">
<head>
<title>Mike's WebPage 11</title>
</head>
<body>
<?php
date_default_timezone_set('US/Eastern');

echo 'hello world'.' more stuff here';
echo '<br>hello world again; a word like it\'s I start typing again... instead of it is'." - and more stuff here";
echo "<p>hey y'all, one more thing \"do you like this\"</p>";

echo '<p>Today is '.date('m-d-Y').'</p>';
echo 'The time is now '.date('h:ia');

$Seconds=date('s');
echo '<br>The second hand ('.$Seconds.') is ';
if($Seconds%2==0){
  echo 'even';
} else {
  echo "odd";
}
?>


</body>
</html>