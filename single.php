<?php get_header(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54066327-7', 'auto');
  ga('send', 'pageview');

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=877232259016943";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
		var popupCenter = function(url, title, w, h) {
        // Fixes dual-screen position                         Most browsers      Firefox
        var dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop !== undefined ? window.screenTop : screen.top;
 
        var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
 
        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 3) - (h / 3)) + dualScreenTop;
 
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
 
        // Puts focus on the newWindow
        if (window.focus) {
            newWindow.focus();
        }
    };
</script>
<style type="text/css">
/* General Social Button Styling */

.social-icons {
	height: 25px;
}

.social-icons li {
	list-style-type: none !important;
	float: left;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
	margin-left: 0 !important;
	font-size: 12px !important;
	font-weight: bold !important;
}

.social-icons li:last-child {
	margin-right: 0 !important;
}

/* Facebook Button Styling */
li.social-icon.facebook a {
	border-top: 1px solid #3b5998;
	border-left: 1px solid #3b5998;
	border-bottom: 1px solid #3b5998;
	padding: 3px 5px 3px 15px;
	-webkit-border-top-left-radius: 3px;
	border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-left-radius: 3px;
	color: #3b5998;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
	text-decoration: none;
}

li.social-icon.facebook a:hover {
	background-color: #3b5998;
	color: white;
}

li.social-icon.facebook span.share-count {
	border: 1px solid #3b5998;
	padding: 3px 10px;
	-webkit-border-top-right-radius: 3px;
	border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	border-bottom-right-radius: 3px;
	color: #3b5998;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
}

/* Twitter Button Styling */
li.social-icon.twitter a {
	border-top: 1px solid #55acee;
	border-left: 1px solid #55acee;
	border-bottom: 1px solid #55acee;
	padding: 3px 5px 3px 15px;
	-webkit-border-top-left-radius: 3px;
	border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-left-radius: 3px;
	color: #55acee;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
	text-decoration: none;
}

li.social-icon.twitter a:hover {
	background-color: #55acee;
	color: white;
}

li.social-icon.twitter span.share-count {
	border: 1px solid #55acee;
	padding: 3px 10px;
	-webkit-border-top-right-radius: 3px;
	border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	border-bottom-right-radius: 3px;
	color: #55acee;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
}

/* Google+ Button Styling */
li.social-icon.google-plus a {
	border-top: 1px solid #dd4b39;
	border-left: 1px solid #dd4b39;
	border-bottom: 1px solid #dd4b39;
	padding: 3px 5px 3px 15px;
	-webkit-border-top-left-radius: 3px;
	border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-left-radius: 3px;
	color: #dd4b39;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
	text-decoration: none;
}

li.social-icon.google-plus a:hover {
	background-color: #dd4b39;
	color: white;
}

li.social-icon.google-plus span.share-count {
	border: 1px solid #dd4b39;
	padding: 3px 10px;
	-webkit-border-top-right-radius: 3px;
	border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	border-bottom-right-radius: 3px;
	color: #dd4b39;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
}
a:link {
    text-decoration: none;
    color: #ff5757;
}

a:visited {
    text-decoration: none;
    color: #ff5757;
}

a:hover {
    text-decoration: none;
    color: #ff5757;
}

a:active {
    text-decoration: none;
    color: #ff5757;
}
#mytag a{
	 text-decoration: none;
	 color: #ffffff;
}

/* Flattr Button Styling */
li.social-icon.flattr a {
	border-top: 1px solid #338d11;
	border-left: 1px solid #338d11;
	border-bottom: 1px solid #338d11;
	padding: 3px 5px 3px 15px;
	-webkit-border-top-left-radius: 3px;
	border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-left-radius: 3px;
	color: #338d11;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
	text-decoration: none;
}

li.social-icon.flattr a:hover {
	background-color: #338d11;
	color: white;
}
 
li.social-icon.flattr span.share-count {
	border: 1px solid #338d11;
	padding: 3px 10px;
	-webkit-border-top-right-radius: 3px;
	border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	border-bottom-right-radius: 3px;
	color: #338d11;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
}

/* LinkedIn Button Styling */

li.social-icon.linkedin a {
	border-top: 1px solid #0976b4;
	border-left: 1px solid #0976b4;
	border-bottom: 1px solid #0976b4;
	padding: 3px 5px 3px 15px;
	-webkit-border-top-left-radius: 3px;
	border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-left-radius: 3px;
	color: #0976b4;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
	text-decoration: none;
}

