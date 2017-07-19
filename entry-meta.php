

<?php 
	$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
	$sample = strpos($actual_link , "calendar");
	if($sample === false):
?>
<div class="entry-metadata">
	<h1><?php echo get_the_title(); ?></h1>
	<div>	
		<p class="date"> <i class="fa fa-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?> </p>
		<p class="author"> <i class="fa fa-user"></i> By :  <a href="#" title="Author"> <?php echo get_the_author(); ?> </a> </p>
		<p><a href="#"><i class="fa fa-comments"></i><?php comments_number(); ?></a></p>
	</div>
	
</div>
<?php endif; ?>
