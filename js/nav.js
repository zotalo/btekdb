jQuery("document").ready(function($){

	var navigate = $('nav');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 30) {
		navigate.addClass("f-nav");
	} else {
		navigate.removeClass("f-nav");
		}
	});
});