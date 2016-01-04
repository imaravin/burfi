<?php get_header(); ?>
<style type="text/css">
.home .entry.excerpt p {
  color: #000;
  font-size: 16px;
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
</style>

<div class="container">
  <div class="inline">
    <?php while(have_posts()) : the_post(); ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" itemscope itemtype="http://schema.org/Article">
        <div class="jumbotron" itemprop="articleBody">

                    <?php
                    if(has_post_thumbnail())
                     $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                      ?>
                      <a href="<?php the_permalink(); ?>"><img src="<?php echo $url;?>" class="img img-center img-responsive" itemprop="image"></a> 
                       <h3 class="text-center" itemprop="headline"><a href="<?php the_permalink();?>"><?php the_title();?> </a></h3>

                      <?php $data= get_the_excerpt(); ?>
                        <div class="text-justify" itemprop="exampleOfWork">
            <?php echo $data; ?> 
        </div>   
                                    
                     
                        <ul class="list-inline">
<li><div class="fb-share-button" data-href="<?php the_permalink();?>" data-layout="button_count"></div> </li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink();?>" data-via="imaravin">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
                     </ul> 
                   
      </div>
    </div>
    <?php endwhile; ?>
  </div>
 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
  <ul class="pagination">
    <?php bittersweet_pagination(); ?>
</ul>  
</div>
</div>
<?php get_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=877232259016943";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>