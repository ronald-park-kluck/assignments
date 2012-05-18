//JavaScript Document
//Letter Looper

var x=('');

while (!x) {
	var x = prompt('Type any letter:');
}

console.log(x);

for (var i=0; i< 11; i++){
	
	for (var n=0; n< i; n++){

		document.write(x);
	}

	document.write('</br>');
}