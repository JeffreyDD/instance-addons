<table>
	<?php
		$event_nid = event_determine(); 
		$event = event_getnode($event_nid); 
	?>
	<?php if($event['title'] && $event['title'] != ''){ ?>
	<tr>
		<td>
			<?php if($event['content']['img'] && $event['content']['img'] != ''){ ?>
					<img src="<?php echo $event['content']['img']; ?>" align="left" style="max-height: 40px; max-width: 40px;">
			<?php } ?>		
			<a href="?ref=<?php echo $event['ref']; ?>"><h2><?php echo $event['title']; ?></h2></a>
		</td>
	</tr>
	<?php } ?>
	
	<?php if($event['content']['event_start_date'] && $event['content']['event_start_date'] != ''){ ?>
	<tr>
		<td>
				<?php 
					echo $event['content']['event_start_date'];
					if($event['content']['event_end_date'] && $event['content']['event_end_date'] != '' && $event['content']['event_end_date'] != $event['content']['event_start_date'])
						echo " - ".$event['content']['event_end_date'];
				?>
		</td>
	</tr>
	<?php } ?>
	
	<?php if($event['content']['venue'] && $event['content']['venue'] != ''){ ?>
	<tr>
		<td>
			<strong>
			<?php echo $event['content']['venue']; ?>
			</strong>
		</td>
	</tr>
	<?php } ?>
</table>
