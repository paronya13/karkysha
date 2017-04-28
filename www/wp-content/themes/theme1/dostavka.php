<?php
/*
Template Name: dostavka
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

<div class="oplata">
	<ul>
		<li><h1>Оплата и доставка:</h1></li>
		<li>Оплата наличными в Чернигове, осуществляется при самовывозе товара из точки выдачи</li>
		<li>Наложенным платежем по предоплате за доставку.</li>
		<li>Отправка - новой почтой и укр почтой в течении 1-2 дней после оплаты, деливери и интайм - 1 раз в неделю в пятницу
			<ul>
				<li><a class="new" target="_blank" href="https://novaposhta.ua/"></a></li>
				<li><a class="ykr" target="_blank" href="http://ukrposhta.ua"></a></li>
				<li><a class="int" target="_blank" href="https://intime.ua/"></a></li>
				<li><a class="del" target="_blank" href="http://www.delivery-auto.com"></a></li>
			</ul>
		</li>		
		<li>При оплате на карту приват банка - вы оплачиваете сумму заказа + 0,5% комиссии при пополнение через терминал и отделения приват банка оплачиваете вы(30% но не меньше 40грн)</li>
		<li>При отправлении наложенным платежем новой почтой покупатель оплачивает стоимость заказа за вычетом предоплаты, перевод денег обратно нам, а так же стоимость доставки (согласно тарифам транспортной компании).</li>
		<li>дополнительные расходы комосия при пополнении через терминал и отделиния банка оплачивает покупатель</li>
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