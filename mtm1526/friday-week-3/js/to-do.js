
// Document ready event
// It's best practice to put all your jquery code inside

$(document).ready(function () {
	
	//console.log('In Jquery');
	
	$('form').on('submit', function (ev){
		// Stop elements from doing what it normally does
		// Stops the form from packaging its data and sending
		// a post request
		ev.preventDefault();
		
		//console.log('form submitted');
		
		var item = $('#item').val();
		// .prepend(), .before(), .after(), .html()
		$('.todos').append('<li>' + item + '</li>');
		$('.todos li:last-child').hide().fadeIn(300);
		$('#item').val('');
	});
	
	$('.todos').on('click', 'li', function() {
		$(this).toggleClass('done');
	});
	
	// .style.backgroundColor                                  (JS)
	// $('elem').css('background-color', ''#f00')              (JQ)
	
});



















