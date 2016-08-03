<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->data['v'] = 'home';
    array_push($this->data['css'], 'assets/css/home.css');
    array_push($this->data['css'], 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');


    array_push($this->data['js'], 'assets/js/home.js');

    $this->load->view('partials/hero_img');
    $this->_render();
  }

  public function photos()
  {
    $this->data['v'] = 'photo';
    array_push($this->data['css'], 'assets/slick/slick/slick.css');
    array_push($this->data['css'], 'assets/css/photos/photos.css');
    //array_push($this->data['css'], 'assets/slick/slick/slick-theme.css');

    array_push($this->data['js'], 'assets/slick/slick/slick.js');
    array_push($this->data['js'], 'assets/slick/slick/haunt-gallery.js');

    $this->_render();
  }

  public function tickets()
  {
    $this->data['v'] = 'tickets';
    array_push($this->data['css'], 'assets/css/tickets.css');
    $year = date("Y");
    $this->data['calendar'] = $this->calendar(10, $year);
    $this->_render();
  }
public function calendar($month, $year) {
/* draws a calendar */

$open_days = array(1,2,7,8,9,14,15,16,21,22,23,28,29,30,31); 

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
    if(in_array($list_day, $open_days)):
			    $calendar.= str_repeat('<p>OPEN </p>',1);
    endif;
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	return $calendar;
}

}