li.social-icon.linkedin a:hover {
	background-color: #0976b4;
	color: white;
}
ul
{
    list-style-type: none;
}
li.social-icon.linkedin span.share-count {
	border: 1px solid #0976b4;
	padding: 3px 10px;
	-webkit-border-top-right-radius: 3px;
	border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	border-bottom-right-radius: 3px;
	color: #0976b4;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
}

.comment-form-author,
.comment-form-email,
.comment-form-url {
    width: 50%;
}
</style>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<div class="container"  itemscope itemtype="http://schema.org/Article">
	<br>
	<?php while(have_posts()) : the_post(); ?>
		<div class="col-lg-8">
			<div class="jumbotron" itemprop="articleBody">
			 
			<h3 itemprop="headline">
			 <?php the_title(); ?>
			</h3>
				
				  
		 
			<h4>Posted by <a itemprop="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> 
<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
<br>
</h4>
			<div class="sample shadow-z-0 block">
				<?php ds_social_media_icons(); ?>
				<br>
			</div>
			<div>
				<?php 
				 
					echo get_the_content();
				 ?>
				 <br>

			</div>

			
		<div>
			<br><br>
<h4>Topics</h4>
<?php 
$tags = wp_get_post_tags($post->ID);
foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
	$html = '<div class="btn btn-white btn-sm">';		
	$html .= "<a href='{$tag_link}'>";
	$html .= "{$tag->name}</a>";
	$html .= '</div>';
	echo $html;
	}

?>
			

<?php
$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_the_category(get_the_ID());
foreach ( $categories as $category ) {
	echo '<div itemprop="keywords" class="btn btn-white btn-sm"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></div>';
}
?>

				</div>
			</p>
			
			 <br>
			 <br>
			 <br>
			</div>

			<div class="jumbotron">
<?php 
    add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
    function bootstrap3_comment_form_fields( $fields ) {
        $commenter = wp_get_current_commenter();
        
        $req      = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
        
        $fields   =  array(
            'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                        '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
            'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                        '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
             );
        
        return $fields;
    }
        add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
    function bootstrap3_comment_form( $args ) {
        $args['comment_field'] = '<div class="form-group comment-form-comment">
                <label for="comment">' . _x( 'Comment', 'noun' ) . '</label> 
                <textarea class="form-control" id="comment" name="comment" cols="45" rows="1" aria-required="true"></textarea>
            </div>';
        $args['class_submit'] = 'btn btn-default btn-material-deep-orange-500 btn-sm'; // since WP 4.1
        
        return $args;
    }

      
    comment_form(array(
    	'label_submit'=>'Share',
    	'title_reply'=>'Share your view',
		'comment_notes_after' => ' ',
	));
?>
</div>

</div>


			 
		<div class="col-lg-4 ">
			<div class="jumbotron img-center">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- burfi-sidebar -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-2443157506899389"
					     data-ad-slot="3994126558"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
			</div>
			<div>

			</div>
			<div class="jumbotron visible-lg">
				<div class="btn btn-material-deep-orange-500  sample shadow-z-3 btn-block ">Recent Posts</div>
									<div class="jumbotron" itemscope itemtype="http://schema.org/Article">								
						    <?php $the_query = new WP_Query( 'showposts=5' ); ?>

						    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						   
						     <a href="<?php the_permalink() ?>"><div itemprop="headline" class="btn btn-material-deep-orange-500  sample shadow-z-3 btn-block" style="white-space:normal" ><?php the_title(); ?></div></a><br>
							 <?php $data= get_the_excerpt();
							 echo $data;
							 ?> 
						   
						    <?php endwhile;?>
						     
									</div>
		</div>
			 
			<div class="jumbotron  vertical-center">
			<div class="fb-page" data-href="https://www.facebook.com/theburfi" data-width="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/theburfi"><a href="https://www.facebook.com/theburfi">The Burfi</a></blockquote></div></div>
		 
			</div>
			<div class="jumbotron  vertical-center">
				                        <a class="twitter-timeline"  href="https://twitter.com/theburfi" data-widget-id="607779523304648704">Tweets by @theburfi</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
			</div>
			
		</div>

	<?php endwhile; ?>	  
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=877232259016943";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php get_footer(); ?>