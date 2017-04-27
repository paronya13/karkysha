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
	<div class="mn"><section id="fader">
 <img class="slide" src="<?php bloginfo('template_url'); ?>/img/slide1.png" alt="Image One">
 <img class="slide" src="<?php bloginfo('template_url'); ?>/img/slide2.png" alt="Image Two">
 <img class="slide" src="<?php bloginfo('template_url'); ?>/img/slide3.png" alt="Image Three">
</section>
<div class="button_slide">
<a class="controls" id="next"></a>
<a class="controls" id="previous"></a>
</div>
	</div>

	<div class="popular">Популярные товары</div>
	<div id="content">		
		<div class="cartochka">
			<div class="imageT"><a href="#">
				<img src="<?php bloginfo('template_url'); ?>/img/soska.jpg">
			</div></a>
			<div class="nameT"><a href="#">Соска детская</a></div>
			<div class="kodT">Код товара: 18943</div>
			<div class="priceT">25грн.</div>
			<div class="buyT">
				<a href="#">Купить</a>
			</div>
		</div>
		<div class="cartochka">
			<div class="imageT">
				<img src="<?php bloginfo('template_url'); ?>/img/podg.jpg">
			</div>
			<div class="nameT">Подгузники свежие</div>
			<div class="kodT">Код товара: 18843</div>
			<div class="priceT">125грн.</div>
			<div class="buyT">
				<a href="#">Купить</a>
			</div>
		</div>
		<div class="cartochka">
			<div class="imageT">
				<img src="<?php bloginfo('template_url'); ?>/img/mulo.jpg">
			</div>
			<div class="nameT">Мыло четкое</div>
			<div class="kodT">Код товара: 18743</div>
			<div class="priceT">20грн.</div>
			<div class="buyT">
				<a href="#">Купить</a>
			</div>
		</div>
		<div class="cartochka">
			<div class="imageT">
				<img src="<?php bloginfo('template_url'); ?>/img/obyv.jpg">
			</div>
			<div class="nameT">Педали детские</div>
			<div class="kodT">Код товара: 18643</div>
			<div class="priceT">99грн.</div>
			<div class="buyT">
				<a href="#">Купить</a>
			</div>
		</div>
		<div class="cartochka">
			<div class="imageT">
				<img src="<?php bloginfo('template_url'); ?>/img/kolyaska.jpg">
			</div>
			<div class="nameT">Мелковоз</div>
			<div class="kodT">Код товара: 18543</div>
			<div class="priceT">3455грн.</div>
			<div class="buyT">
				<a href="#">Купить</a>
			</div>
		</div>
		<div class="cartochka">
			<div class="imageT">
				<img src="<?php bloginfo('template_url'); ?>/img/krovatka.jpg">
			</div>
			<div class="nameT">Спалка деревяная</div>
			<div class="kodT">Код товара: 18443</div>
			<div class="priceT">1225грн.</div>
			<div class="buyT">
				<a href="#">Купить</a>
			</div>
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