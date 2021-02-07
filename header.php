<?php
	define('TITLE','宋斌的网络日志');
	define('DIR','../jdzcn.github.io/_posts/');
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
				font-size:1.3em;
				max-width: 980px;
				margin: 0 auto;
				padding: 10px;
			}
			footer {
				text-align: center;
			}
			form {
				display:inline;
				float:right;
			}
		</style>
	</head>
	<body>
	<header>
		<a href="<?=dirname($_SERVER['SCRIPT_NAME'])?>"><b><?=TITLE?></b></a>
		<form action='index.php' method="get"> 
  			<input type="search" id="query" name="key" placeholder="Search...">
  			<button>GO</button>
		</form>	
		<hr>
	</header>
