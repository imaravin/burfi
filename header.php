<!DOCTYPE HTML>
<html>
<head>
<title><?php if(is_home()) { echo bloginfo("name"); echo "  "; echo bloginfo("description"); } else { echo wp_title("", false, right);  } ?></title>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
         <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
         <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
         <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/roboto.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/material-fullpalette.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/ripples.min.css" rel="stylesheet">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- burfi-top -->
        
        <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-54066327-7', 'auto');
              ga('send', 'pageview');
        </script>

<style type="text/css">
.img-center {margin:0 auto;}
</style>
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NSLTJV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NSLTJV');</script>
<!-- End Google Tag Manager -->
<div class="navbar navbar-fixed-top navbar-material-deep-orange-500">
  <div class="navbar-header" itemscope itemtype="http://schema.org/url" >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand active" itemscope itemtype="http://schema.org/url" href="<?php   if(strcmp("ta_TN",get_locale())!=0) echo "http://theburfi.com"; else echo "http://theburfi.com/ta";; ?>"><?php bloginfo('title'); ?></a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse" itemscope itemtype="http://schema.org/url">
     <ul class="nav navbar-nav navbar-right">
      <?php if(strcmp("ta_TN",get_locale())!=0)
      {
      echo '<li class="dropdown"><a href="http://theburfi.com"   data-target="#" class="dropdown-toggle" data-toggle="dropdown">English<b class="caret"></b></a>';
}
else
{
 echo '<li class="dropdown"><a href="http://theburfi.com/ta/"   data-target="#" class="dropdown-toggle" data-toggle="dropdown">தமிழ்<b class="caret"></b></a>';
}
?>
         <ul class="dropdown-menu">
          <?php if(strcmp("ta_TN",get_locale())!=0)
          {
            echo '<li><a itemprop="mainEntityOfPage" href="http://theburfi.com/ta/">தமிழ்</a></li>';
            echo '<li class="visible-lg"><a href="http://theburfi.com">English</a></li>';
        }
        else
        {
           echo '<li ><a href="http://theburfi.com">English</a></li>';
          echo '<li  class="visible-lg"><a itemprop="mainEntityOfPage" href="http://theburfi.com/ta/">தமிழ்</a></li>';
           
        } ?>
        </ul>
      </li> 
      <li><a href="#"> </a></li>    
    </ul>
     
       <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs hidden-md">
      <li><a itemprop="mainEntityOfPage" href="http://fb.me/theburfi"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-box.png"></a></li>
      <li><a itemprop="mainEntityOfPage" href="http://twitter.com/theburfi"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-box.png"></a></li>
      <li><a itemprop="mainEntityOfPage" href="https://plus.google.com/+Theburfiofficial/"><img src="<?php echo get_template_directory_uri(); ?>/img/google-plus-box.png"></a></li>
      <li><a  itemprop="mainEntityOfPage" href="http://theburfi.com/feed/rss"><img src="<?php echo get_template_directory_uri(); ?>/img/rss-box.png"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <?php 
       if(strcmp("ta_TN",get_locale())!=0)
      {
      echo  "<li><a itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/section/review/\">Reviews</a></li>";
      echo "<li><a itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/section/technology/\"  >Technology </a></li>"; 
      echo "<li><a  itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/section/entertainment/\">Entertainment</a></li>";
      echo "<li><a  itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/section/howto/\">How To</a></li>";
      echo "<li><a  itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/section/science/\">Science</a></li>";
      }
      else
      {
      echo  "<li><a itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/ta/section/விமர்சனங்கள்/\">விமர்சனங்கள்</a></li>";
      echo "<li><a itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/ta/section/தொழில்நுட்பம்/\"  >தொழில்நுட்பம்</a></li>";  
      echo "<li><a  itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/ta/section/பொழுதுபோக்கு/\">பொழுதுபோக்கு</a></li>";
      echo "<li><a  itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/ta/section/குறிப்புகள்/\">குறிப்புகள்</a></li>";
      echo "<li><a  itemprop=\"mainEntityOfPage\" href=\"http://theburfi.com/ta/section/அறிவியல்//\">அறிவியல்</a></li>";
      
      }
      ?>
    </ul>


  </div>
</div>
<h1><br></h1>
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
          <script  src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
          <script src="<?php echo get_template_directory_uri(); ?>/js/ripples.min.js"></script>
          <script src="<?php echo get_template_directory_uri(); ?>/js/material.min.js"></script>
          <script>
              $(document).ready(function() {
                  // This command is used to initialize some elements and make them work properly
                  $.material.init();
              });
</script>