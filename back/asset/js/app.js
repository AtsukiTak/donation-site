
$(function(){

	window.onload = function() {

		if($('body').hasClass('top')) {
			$.backstretch("assets/pc/images/common/bg.jpg");
		} else if($('body').hasClass('about')) {
			$('.about').backstretch("../assets/pc/images/common/bg.jpg");
		}
	}


	function tabMenu() {
		var $menu = $('.tab-container .tab-btn li');

		$menu.on('click', function() {
			var $index = $menu.index(this);

			$('.tab-content').css('display', 'none');
			$('.tab-content').eq($index).css('display', 'block');

			$menu.removeClass('active');
			$menu.eq($index).addClass('active');
		});
	}
	tabMenu();

});
