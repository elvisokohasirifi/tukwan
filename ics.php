<?php

$event = array(
	'id' => $_GET['id'],
	'title' => $_GET['title'],
	'description' => $_GET['description'],
	'datestart' => "".$_GET['year'].$_GET['month'].$_GET['day']."T".$_GET['hr'].$_GET['min'].$_GET['sec']."Z",
	'address' => $_GET['stage']
);

$ical = 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//hacksw/handcal//NONSGML v1.0//EN
CALSCALE:GREGORIAN
BEGIN:VEVENT
DTEND:' . $event['datestart'] . '
UID:' . $event['title'] . '
DTSTAMP:' . time() . '
LOCATION:' . $event['address'] . '
DESCRIPTION:' . addslashes($event['description']) . '
URL;VALUE=URI: http://mydomain.com/events/' . $event['id'] . '
SUMMARY:' . addslashes($event['title']) . '
DTSTART:' . $event['datestart'] . '
END:VEVENT
END:VCALENDAR';
//set correct content-type-header
if($event['id']){
	header('Content-type: text/calendar; charset=utf-8');
	header('Content-Disposition: attachment; filename=tukwan-event.ics');
	echo $ical;
} else {
	// If $id isn't set, then kick the user back to home. Do not pass go,
        // and do not collect $200. Currently it's _very_ slow.
	header('Location: /');
}

//originally created by Mohawk and used by Tukwan

//echo $event['datestart'];
?>