/* ---------------------------------------------------------------------- 
* Product: Color-Switcher
* Author: Morshedul Arefin
* Version: 1.0
* License: The MIT License (MIT)
* ---------------------------------------------------------------------- */

window.console = window.console || (function() {
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();

jQuery(document).ready(function($) {
	"use strict"
	
	$("ul.colors .color1" ).click(function() {
		$("#colors" ).attr("href", "css/colors/default.css" );
		return false;
	});

	$("ul.colors .color2" ).click(function() {
		$("#colors" ).attr("href", "css/colors/orange.css" );
		return false;
	});

	$("ul.colors .color3" ).click(function() {
		$("#colors" ).attr("href", "css/colors/yellow.css" );
		return false;
	});

	$("ul.colors .color4" ).click(function() {
		$("#colors" ).attr("href", "css/colors/brown.css" );
		return false;
	});

	$("ul.colors .color5" ).click(function() {
		$("#colors" ).attr("href", "css/colors/green.css" );
		return false;
	});

	$("ul.colors .color6" ).click(function() {
		$("#colors" ).attr("href", "css/colors/red.css" );
		return false;
	});

	$("ul.colors .color7" ).click(function() {
		$("#colors" ).attr("href", "css/colors/blue.css" );
		return false;
	});

	$("ul.colors .color8" ).click(function() {
		$("#colors" ).attr("href", "css/colors/green-sea.css" );
		return false;
	});

	
	$("#color-style-switcher .bottom a.settings").click(function(e) {
		e.preventDefault();
		var div = $("#color-style-switcher");
		if (div.css("left") === "-195px") {
			$("#color-style-switcher").animate({
				left: "0px"
			}); 
		} else {
			$("#color-style-switcher").animate({
				left: "-195px"
			});
		}
	})

	$("ul.colors li a").click(function(e) {
		e.preventDefault();
		$(this).parent().parent().find("a").removeClass("active");
		$(this).addClass("active");
	})

});



//Inject Necessary Styles and HTML
jQuery('head').append('<link rel="stylesheet" id="colors" href="css/colors/default.css" type="text/css" />');
jQuery('head').append('<link rel="stylesheet" href="css/color-switcher.css" type="text/css" />'); 

jQuery('body').append('' + 
	'<div id="color-style-switcher">' +
		'<div>' + 
			'<h3>Select Color</h3>' +
			'<ul class="colors">' +
				'<li><a title="default" class="color1 active" href="#"></a></li>' +
				'<li><a title="orange" class="color2" href="#"></a></li>' +
				'<li><a title="yellow" class="color3" href="#"></a></li>' +
				'<li><a title="brown" class="color4" href="#"></a></li>' +				
				'<li><a title="green" class="color5" href="#"></a></li>' +
				'<li><a title="red" class="color6" href="#"></a></li>' +
				'<li><a title="blue" class="color7" href="#"></a></li>' +
				'<li><a title="green sea" class="color8" href="#"></a></li>' +
			'</ul>' +
		'</div>' +
		'<div class="bottom"> <a href="#" class="settings"><i class="fa fa-paint-brush"></i></a> </div>' +
	'</div>' +
'');
