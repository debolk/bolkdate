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
	setTimeout("update_number('"+selector+"', '"+url+"')", 2*1000);
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
		setTimeout("check_for_date()", 15*1000);
	}
}

function start_date()
{
	// Request a new date
	$.post('/beamer/start_date',null, function(response){
		// make QR smaller
		toggle_qr_code();
		// add people specs
		$('#date_info').show();
		$('#person1').html(response.person1);
		$('#person2').html(response.person2);
		$('#match').html(parseFloat(response.match*100).toFixed(2));
		// show a countdown of 2 minutes
		start_countdown(120);
	},'json');
}

function end_date()
{
	// Remove people specs
	$('#date_info').hide();
	// remove countdown
	remove_countdown();
	// make QR larger
	toggle_qr_code();
	// after one minute -> check_for_date
	setTimeout("check_for_date()", 60*1000);
}

function toggle_qr_code()
{
	$('.qr').toggleClass('small');
}

function start_countdown(length)
{
	$('#countdown').countdown({
		until: +length,
		layout: '{mnn}:{snn}',
		onExpiry: end_date
	}); 
}

function remove_countdown()
{
	$('#countdown').html('');
}
