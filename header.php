<?php
	define('TITLE','宋斌的网络日志');
	define('DIR','jdzcn.github.io/_posts/');
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
		<title><?=TITLE?></title>
		<link rel="stylesheet" href="github.css">
		<style>
			body {
				box-sizing: border-box;
				min-width: 200px;
				max-width: 980px;
				margin: 0 auto;
				padding: 20px;
			}
			footer {
				text-align: center;
			}
			form {
				display:inline;
				float:right;
			}
			h3 {
				display:inline;
			}

		</style>
	</head>
	<body>
	<header>
		<h3><a href='/'><?=TITLE?></a></h3>
		<form action='index.php' method="get"> 
  			<input type="search" id="query" name="key" placeholder="Search...">
  			<button>GO</button>
		</form>	
		<hr>
	</header>
