<?php
/*
 * Define AddOn name & 
 * register in AddOn Framework
 */
$addons['events']['name']="events";
$addons['events']['file_root']="sites/jmf/addons/events";

/*
 * Define layouts
 */

if(!$layouts['event']){
$layouts['event']['handler']="event.php";
$layouts['event']['addon']='events';
}
/*
 * Define content types
 */

// Add EVENT content type
if(!$contenttypes['event']['table'])
$contenttypes['event']['table']=$tblprfx."content_events";

if(!$contenttypes['event']['handler']){
$contenttypes['event']['handler']="event.php";
$contenttypes['event']['addon']='events';
$contenttypes['event']['override']['list']='event-tile';

$contenttypes['event-tile']['table']=$contenttypes['event']['table']; 
$contenttypes['event-tile']['addon']='events';
$contenttypes['event-tile']['handler']="event_list.php";
}

// Add EVENT PAGE content type
if(!$contenttypes['event_page']['table'])
$contenttypes['event_page']['table']=$tblprfx."content_events_pages";

if(!$contenttypes['event_page']['handler']){
$contenttypes['event_page']['handler']="event_page.php";
$contenttypes['event_page']['addon']='events';
}


// Add system libs
$system['addons']['events'][]="util.php";

?>
