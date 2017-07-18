<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<section id="comments">
<?php 
if ( have_comments() ) : 
global $comments_by_type;
$comments_by_type = &separate_comments( $comments );
if ( ! empty( $comments_by_type['comment'] ) ) : 
?>
<section id="comments-list" class="comments">
<h3 class="comments-title"><?php comments_number(); ?></h3>
<?php if ( get_comment_pages_count() > 1 ) : ?>
<nav id="comments-nav-above" class="comments-navigation" role="navigation">
<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
</nav>
    <?php endif; ?>
      <ul>
        <?php wp_list_comments( 'type=comment' ); ?>
      </ul>
      <?php if ( get_comment_pages_count() > 1 ) : ?>
      <nav id="comments-nav-below" class="comments-navigation" role="navigation">
        <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
      </nav>
      <?php endif; ?>
</section>
    <?php 
endif; 
if ( ! empty( $comments_by_type['pings'] ) ) : 
$ping_count = count( $comments_by_type['pings'] );
?>
<section id="trackbacks-list" class="comments">
<h3 class="comments-title"><?php echo '<span class="ping-count">' . $ping_count . '</span> ' . ( $ping_count > 1 ? __( 'Trackbacks', 'blankslate' ) : __( 'Trackback', 'blankslate' ) ); ?></h3>
<ul>
<?php wp_list_comments( 'type=pings&callback=blankslate_custom_pings' ); ?>
</ul>
</section>
<?php 
endif;
endif;
if ( comments_open() ) comment_form();
?>
</section>

<div id="comments" class="comments-area">

  <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
      <?php
        $comments_number = get_comments_number();
        if ( 1 === $comments_number ) {
          /* translators: %s: post title */
          printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentysixteen' ), get_the_title() );
        } else {
          printf(
            /* translators: 1: number of comments, 2: post title */
            _nx(
              '%1$s thought on &ldquo;%2$s&rdquo;',
              '%1$s thoughts on &ldquo;%2$s&rdquo;',
              $comments_number,
              'comments title',
              'twentysixteen'
            ),
            number_format_i18n( $comments_number ),
            get_the_title()
          );
        }
      ?>
    </h2>

    <?php the_comments_navigation(); ?>

    <ol class="comment-list">
      <?php
        wp_list_comments( array(
          'style'       => 'ol',
          'short_ping'  => true,
          'avatar_size' => 42,
        ) );
      ?>
    </ol><!-- .comment-list -->

    <?php the_comments_navigation(); ?>

  <?php endif; // Check for have_comments(). ?>

  <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
  ?>
    <p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
  <?php endif; ?>

  <?php
    comment_form( array(
      'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
      'title_reply_after'  => '</h2>',
    ) );
  ?>

</div><!-- .comments-area -->
