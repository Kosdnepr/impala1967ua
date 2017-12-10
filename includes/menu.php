<div id="main">
<!-- NAVIGATION -->
	<div id="menu">
		<ul class="navigation">

			<?php
			$cur_page = $_SERVER['PHP_SELF'];
			$menu = array('/impala1967ua/index.php', '/impala1967ua/specifications.php', '/impala1967ua/gallery.php',
							'/impala1967ua/store.php', '/impala1967ua/about.php');
			$navlink = array ('navlink', 'navlink', 'navlink', 'navlink', 'navlink',);
			list ($link0, $link1, $link2, $link3, $link4) = $navlink;
			switch ($cur_page) {
				case $menu[0]:
					$link0 = "activepage";
					break;
				case $menu[1]:
					$link1 = "activepage";
				break;
				case $menu[2]:
					$link2 = "activepage";
				break;
				case $menu[3]:
					$link3 = "activepage";
				break;
				case $menu[4]:
					$link4 = "activepage";
				break;
				
				default:
					$link1 = "activepage";
					break;
			}
			echo "<li class=\"menu-top\"><a class=\"".$link0."\" href=\"/impala1967ua/index.php\">Главная</a></li>";
			echo "<li class=\"menu-mid\"><a class=\"".$link1."\" href=\"/impala1967ua/specifications.php\">Технические характеристики</a></li>";
			echo "<li class=\"menu-mid\"><a class=\"".$link2."\" href=\"/impala1967ua/gallery.php\">Фотогалерея</a></li>";
			echo "<li class=\"menu-mid\"><a class=\"".$link3."\" href=\"/impala1967ua/store.php\">ПРЕДЛОЖЕНИЯ АВТОМОБИЛЕЙ</a></li>";
			echo "<li class=\"menu-bot\"><a class=\"".$link4."\" href=\"/impala1967ua/about.php\">Наши контакты</a></li>";
			?>

		</ul>
	</div>
<!-- /NAVIGATION -->