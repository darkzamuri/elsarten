$(document).ready(function(){
	if (!!$.prototype.bxSlider)
		
		if ($('.tab-content').width() < 400)
			carousel_item_nb_new = 2;
		if ($('.tab-content').width() >= 400)
			carousel_item_nb_new = 3;
		if ($('.tab-content').width() >= 500)
			carousel_item_nb_new = 4;
		if($('.tab-content').width() > 800)
			carousel_item_nb_new = caroucel_nb;
		
		$('#tm_manufacturers_block > ul').bxSlider({
			responsive:true,
			useCSS: false,
			minSlides: carousel_item_nb_new,
			maxSlides: carousel_item_nb_new,
			slideWidth: caroucel_slide_width,
			slideMargin: caroucel_slide_margin,
			infiniteLoop: caroucel_loop,
			hideControlOnEnd: caroucel_hide_controll,
			randomStart: caroucel_random,
			moveSlides: caroucel_item_scroll,
			pager: caroucel_pager,
			autoHover: caroucel_auto_hover,
			auto: caroucel_auto,
			speed: caroucel_speed,
			pause: caroucel_auto_pause,
			controls: caroucel_control,
			autoControls: caroucel_auto_control,
			startText:'',
			stopText:'',
		});
});