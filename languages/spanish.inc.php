<?

// Spanish language include
// For version 0.6 PHP iCalendar
//
// Translation by XIPS (buzon@xips.es)
//
// Submit new translations to chad@chadsdomain.com



$day_lang			= "D&iacute;a";
$week_lang			= "Semana";
$month_lang			= "Mes";
$year_lang			= "A&ntilde;o";
$calendar_lang		= "Calendario";
$next_day_lang		= "D&iacute;a siguiente";
$next_month_lang	= "Mes siguiente";
$next_week_lang		= "Semana siguiente";
$next_year_lang		= "A&ntilde;o siguiente";
$last_day_lang		= "D&iacute;a anterior";
$last_month_lang	= "Mes anterior";
$last_week_lang		= "Semana anterior";
$last_year_lang		= "A&ntilde;o anterior";
$subscribe_lang		= "Suscribir";
$download_lang		= "Descargar";
$powered_by_lang 	= "Powered by";
$version_lang		= "0.6";

// from here down, translate
$event_lang			= 'Event';
$event_start_lang	= 'Start Time';
$event_end_lang		= 'End Time';
$this_months_lang	= 'This Month\'s Events';
$date_lang			= 'Date';
$summary_lang		= 'Summary';
$all_day_lang		= 'All day event';
$notes_lang			= 'Notes';
$this_years_lang	= 'This Year\'s Events';
$today_lang			= 'Today';
$this_week_lang		= 'This Week';
$this_month_lang	= 'This Month';
$jump_lang			= 'Jump to';
$tomorrows_lang		= 'Tomorrow\'s Events';
$goday_lang			= 'Go to Today';
$goweek_lang		= 'Go to This Week';
$gomonth_lang		= 'Go to This Month';
$goyear_lang		= 'Go to This Year';

$daysofweek_lang			= array ('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
$daysofweekshort_lang		= array ('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
$daysofweekreallyshort_lang	= array ('S','M','T','W','T','F','S');
$monthsofyear_lang			= array ('January','February','March','April','May','June','July','August','September','October','November','December');
$monthsofyearshort_lang		= array ('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');

// For time formatting, check out: http://www.php.net/manual/en/function.date.php
$timeFormat = 'g:i A';

// For date formatting, see note below
$dateFormat_day = '%A, %B %e';
$dateFormat_week = '%B %e';
$dateFormat_week_list = '%a, %b %e';
$dateFormat_week_jump = '%b %e';
$dateFormat_month = '%B %Y';
$dateFormat_month_list = '%A, %B %e';

/*
Notes about dateFormat_*
	The pieces are similar to that of the PHP function strftime(), 
	however only the following is supported at this time:
	
	%A - the full week day name as specified in $daysofweek_lang
	%a - the shortened week day name as specified in $daysofweekshort_lang
	%B - the full month name as specified in $monthsofyear_lang
	%b - the shortened month name as specified in $monthsofyearshort_lang
	%e - the day of the month as a decimal number (1 to 31)
	%Y - the 4-digit year

	If this causes problems with representing your language accurately, let
	us know. We will be happy to modify this if needed.
*/

// Error messages - %s will be replaced with a variable
$error_title_lang = 'Error!';
$error_window_lang = 'There was an error!';
$error_calendar_lang = 'The calendar "%s" was being processed when this error occurred.';
$error_path_lang = 'Unable to open the path: "%s"';
$error_back_lang = 'Please use the "Back" button to return.';
$error_remotecal_lang = 'This server blocks remote calendars which have not been approved.';
$error_restrictedcal_lang = 'You have tried to access a calendar that is restricted on this server.';
$error_invalidcal_lang = 'Invalid calendar file. Please try a different calendar.';


?>