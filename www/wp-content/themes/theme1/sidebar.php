<div class="sidebar">
		<div id="logo"></div>
		<div class="d1">
  		<form>
  			<input type="text" maxlength="30" placeholder="Введите запрос...">
  			<button type="submit"><img src="<?php bloginfo('template_url'); ?>/img/search.png"></button>
  		</form>
		</div>
			<div id="menu_body">
			
				<ul id="menu">
				<?php wp_nav_menu(array('container'=>'','items_wrap' => '%3$s', 'before' => '', 'theme_location' => 'menu_side') ); ?>
					<!--<li><a href="#" id="game" onclick="openMenu('sub_menu_1');return(false)">Игрушки</a>
						<ul id="sub_menu_1">
							<li><a href="#">Развивающие</a></li>
							<li><a href="#">Мягкие</a></li>
							<li><a href="#">Твердые</a></li>
						</ul>
					</li>
					<li><a href="#" id="napkin" onclick="openMenu('sub_menu_2');return(false)">Подгузники</a>
						<ul id="sub_menu_2">
							<li><a href="#">Huggies</a></li>
							<li><a href="#">Pampers</a></li>
							<li><a href="#">Libero</a></li>
						</ul>
					</li>
					<li><a href="#" id="care" onclick="openMenu('sub_menu_3');return(false)">Гигиена</a>
						<ul id="sub_menu_3">
							<li><a href="#">Крема</a></li>
							<li><a href="#">Масла</a></li>
							<li><a href="#">Мыло</a></li>
						</ul>
					</li>
					<li><a href="#" id="eat" onclick="openMenu('sub_menu_4');return(false)">Питание</a>
						<ul id="sub_menu_4">
							<li><a href="#">Смеси</a></li>
							<li><a href="#">Каши</a></li>
							<li><a href="#">Напитки</a></li>
						</ul>
					</li>
					<li><a href="#" id="mam" onclick="openMenu('sub_menu_5');return(false)">Материнство</a>
						<ul id="sub_menu_5">
							<li><a href="#">Косметика</a></li>
							<li><a href="#">Белье</a></li>
							<li><a href="#">Гигиена</a></li>
						</ul>
					</li>					
					<li><a href="#" id="room" onclick="openMenu('sub_menu_6');return(false)">Комната</a>
						<ul id="sub_menu_6">
							<li><a href="#">Ночники</a></li>
							<li><a href="#">Постель</a></li>
							<li><a href="#">Мебель</a></li>
						</ul>
					</li>
					<li><a href="#" id="tour" onclick="openMenu('sub_menu_7');return(false)">Транспорт</a>
						<ul id="sub_menu_7">
							<li><a href="#">Коляски</a></li>
							<li><a href="#">Автокресла</a></li>
							<li><a href="#">Самокаты</a></li>
						</ul>
					</li>
					<li><a href="#" id="dress" onclick="openMenu('sub_menu_8');return(false)">Одежда</a>
						<ul id="sub_menu_8">
							<li><a href="#">Костюмы</a></li>
							<li><a href="#">Распашонки</a></li>
							<li><a href="#">Обувь</a></li>
						</ul>
					</li>-->
				</ul>
			</div>
	</div>