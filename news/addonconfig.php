<?php
/*
 * Define AddOn name & 
 * register in AddOn Framework
 */
$addons['news']['name']="news";
$addons['news']['file_root']="sites/jmf/addons/news";

/*
 * Define content types
 */

// Add NEWS FEED content type
if(!$contenttypes['news_feed']['table'])
$contenttypes['news_feed']['table']=$tblprfx."content_news_feeds";

if(!$contenttypes['news_feed']['handler']){
$contenttypes['news_feed']['handler']="news_feed.php";
$contenttypes['news_feed']['addon']='news';
}

// Add NEWS ITEM content type
if(!$contenttypes['news_item']['table'])
$contenttypes['news_item']['table']=$tblprfx."content_news_items";

if(!$contenttypes['news_item']['handler']){
$contenttypes['news_item']['handler']="news_item.php";
$contenttypes['news_item']['addon']='news';
}

?>
