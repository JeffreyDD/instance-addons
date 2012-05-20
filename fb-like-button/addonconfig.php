<?php
/*
 * Define AddOn name & 
 * register in AddOn Framework
 */
$addons['fb-like-button']['name']="news";
$addons['fb-like-button']['file_root']="sites/jmf/addons/fb-like-button";

/*
 * Define content types
 */

// Add FB LIKE BUTTON content type
if(!$contenttypes['fb_like_button']['table'])
$contenttypes['fb_like_button']['table']=$tblprfx."content_fb_like_buttons";

if(!$contenttypes['fb_like_button']['handler']){
$contenttypes['fb_like_button']['handler']="like_button.php";
$contenttypes['fb_like_button']['addon']='fb-like-button';
}

?>
