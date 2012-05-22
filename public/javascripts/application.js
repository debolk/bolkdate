$(document).ready(function(){
	// Hide scrollbars
	document.documentElement.style.overflow = 'hidden';	 // firefox, chrome
	document.body.scroll = "no";	// ie only	

	update_number('#count_singles','/beamer/count_singles');
	update_number('#count_dates','/beamer/count_dates');
});