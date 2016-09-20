<div class="title-banner donate-banner flex-center">
	<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-donatewhite.svg"?>">
	<h2>How to Donate</h2>		
</div>
<div class="donate-content container flex-center">
	<p>
		<?php 
			$how_to_donate = CFS()->get('how_to_donate', 46);
			if( !empty($how_to_donate) ){
				echo $how_to_donate; }; 
		?>
	</p>
</div>