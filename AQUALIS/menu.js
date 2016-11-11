var positionElementInPage = $('#menu').offset().top;
$( window ).resize(function() {
	positionElementInPage = $('#menu').offset().top;
});
$(window).scroll(
	function() {
		if ($(window).scrollTop() > positionElementInPage) {
			// fixed
			$('#menu').addClass("fixedTop");
		} else {
			// unfixed
			$('#menu').removeClass("fixedTop");
		}
	}
 
  );