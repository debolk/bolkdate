var dates_remaning = 0;

$(document).ready(function(){
	// Hide scrollbars
	hide_scrollbars();

	// Keep statistics updated at bottom of the page
	update_singles_count();
	update_dates_count();

	// Check whether we can start a date
	check_for_date();
});

function update_singles_count()
{
	$.get('/beamer/count_singles', null, function(response){
		$('#count_singles').html(response);	
		setTimeout(update_singles_count, 2*1000);
	});
}

function update_dates_count()
{
	$.get('/beamer/count_dates', null, function(response){
		$('#count_dates').html(response);	
		setTimeout(update_dates_count, 2*1000);
	});
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
	// hide timeout after dating
	$('#next_date_timer').countdown('destroy');
	$('#next_date').hide();

	// get the number of singles, nerds and beauties
	var nerds    = get_number('/beamer/count_single_nerds');
	var beauties = get_number('/beamer/count_single_beauties');

	// Enough people? Let's start dating!
	if (nerds > 2 && beauties > 2) {
		// Start a series of three dates
		dates_remaning = Math.min(nerds, beauties);
		start_date();
	}
	else {
		// Check back later
		setTimeout("check_for_date()", 15*1000);
	}
}

function start_date()
{
	if (dates_remaning > 0) {
		// Request a new date
		$.post('/beamer/start_date', null, function(response){
			// Lower counter
			dates_remaning = dates_remaning - 1;
			// make QR smaller
			toggle_qr_code();
			// add people specs
			$('#person1').html(response.person1);
			$('#person2').html(response.person2);
			$('#match').html(parseFloat(response.match*100).toFixed(2));
			$('#date_info').show();
			// show a countdown of 2 minutes
			start_countdown('#countdown', 120, end_date);
		},'json');
	}
	else {

	}
}

function end_date()
{
	// Remove people specs
	$('#date_info').hide();
	// remove countdown
	remove_countdown();
	// make QR larger
	toggle_qr_code();
	// still on a date series? do it again!
	if (dates_remaning > 0) {
		setTimeout("start_date()", 60*1000);
	}
	else {
		$('#next_date').show();
		start_countdown('#next_date_timer', 30*60, check_for_date)
	}
}

function toggle_qr_code()
{
	$('.qr').toggleClass('small');
}

function start_countdown(selector, length, callback)
{
	$(selector).countdown({
		until: +length,
		layout: '{mnn}:{snn}',
		onExpiry: callback
	}); 
}

function remove_countdown()
{
	$('#countdown').countdown('destroy');
}
