<?php if($node['title'] && $node['title'] != ''){ ?>
	<a href="?ref=<?php echo $node['ref']; ?>"><h1><?php echo $node['title']; ?></h1></a>
<?php } ?>

<?php if($node['content']['img'] && $node['content']['img'] != ''){ ?>
<img src="<?php echo $node['content']['img']; ?>" align="left" style="max-height: 150px; max-width: 150px; margin: 10px;">
<?php } ?>

<?php if($node['content']['event_start_date'] && $node['content']['event_start_date'] != ''){ ?>
<p>
	<strong>
	<?php 
		echo $node['content']['event_start_date'];
		if($node['content']['event_end_date'] && $node['content']['event_end_date'] != '' && $node['content']['event_end_date'] != $node['content']['event_start_date'])
			echo " - ".$node['content']['event_end_date'];
	?>
	</strong>
</p>
<?php } ?>

<?php if($node['content']['venue'] && $node['content']['venue'] != ''){ ?>
<p>
	<strong>
	<?php echo $node['content']['venue']; ?>
	</strong>
</p>
<?php } ?>

<p>
<?php echo $node['content']['description']; ?>
</p>
