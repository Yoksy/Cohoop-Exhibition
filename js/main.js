;$(function() {

    var contentRegister = document.getElementById('content-register');

	if (contentRegister) {
		setTimeout(function(){
			contentRegister.setAttribute("style","height:" + contentRegister.offsetHeight + "px");
		}, 250);
	}

	/* Ellipsis */
	//$('#ressources .list hgroup').ellipsis();

});