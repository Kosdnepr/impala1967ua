<!DOCTYPE html>
<html>
<head>
	
	<?php
	$cur_page_addr = $_SERVER['PHP_SELF'];
	$addr = array('/impala1967ua/index.php', '/impala1967ua/specifications.php', '/impala1967ua/gallery.php',
							'/impala1967ua/store.php', '/impala1967ua/about.php');
	$titles = array ('Главная', 'Технические характеристики', 'Фотогалерея', 'ПРЕДЛОЖЕНИЯ АВТОМОБИЛЕЙ', 'Наши контакты',);
		list ($title0, $title1, $title2, $title3, $title4) = $titles;
		switch ($cur_page_addr) {
			case $addr[0]:
				$title = $title0;
				break;
			case $addr[1]:
				$title = $title1;
			break;
			case $addr[2]:
				$title = $title2;
			break;
			case $addr[3]:
				$title = $title3;
			break;
			case $addr[4]:
				$title = $title4;
			break;
				
			default:
				$title = "Главная";
				break;
		}
	echo "<title>Impala 1967 - ".$title."</title>";
	?>
	
	<meta charset="utf-8">
	<!-- STYLE -->
	<link rel="stylesheet" type="text/css" href="style/general_style.css">
	<link rel="stylesheet" type="text/css" href="style/normalize.css">
	<!-- SCRIPT -->
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<!-- ICON -->
	<link rel="shortcut icon" href="icons/impala.ico">
</head>
<body>

<!-- HEADER -->
<header class="header">
	<div id="logo">
		<a title="Impala1967ua" href="/impala1967ua/">
			<img src="images/head_emb.jpg" alt="Impala">
		</a>
	</div>
	<div id="header-text">
		<h1>
		Impala1967ua - сайт для тех, кто знает, что такое настоящий автомобиль
		</h1>
	</div>
</header>
<!-- /HEADER -->