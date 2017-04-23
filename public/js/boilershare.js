/*
	@ Harris Christiansen (Harris@HarrisChristiansen.com)
	File Created: April 23, 2017
	Project: boilershare.purduecs.com
*/


$(document).ready(function() { 
	$(".sortable").tablesorter();
	
	$('.validate').bValidator();

	$(".datepicker").datepicker({
		dateFormat: 'yy-mm-dd',
	});
});


////////////////////////////////////////// Table Row Links //////////////////////////////////////////

$(document).ready(function() {
	$('tr').click(function() {
		var url = $(this).find("a").attr("href");
		if (url) {
			window.location = url;
		}
	});
});