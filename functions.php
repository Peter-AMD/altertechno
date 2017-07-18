<?php
$GLOBALS['theUrl'] = 'alt_tech_v2'; /*EDIT THIS WHEN DEPLOYING TO LIVE OR TRANSFERRING TO ANOTHER PROJECT*/

add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ), 'sub-menu' => __( 'Sub Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


function updateDatabaseProc()
{
	$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link =  str_replace("updateDatabaseCode", "", $actual_link);


	// Connect to your MySQL database.
if($_POST['updateDatabase'])
{
	$hostname = $_POST['ud-hostname']; /*sgp37.siteground.asia for live, localhost for local*/
	$username = $_POST['ud-username'];/*root for local, */
	$password = $_POST['ud-password'];/*default password for local is empty string*/
	$database = "alter_atechdb";

	if(mysql_connect($hostname, $username, $password))
	{
			// The find and replace strings.
		if($hostname == "localhost")
		{
			
			$find = "www.altertechno.com";/*localhost/alter_tech for local, altertechno.com for live*/
			$replace = "localhost/alter_tech";	
		}
		else
		{
			$find = "localhost/alter_tech";/*localhost/alter_tech for local, altertechno.com for live*/
			$replace = "www.altertechno.com";
		}


		$loop = mysql_query("
		    SELECT
		        concat('UPDATE ',table_schema,'.',table_name, ' SET ',column_name, '=replace(',column_name,', ''{$find}'', ''{$replace}'');') AS s
		    FROM
		        information_schema.columns
		    WHERE
		        table_schema = '{$database}'")
		or die ('Cant loop through dbfields: ' . mysql_error());

		while ($query = mysql_fetch_assoc($loop))
		{
		        mysql_query($query['s']);
		}

		echo "<script>alert('SUCCESS'); window.location = \"" . $actual_link . "\";</script>";
	}

	else
	{
		echo "<script>alert('FAILED'); window.location = \"" . $actual_link . "\";</script>";
	}

	

}
	
}