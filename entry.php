<!-- <div class="main-title dark-bg fullwidth-section dt-sc-parallax-section breadcrumb-parallax" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Background/blog.jpg"'">
	<div class="container">
    	<h1>Blog Detail</h1>
    </div>
</div> -->
<!-- Breadcrumb Ends Here -->
<div class="content-main">
    <div class="fullwidth-section">
        <div class="container">
        	<!-- Blog Detail Starts Here -->
            <article class="blog-entry single-blog" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-thumb">

                     
                     <?php 
                        
                        $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
                        $sample = strpos($actual_link , "calendar");
                        // echo "<script>alert('" . $actual_link . $sample ."')</script>";
                     ?>
                    <a href="#">
                        <?php 
                            if($sample === false):
                            
                                if ( has_post_thumbnail() ) { the_post_thumbnail('full'); } 
                                else echo "<img src=\"http://placehold.it/1200x800/000000&text=Blog+Image\" alt=\"\" title=\"\">"; 
                            endif;

                            
                        ?>
                    </a>
                </div>
				<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
    
                <div class="entry-details">
                    <div class="entry-title">
                        <?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(__('EDIT THIS POST'), '', '', 0, 'post-edit-link dt-sc-button small filled avocado edit-this-post-float'); ?>
                   
                    </div>
		

	<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
	<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>


<!-- Breadcrumb Starts Here -->
                	
                                       <!--  <div class="entry-metadata">
                                             <p class="date"> <i class="fa fa-calendar"></i> (DATE HERE) </p>
                                             <p class="author"> <i class="fa fa-user"></i> By :  <a href="#" title="ram"> (AUTHOR HERE) </a> </p>
                                             <p><a href="#"><i class="fa fa-comments"></i>(NUMBER OF COMMENTS HERE)</a></p>
                                        </div>
                                        <div class="entry-body">
                                            <p>(CONTENT HERE)</p>
                                        </div>
                                    </div>
                                </article>
                               
                                
                                
                                <div class="post-author-details">
	                                <h3>About the Author</h3>
                                    <div class="entry-author-image">
                                    	<img src="http://placehold.it/100x100/000000" alt="" title="" />(AUTHOR'S PICTURE)
                                    </div>
                                    <div class="author-desc">
                                    	<div class="author-title">
	                                        <h5><a href="#">(AUTHOR'S NAME)</a></h5> / <span>(AUTHORITY)</span>
                                        </div>
                                        <p>(AUTHOR'S DESCRIPTION)</p>
                                    </div>
                                </div> -->
                               
                                
                              
                                <!-- <div id="respond">
                                	<h3> Give a Reply </h3>
                                     <form id="commentform" action="#" name="frmcomment">
                                        <p class="dt-sc-one-third column first">
                                        	<input type="text" required="" title="Please enter your name" placeholder="Enter Your Name *" name="author" id="author">
                                        </p>
                                        <p class="dt-sc-one-third column">
                                        	<input type="text" required="" title="Please enter your valid email_id" placeholder="Enter Your Email *" name="email" id="email">
                                        </p>
                                        <p class="dt-sc-one-third column">
                                        	<input type="text" required="" placeholder="Enter Your Website URL" name="website" id="website">
                                        </p>
                                        <p class="textarea">
                                        	<textarea required="" title=" Please enter your message" placeholder="Type Your Message *"rows="3" cols="5" name="comment" id="comment"></textarea>
                                        </p>
                                        <p class="form-submit dt-sc-button small">
                                        	<input type="submit" value="Post a comment" id="submit" name="submit" class="button">
                                        </p>
                                     </form>
                                </div> -->
                                <!-- Comments Area Ends Here -->
                   