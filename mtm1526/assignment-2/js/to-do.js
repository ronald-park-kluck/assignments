var todos = document.getElementById('todos');
var item = document.getElementById('item');

document.getElementsByTagName('form')[0].addEventListener('submit', function (e) {
	e.preventDefault();
	
		if (item.value != '') {
		var newItem = document.createElement('li');

		newItem.innerHTML = item.value;
		todos.appendChild(newItem);
	}

	item.value = '';
}, false);






