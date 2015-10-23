$(".thumbnail").hover(
  function () {
    $(this).find('.caption').slideDown(250);
  },
  function () {
    $(this).find('.caption').slideUp(250); 
  }
);

(function($){ 
	$('.caption').click(function() {
		var link = $(this).parent().find('a').attr('href');
 	       window.location = link;

	});
})(jQuery)