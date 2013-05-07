ready(function(){

    /*var windowHeight = window.innerHeight;
    var headerHeight = document.getElementById('header').offsetHeight;
	var container = document.getElementById('container');

	container.setAttribute("style","height:" + (windowHeight - headerHeight) + "px");

	window.onresize = function(event) {
    	container.setAttribute("style","height:" + (window.innerHeight - headerHeight) + "px");
	}
*/
var contentRegister = document.getElementById('content-register');

if (contentRegister) {
	setTimeout(function(){
		contentRegister.setAttribute("style","height:" + contentRegister.offsetHeight + "px");
	}, 250);
}


var hash = location.hash;

if (hash) {
	var hashbis = hash.split('#');
	var hashter = hashbis[1].split('-');
	var section = hashter[0];
	var page = hashter[1];

	console.log(section)
	console.log(page);

if (page = "registration") {
	$('#registration').hide();

	}
}



});