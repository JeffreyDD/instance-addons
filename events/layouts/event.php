<?php echo html_header($node['title']); ?>
<div id="page">
<div id="wrapper" class="wrapper">

	<div class="header shadowbox " id="header">
		<div id="logo" class="logo">
			<a href="?">
				JeffenMausFeestjes
			</a>
		</div><!--logo-->
		<div class="menu" id="navigation">
			<?php  $block=block_get('1'); echo block_format($block);?>
		</div>
	</div>
	<div style="float:none; clear:both;"></div>
	<div class="clearfix" id="main-area">
	<div id="main-area-inside" class="main clearfix">
		<div class="sidebar clearfix" id="left">
			<?php
				$event_nid = event_determine(); 
				$event = event_getnode($event_nid); 
			?>
		
			<!-- The EVENT info block -->
			<div class="shadowbox">
				<?php $block=block_get('5'); echo block_format($block); ?>
			</div>
			
			<!-- The EVENT links block -->
			<?php 
				if($event['content']['event_pages_menu_block_nid'] && $event['content']['event_pages_menu_block_nid'] != ''){
			?>
				<div class="shadowbox">
				<?php 
					$block=block_get($event['content']['event_pages_menu_block_nid']);
					echo block_format($block); 
				?>
				</div>
			<?php
				}
			?>

			<!-- The FB Like Button block -->
			<div class="shadowbox">
				<?php $block=block_get('9'); echo block_format($block); ?>
			</div>

		</div><!--right-->

  		<div class="inside clearfix main-content main-right shadowbox" id="main">  
			<?php echo node_format($node); ?>
		</div><!--main-->

	</div>
	</div>	
</div>
</div>
<?php echo html_footer(); ?>
