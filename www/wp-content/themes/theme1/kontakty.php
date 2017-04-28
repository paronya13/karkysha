<?php
/*
Template Name: kontakty
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
<?php wp_head(); ?>
</head>
<body>

	<div id="wrapper">		
<?php get_sidebar(); ?>	
<?php get_header(); ?>
	

		<div id="content">	

<div id="kontakt">
<ul class="inlite"><li>
	<div id="kontakty">
		<ul>
			<li><h1>Контактные данные:</h1></li>
			<li><a class="mts" href="#"></a></li>
			<li><a class="life" href="#"></a>+38093 515 70 99</li>
			<li><a class="kyivstar" href="#"></a>+38096 666 66 66</li>
			<li><a class="gmail" href="#"></a>karkysha.cn@gmail.com</li>
			<li><a class="vkontakte" target="_blank" href="https://vk.com/clubdeto4ki"></a></li>
			<li><a class="address" href="#"></a>г.Чернигов проспект Мира212 кв12</li>
			<li><a class="timework" href="#"></a>Время работы:
				<ul>
					<li>Пн-Пт с 9.00 - 20.00</li>
					<li>Сб-Вс с 10.00 - 19.00</li>
				</ul>
			</li>
		</ul>
	</div>
	</li>
	<li>
	<div id="map"><img src="<?php bloginfo('template_url'); ?>/img/map.png" width="500px"></div>
	</li>
</ul>
</div>

		
		<div class="hFooter"></div>
	</div>

<?php get_footer(); ?>

	<div id="scrollup"></div>
	</div>

<div id="boxes">
	<div id="dialog" class="window">
	
	<div class="tabs">

	<ul class="tabs__caption">
		<li class="active">Вход</li>
		<li>Регистрация</li>
	</ul>

	<div class="tabs__content  active"><form>
		<ul class="avtorization">
			<li><label for="loginform">Логин: </label><input maxlength="30" type="text" name="loginform" /></li>
			<li><label for="passform">Пароль: </label><input maxlength="30" type="password" name="passform" /></li>
			<li><ul class="form_button">
				<li><a class="vhod" href="#">Войти</a></li>
				<li class="ili">или войдите через:</li>
				<li><a class="vk" href="#"><img src="<?php bloginfo('template_url'); ?>/img/vk.png"></a></li></ul>
			</li>
		</ul>
		</form>
	</div>

	<div class="tabs__content">
		<form>
		<ul class="registration">
			<li><label for="loginform">Логин: </label><input maxlength="30" type="text" name="loginform" /></li>
			<li><label for="passform">Пароль: </label><input maxlength="30" type="password" name="passform" /></li>
			<li><label for="mail">Эл. почта: </label><input maxlength="30" type="password" name="mail" /></li>
			<li><a class="vhod" href="#">Регистрация</a></li>
		</ul>
		</form>
		
	</div>

</div>

</div>
<div id="mask"></div>
</div>
<?php wp_footer(); ?>
</body>
</html>