jQuery(document).ready(function(){
			var touch = jQuery('#touch-menu');
		    var menu = jQuery('.nav');
		 
		    jQuery(touch).on('click', function(e) {
		        e.preventDefault();
		        menu.slideToggle();
		    });
		    jQuery(window).resize(function(){
		        var wid = jQuery(window).width();
		        if(wid > 560 && menu.is(':hidden')) {
		            menu.removeAttr('style');
		        }
		    });

		    	// = Добавляем ссылку наверх к заголовку
		    	jQuery('#stock2').append('<a href="#container">top</a>');

		    	// = Вешаем событие прокрутки к нужному месту
		    	//	 на все ссылки якорь которых начинается на #
		    	jQuery('a[href^="#"]').bind('click.smoothscroll',function (e) {
		    		e.preventDefault();

		    		var target = this.hash,
		    		$target = jQuery(target);

		    		jQuery('html, body').stop().animate({
		    			'scrollTop': $target.offset().top
		    		}, 900, 'swing', function () {
		    			window.location.hash = target;
		    		});
		    	});
});