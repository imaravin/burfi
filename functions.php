<?php 
//Adds thumbnail to post
add_theme_support('post-thumbnails'); 

//Adds Menus
add_theme_support('menus'); 

//Register right sidebar
register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div><!-- widget end -->'
));
/** Get tweet count from Twitter API (v1.1) */
 
function ds_post_tweet_count( $post_id ) {
 
  // Check for transient
  if ( ! ( $count = get_transient( 'ds_post_tweet_count' . $post_id ) ) ) {
 
    // Do API call
    $response = wp_remote_retrieve_body( wp_remote_get( 'https://cdn.api.twitter.com/1/urls/count.json?url=' . urlencode( get_permalink( $post_id ) ) ) );
 
    // If error in API call, stop and don't store transient
    if ( is_wp_error( $response ) )
      return 'error';
 
    // Decode JSON
    $json = json_decode( $response );
 
    // Set total count
    $count = absint( $json->count );
 
    // Set transient to expire every 30 minutes
    set_transient( 'ds_post_tweet_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
 
  }
 
 return absint( $count );
 
}  /** Twitter End */
 
 
/** Get like count from Facebook FQL  */
 
function ds_post_like_count( $post_id ) {
 
  // Check for transient
  if ( ! ( $count = get_transient( 'ds_post_like_count' . $post_id ) ) ) {
 
    // Setup query arguments based on post permalink
    $fql  = "SELECT url, ";
    //$fql .= "share_count, "; // total shares
    //$fql .= "like_count, "; // total likes
    //$fql .= "comment_count, "; // total comments
    $fql .= "total_count "; // summed total of shares, likes, and comments (fastest query)
    $fql .= "FROM link_stat WHERE url = '" . get_permalink( $post_id ) . "'";
 
    // Do API call
    $response = wp_remote_retrieve_body( wp_remote_get( 'https://api.facebook.com/method/fql.query?format=json&query=' . urlencode( $fql ) ) );
 
    // If error in API call, stop and don't store transient
    if ( is_wp_error( $response ) )
      return 'error';
 
    // Decode JSON
    $json = json_decode( $response );
 
    // Set total count
    $count = absint( $json[0]->total_count );
 
    // Set transient to expire every 30 minutes
    set_transient( 'ds_post_like_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
 
  }
 
 return absint( $count );
 
} /** Facebook End  */
 
 
/** Get share count from Google Plus */
 
function ds_post_plusone_count($post_id) {
 
	// Check for transient
	if ( ! ( $count = get_transient( 'ds_post_plus_count' . $post_id ) ) ) {
     
	    $args = array(
	            'method' => 'POST',
	            'headers' => array(
	                // setup content type to JSON 
	                'Content-Type' => 'application/json'
	            ),
	            // setup POST options to Google API
	            'body' => json_encode(array(
	                'method' => 'pos.plusones.get',
	                'id' => 'p',
	                'method' => 'pos.plusones.get',
	                'jsonrpc' => '2.0',
	                'key' => 'p',
	                'apiVersion' => 'v1',
	                'params' => array(
	                    'nolog'=>true,
	                    'id'=> get_permalink( $post_id ),
	                    'source'=>'widget',
	                    'userId'=>'@viewer',
	                    'groupId'=>'@self'
	                ) 
	             )),
	             // disable checking SSL sertificates               
	            'sslverify'=>false
	        );
	     
	    // retrieves JSON with HTTP POST method for current URL  
	    $json_string = wp_remote_post("https://clients6.google.com/rpc", $args);
	     
	    if (is_wp_error($json_string)){
	        // return zero if response is error                             
	        return "0";             
	    } else {        
	        $json = json_decode($json_string['body'], true);                    
	        // return count of Google +1 for requsted URL
	        $count = intval( $json['result']['metadata']['globalCounts']['count'] ); 
	    }
	    
	    // Set transient to expire every 30 minutes
		set_transient( 'ds_post_plus_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
	    
	}
 
	return absint( $count );    
} /** Google Plus End */
 
 
/** Get Flattr count */
 
function ds_post_flattr_count( $post_id ) {
 
  // Check for transient
  if ( ! ( $count = get_transient( 'ds_post_flattr_count' . $post_id ) ) ) {
 
    // Check if URL exists
    $response = wp_remote_retrieve_body( wp_remote_get( 'https://api.flattr.com/rest/v2/things/lookup/?url=' . urlencode( get_permalink( $post_id ) ) ) );
 
    // Decode JSON
    $json = json_decode( $response );
 
	// Get URL ID
	$message = $json->message;
	
	if ($message == "not_found") {
      return 0;
	}
	
	else {
		$location = $json->location;
		$flattrs = $json->flattrs;
		$count = $flattrs;
	}
	
	// Set transient to expire every 30 minutes
	set_transient( 'ds_post_flattr_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
 
  }
 
 return absint( $count );
 
} /** Flattr End */
 
 
/** Get Count from LinkedIn */
 
function ds_post_linkedin_count( $post_id ) {
 
  // Check for transient
  if ( ! ( $count = get_transient( 'ds_post_linkedin_count' . $post_id ) ) ) {
 
    // Do API call
    $response = wp_remote_retrieve_body( wp_remote_get( 'https://www.linkedin.com/countserv/count/share?url=' . urlencode( get_permalink( $post_id ) ) . '&format=json' ) );
 
    // If error in API call, stop and don't store transient
    if ( is_wp_error( $response ) )
      return 'error';
 
    // Decode JSON
    $json = json_decode( $response );
 
    // Set total count
    $count = absint( $json->count );
 
    // Set transient to expire every 30 minutes
    set_transient( 'ds_post_linkedin_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
 
  }
 
 return absint( $count );
 
}  /** LinkedIn End */
 
 
/** Markup for Social Media Icons */
 
function ds_social_media_icons() {
	
  // Get the post ID
  $post_id = get_the_ID(); ?>
 
  <div class="social-icons-wrap">
	<ul class="social-icons">
		<!-- Facebook Button-->
		<li class="social-icon facebook">
			<a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=877232259016943','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=877232259016943" target="blank"><i class="fa fa-facebook"></i> Share </a><span class="share-count"><?php echo ds_post_like_count( $post_id ); ?></span>
		</li>
		<!-- Twitter Button -->
		<li class="social-icon twitter">
			<a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;via=48JX7o1rc5uDEhiHIbKOlEL3c','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;via=48JX7o1rc5uDEhiHIbKOlEL3c" target="blank"><i class="fa fa-twitter"></i> Tweet </a><span class="share-count"><?php echo ds_post_tweet_count( $post_id ); ?></span>
		</li>
		<!-- Google + Button-->
		<li class="social-icon google-plus">
			<a onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php the_permalink(); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="blank"><i class="fa fa-google-plus"></i> Google+</a><span class="share-count"><?php echo ds_post_plusone_count( $post_id ); ?></span>
		</li>
		<!-- Flattr Button-->
		<li class="social-icon flattr">
			<a onclick="javascript:popupCenter('https://flattr.com/submit/auto?user_id=fg6mnPz8BGrC12Xplf9v3MWzB5Bah72X&url=<?php echo urlencode(get_permalink($post->ID)); ?>&title=<?php echo rawurlencode(strip_tags(get_the_title())) ?>&language=de_DE&&category=text','Support with Flattr', '680', '400');return false;" href="https://flattr.com/submit/auto?user_id=fg6mnPz8BGrC12Xplf9v3MWzB5Bah72X&url=<?php echo urlencode(get_permalink($post->ID)); ?>&title=<?php echo rawurlencode(strip_tags(get_the_title())) ?>&language=de_DE&&category=text" target="blank" rel="nofollow">Flattr</a><span class="share-count"><?php echo ds_post_flattr_count( $post_id ); ?></span>
		</li>
		<!-- LinkedIn Button -->
		<li class="social-icon linkedin">
			<a onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php site_url(); ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php site_url(); ?>" target="blank"><i class="fa fa-linkedin"></i> LinkedIn </a><span class="share-count"><?php echo ds_post_linkedin_count( $post_id ); ?></span>
		</li>

	</ul>
  </div><!--social-icons-wrap -->


<?php }
// Numbered Pagination
function bittersweet_pagination() {

global $wp_query;

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div><ul class="pagination pagination-material-deep-orange-400">';
        foreach ( $pages as $page ) {
        		if(is_page($page))
                echo "<li>$page</li>";
        }
       echo '</ul></div>';
        }
}

function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	<?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
	</div>
	<?php if ( $comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		<br />
	<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
		<?php
			/* translators: 1: date, 2: time */
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
		?>
	</div>

	<?php comment_text(); ?>

	<div class="reply">
	<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
}

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function mytheme_infinite_scroll_init() {
add_theme_support( 'infinite-scroll', array(
'container' => 'content',
'render' => 'mytheme_infinite_scroll_render',
'footer' => 'wrapper',
) );
}
add_action( 'init', 'mytheme_infinite_scroll_init' );

function mytheme_infinite_scroll_render() {
get_template_part( 'loop' );
}