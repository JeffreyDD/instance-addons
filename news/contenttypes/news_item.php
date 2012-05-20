<?php if($node['content']['title'] && $node['content']['title'] != ''){ ?>
	<h1><?php echo $node['content']['title']; ?></h1>
<?php } ?>

<p>
<?php
	if($node['content']['date'] && $node['content']['date'] != '')
		echo "<i>".$node['content']['date']."</i> ";

	if($node['content']['author'] && $node['content']['author'] != '')
		echo "By: <b>".$node['content']['author']."</b>";
?>
</p>

<?php if($node['content']['teaser'] && $node['content']['teaser'] != ''){ ?>
<p>
	<strong>
	<?php echo $node['content']['teaser']; ?>
	</strong>
</p>
<?php } ?>

<p>
<?php echo $node['content']['body']; ?>
</p>
