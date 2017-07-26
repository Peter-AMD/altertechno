

<?php 
	$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
	$sample = strpos($actual_link , "calendar");
	if($sample === false):
?>
<div class="entry-metadata">
	<h1><?php echo get_the_title(); ?></h1>
	<div>	
		<p class="date"> <i class="fa fa-calendar-o"></i> <?php the_time( get_option( 'date_format' ) ); ?> </p>
		<p class="author"> <i class="fa fa-heart"></i> By : <?php echo get_the_author(); ?> </p>
		<p><i class="fa fa-comment"></i><?php comments_number(); ?></p>
	</div>
	
</div>
<?php endif; ?>
