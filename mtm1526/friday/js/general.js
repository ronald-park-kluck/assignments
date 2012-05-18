/*
	three ways to access elements in the HTML
	1. document.getElementById()
	2. document.getElementsByClassName()
	3. document.getElementsByTagName()
	
	And another that allows us to use css slectors
	It's not in every browser yet
	4. document.querySelectorAll()
	
*/


var createBtn = document.getElementById('create-btn');


/*function bind (){
	
}
*/


// A wrapper function to allow click events in older IE
var bind = function (elem, ev, func) {
	if(window.addEventListener){
		elem.addEventListener(ev, func, false);
	}	
	else {
			elem.attachEvent('on' + ev, func);
	}
};

var removeCurrent = function() {
	var circs = document.getElementsByTagName('div');
	var total = circs.length;
	
	for (var i = 0; i < total; i++) {
		circs[i].className = '';
	}
};



/*.addEventListener(event, function, false)
createBtn.addEventListener('click', function() {
	alert('I was clicked!')
}, false);*/


var circle;


bind(createBtn, 'click', function(){
	circle = document.createElement('div');
	document.body.appendChild(circle);
	removeCurrent();
	circle.className = 'current';
});





bind(document.getElementById('down-btn'), 'click', function () {
	var newTop = circle.offsetTop + 40;
	circle.style.top = newTop + 'px';
});

bind(document.getElementById('up-btn'), 'click', function () {
	var newTop = circle.offsetTop - 40;
	circle.style.top = newTop + 'px';
});


bind(document.getElementById('right-btn'), 'click', function () {
	var newLeft = circle.offsetLeft + 40;
	circle.style.left = newLeft + 'px';
});


bind(document.getElementById('left-btn'), 'click', function () {
	var newLeft = circle.offsetLeft - 40;
	circle.style.left = newLeft + 'px';
});


bind(document.body, 'click', function(ev) {
	if (ev.target.tagName.toLowerCase() == 'div'){
		removeCurrent();                                         // extra stuff added after
		circle = ev.target;
		circle.className = 'current';
	}
	//console.log(ev.target);
});


bind(document.getElementById('color-box'), 'change', function (ev) {
	// Inside an event listener
	// this refers to the element this listener was bound to
	circle.style.backgroundColor = this.value;
	circle.innerHTML = '<strong>' + this.value + '</strong>';
	//this.value
});



/*bind(createBtn, 'click', function(){
	alert('I was clicked!');
});*/

//console.log(createBtn);











