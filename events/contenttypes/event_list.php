<div style="width:840px;">
<?php if($node['content']['img'] && $node['content']['img'] != ''){ ?>
	<img src="<?php echo $node['content']['img']; ?>" align="left" style="max-height: 40px; max-width: 40px;">
<?php } ?>

<?php if($node['title'] && $node['title'] != ''){ ?>
	<a href="?ref=<?php echo $node['ref']; ?>"><h1><?php echo $node['title']; ?></h1></a>
<?php } ?>

<?php if($node['content']['event_start_date'] && $node['content']['event_start_date'] != ''){ ?>
	<strong>
	<?php 
		echo $node['content']['event_start_date'];
		if($node['content']['event_end_date'] && $node['content']['event_end_date'] != '' && $node['content']['event_end_date'] != $node['content']['event_start_date'])
			echo " - ".$node['content']['event_end_date'];
	?>
	</strong>
<?php } ?>

<?php if($node['content']['venue'] && $node['content']['venue'] != ''){ ?>
	<strong>
	<?php echo $node['content']['venue']; ?>
	</strong>
<?php } ?>
</div>
