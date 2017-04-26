var script1 = function() { // после загрузки страницы

	var scrollUp = document.getElementById('scrollup'); // найти элемент

	scrollUp.onmouseover = function() { // добавить прозрачность
		scrollUp.style.opacity=0.8;
		scrollUp.style.filter  = 'alpha(opacity=30)';
	};

	scrollUp.onmouseout = function() { //убрать прозрачность
		scrollUp.style.opacity = 0.8;
		scrollUp.style.filter  = 'alpha(opacity=50)';
	};

	scrollUp.onclick = function() { //обработка клика
		window.scrollTo(0,0);
	};

// show button

	window.onscroll = function () { // при скролле показывать и прятать блок
		if ( window.pageYOffset > 0 ) {
			scrollUp.style.display = 'block';
		} else {
			scrollUp.style.display = 'none';
		}
	};
};
var id_menu = new Array('sub_menu_1','sub_menu_2','sub_menu_3','sub_menu_4','sub_menu_5','sub_menu_6','sub_menu_7','sub_menu_8');
startList = function allclose() {
	for (i=0; i < id_menu.length; i++){
		document.getElementById(id_menu[i]).style.display = "none";
	}
}
function openMenu(id){
	for (i=0; i < id_menu.length; i++){
		if (id != id_menu[i]){
			document.getElementById(id_menu[i]).style.display = "none";
		}
	}
	if (document.getElementById(id).style.display == "block"){
		document.getElementById(id).style.display = "none";
	}else{
		document.getElementById(id).style.display = "block";
	}
}
var script2 = startList;

$( document ).ready(function() {
$('div.mn').css('height', $('.slide').height());
});

$( document ).ready(function() {
$(function(){
    $(window).resize(function() {
          $('div.mn').css('height', $('.slide').height());
    })
})
});
// Слайдер скрипт
var script3 = function(){
var controls = document.querySelectorAll('.controls');
for(var i=0; i<controls.length; i++){
    controls[i].style.display = 'inline-block';
}

var slides = document.querySelectorAll('#fader .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,10000);

function nextSlide(){

    goToSlide(currentSlide+1);
}

function previousSlide(){
    goToSlide(currentSlide-1);
}

function goToSlide(n){
    slides[currentSlide].className = 'slide';
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = 'slide showing';
}

var next = document.getElementById('next');
var previous = document.getElementById('previous');

next.onclick = function(){
    nextSlide();
};
previous.onclick = function(){
    previousSlide();
};
};
// Анимация сайдбара
$( document ).ready(function() {
var a=1;
		$(".side_menu").click(function rrr(){

			if(a == 1){
		$(".sidebar").animate({left:'0px'});
		a=a-1;
	}
			else{
				$(".sidebar").animate({left:'-250px'});
				a=a+1;
			}
	});	
	
function windowSize(){
    if ($(window).width() >= '1081'){
        $(".sidebar").css({left:'0px'});
        a=0;
    } else {
        $(".sidebar").css({left:'-250px'});
        a=1;
    }
}
$(window).resize(windowSize);
});
// Модальное окно
	$(document).ready(function() {
	$('a[name=modal]').click(function(e) {
		e.preventDefault();
		var id = $(this).attr('href');
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		$('#mask').fadeIn(500);
		$('#mask').fadeTo("slow",0.5);
		var winH = $(window).height();
		var winW = $(window).width();
		
		$(id).fadeIn(500);
	});
	$('.window .close').click(function (e) {
		e.preventDefault();
		$('#mask, .window').hide();
	});
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});
});
//Табы переключение
$( document ).ready(function() {
(function($) {
$(function() {

	$('ul.tabs__caption').on('click', 'li:not(.active)', function() {
		$(this)
			.addClass('active').siblings().removeClass('active')
			.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
	});

});
})(jQuery);
});
window.onload = function() {
         script1();
         script2();
         script3();
        
}
//Кнопки слайдера
$( document ).ready(function() {
$('div.button_slide').css('top', $('.slide').height());
});

$( document ).ready(function() {
$(function(){
$(window).resize(function() {
$('div.button_slide').css('top', $('.slide').height());
})
})
});
$( document ).ready(function() {
$('div.button_slide').css('width', $('.slide').width());
});

$( document ).ready(function() {
$(function(){
$(window).resize(function() {
$('div.button_slide').css('width', $('.slide').width());
})
})
});