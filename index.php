<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://localhost:8888/candy.farm/styles/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost:8888/candy.farm/styles/main.css">
</head>

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
</div>
</body>
</html>
