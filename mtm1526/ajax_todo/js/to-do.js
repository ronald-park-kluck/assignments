$(document).ready(function () {
	
	$('.todos').load('get-todos.php');
	
	$('form').on('submit', function (ev){
		ev.preventDefault();
		
		var item = $('#item').val();
		
		$('.todos').append('<li>' + item + '</li>');
		$('.todos li:last-child').hide().fadeIn(300);
		$('#item').val('');
		
		$.post('save-todo.php', {
			'item' : item
		});
	});
	
	$('.todos').on('click', 'li', function() {
		$(this).toggleClass('done');
	});
	
});



















