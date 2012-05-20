<?php

function event_determine(){
	// Determines the relevant event related to currently loaded node

	// Get Currently loaded node using node_get
	$node = node_get();

	if($node['content_type'] == 'event'){
	
		// The current loaded node is the actual event, so use the CID of this node
		$event_CID	= $node['content_ref'];
		
	}elseif($node['content']['event_cid'] && $node['content']['event_cid'] != ''){
	
		// The current loaded node is connected to an event through the event_cid, so use this as the event
		$event_CID	= $node['content']['event_cid'];
		
	}else{
	
		// No event could be found with certainty, so return false
		$event_CID = false;

	}
	
	return $event_CID;
}

function event_get($event_CID){
	// Returns the event content specified by the event_CID
	global $contenttypes;

	// Get the relevant table
	$tablename=$contenttypes['event']['table'];

	// Get the event from the DB
	$items['query']	="SELECT * FROM `$tablename` WHERE `cid` = '$event_CID';";
	$items['result']=data_query($items['query']);

	// Return the result as-is
	return $items['result'];
}

function event_getnode($event_CID){
	// Returns the event node specified by the event_CID
	global $tblprfx;

	// Get the relevant table
	$tablename=$tblprfx."nodes";

	// Get the event from the DB
	$items['query']	="SELECT * FROM `$tablename` WHERE `content_type` = 'event' AND `content_ref` = '$event_CID';";
	$items['result']=data_query($items['query']);

	// Assign $event_NID to the relevant response
	$event_NID = $items['result']['nid'];
	
	// Now get the entire node
	$node = node_get(false,$event_NID);
	
	// Return the result as-is
	return $node;
}

?>
