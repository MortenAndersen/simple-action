
(function ($) {

    $(document).ready(function () {

// Call To Action
	$('.action-but').click(function(){
		$('.action-container').toggleClass('action-active');
	});

   $('.home .action-container').toggleClass('action-active');

   var timeoutId = setTimeout(function(){
            $('.home .action-container').removeClass('action-active');
    }, 5000);

  $(".action-container").mouseover(function()  {
  		clearTimeout(timeoutId);
  });

    $(".action-container").mouseleave(function()  {
  		setTimeout(function(){
            $('.action-container').removeClass('action-active');
    }, 3000);
  });

});
}(jQuery));