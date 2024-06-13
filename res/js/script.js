<<<<<<< HEAD
var login = (function(){
	// cahe DOM
	var $container = $("body > #container");

	init();

	function init() {
		_setBackground();
	}

	function _setBackground() {
		var image_url = $container.data('background');
		$("html").css('background-image', 'url('+image_url+')');
	}
=======
var login = (function(){
	// cahe DOM
	var $container = $("body > #container");

	init();

	function init() {
		_setBackground();
	}

	function _setBackground() {
		var image_url = $container.data('background');
		$("html").css('background-image', 'url('+image_url+')');
	}
>>>>>>> 6f9d26b7ac5b194c886ec132d8e7f256a2270a75
})();