<!DOCTYPE html>
<html>
<head>
<title>candy.farm - the worst jokes on the internet</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://localhost:8888/candy.farm/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost:8888/candy.farm/css/main.css">
</head>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<body>
<div class="container">
<div class="header">
<div class="logo" />
</div>
<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name',function($name){
	echo "Hello, $name";
});

$app->get('/',function(){
	// echo "<h3>Welcome to Candy Farm!</h3>";
});


$app->run();

?>
<div class="joke"><h4 class="joke" style='font-family:"Bodoni MT", Didot, "Didot LT STD", "Book Antiqua", Garamond, "Times New Roman", serif;'><a href="#"><span class="love glyphicon glyphicon-heart pull-left"></span></a>My dick is so big, it has its own zip code!</h4></div>
</div>

<div class="joke"><h4 class="joke" style='font-family:"Bodoni MT", Didot, "Didot LT STD", "Book Antiqua", Garamond, "Times New Roman", serif;'><a href="#"><span class="love glyphicon glyphicon-heart pull-left"></span></a>Yo mama's so fat, she can barely even walk!</h4></div>
</div>
</body>
</html>
