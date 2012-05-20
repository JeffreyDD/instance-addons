<?php

$href = urlencode($node['content']['href']);

$appID = $node['content']['appID'];

$layout = 'standard';
if($node['content']['layout'] && $node['content']['layout'] != '')
	$layout = $node['content']['layout'];

$width = 200;
if($node['content']['width'] && $node['content']['width'] != 0)
	$width = $node['content']['width'];
$height = 80;
if($node['content']['height'] && $node['content']['height'] != 0)
	$height = $node['content']['height'];

$colorscheme = 'light';
if($node['content']['colorscheme'] && $node['content']['colorscheme'] != '')
	$colorscheme = $node['content']['colorscheme'];


$iframesrc="http://www.facebook.com/plugins/like.php?href=$href&amp;send=false&amp;layout=$layout&amp;width=$width&amp;show_faces=true&amp;action=like&amp;colorscheme=$colorscheme&amp;font&amp;height=$height&amp;appId=$appID";
?>
<iframe src="<?php echo $iframesrc; ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; <?php echo "width:$widthpx; height:$heightpx;"; ?>" allowTransparency="true"></iframe>
