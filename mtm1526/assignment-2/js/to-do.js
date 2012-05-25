var todo = document.getElementById('todo');
var item = document.getElementById('item');

document.getElementsByTagName('form')[0].addEventListener('submit', function (e) {
	e.preventDefault();
	
		if (item.value != '') {
		var newItem = document.createElement('li');

		newItem.innerHTML = item.value;
		todo.appendChild(newItem);
	}

	item.value = '';
}, false);

todo.addEventListener('click', function (e) {
	if (e.target.className == 'deleted') {
		e.target.className = '';
	} else {
		e.target.className = 'deleted';
	}
}, false);




