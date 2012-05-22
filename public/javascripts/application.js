$(document).ready(function(){
	// Hide scrollbars
	hide_scrollbars();

	update_number('#count_singles','/beamer/count_singles');
	update_number('#count_dates','/beamer/count_dates');

	check_for_date();
});

function update_number(selector, url)
{
	$(selector).html(get_number(url));
	//setTimeout("update_number('"+selector+"', '"+url+"')", 2*1000);
}

function get_number(url)
{
	return $.ajax({
				url: url,
				async: false
			}).responseText;
}

function hide_scrollbars()
{
	document.documentElement.style.overflow = 'hidden';
	document.body.scroll = "no";
}

function check_for_date()
{
	// get singles male and female
	var nerds    = get_number('/beamer/count_single_nerds');
	var beauties = get_number('/beamer/count_single_beauties');

	// Enough people? Let's start dating!
	if (nerds > 3 && beauties > 3) {
		start_date();
	}
	else {
		// Check back later
		//setTimeout("check_for_date()", 15*1000);
	}
}

function start_date()
{
	// Request a new date
	$.post('/beamer/start_date',null, function(response){
		// make QR smaller
		toggle_qr_code();
		// add people specs
		// show a countdown of 2 minutes
		// after 2 minutes, end the date ->
	},'json');
}

function end_date()
{
	// Remove people specs
	// remove countdown
	// make QR larger
	toggle_qr_code();
	// after one minute -> check_for_date
}

function toggle_qr_code()
{
	$('.qr').toggleClass('small');
}