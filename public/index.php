<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    "title" => "2015 Statesman Social Media Awards | Statesman.com",
    "description" => "The Austin American-Statesman is honoring the best in social media in Central Texas. Use our online nomination form to nominate your favorite person, company or group for a Statesman Social Media Award.",
    "thumbnail" => "http://projects.statesman.com/ssma/assets/share.jpg",
    "shortcut_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_5126cb2068bd43d1ab4e17660ac48255.ico",
    "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_fa2d2d6e73614535b997734c7e7d2287.png",
    "url" => "http://projects.statesman.com/ssma/",
    "twitter" => "statesman"
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="<?php print $meta['shortcut_icon']; ?>" />
  <link rel="apple-touch-icon" href="<?php print $meta['apple_touch_icon']; ?>" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
 

  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
        <img class="visible-xs visible-sm" width="103" height="26" src="assets/logo-short-black.png" />
        <img class="hidden-xs hidden-sm" width="273" height="26" src="assets/logo.png" />
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Home <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="nominate.php">Nominate</a></li> -->
        <li><a href="search.php">Search & Comment</a></li>
        <li><a href="rules.php">Rules</a></li>
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </div>
</nav>
<div id="back">

  <div class="container">
    <div class="row">
 

      <div class="col-lg-12 header">
      <h1 id="pagetitle">2015 Statesman Social Media Awards</h1>
      <p>The <strong>Statesman Social Media Awards</strong> is celebrating its 7th year honoring the best of social media in and around Austin!</p>
      <p>The bar for what makes a social media rockstar has been raised every year, and we are excited to judge this year's slate of nominees. <!-- see who gets nominated in 2015! Do you know someone who deserves to be recognized for their stellar use of social media? Whether in business or just for fun, we want to hear who YOU think is making a difference and living on the cutting edge of social media, so we can give them the recognition they deserve!--></p>

<!--      <div class="alert alert-danger" role="alert">Using 2014 data to show functionality. I'll clean out those tables for launch.</div> -->

      </div>
    </div>
    <div class="row">
       <div class="col-xs-12 col-sm-4">
       <h3>Our overal winner: Austin Convention and Visitor’s Bureau</h3>
       <p>Given Austin’s high profile, it doesn’t seem like a tough job to make the city look good on the Web. But the Austin Convention and Visitors Bureau team for <a href="http://www.austintexas.org/">Visit Austin</a>, led by Katie Cook, still puts out information – from gorgeously produced YouTube videos to highly relevant Tweets to maps to shopping deals – that are useful not only for visitors, but for locals as well. From the <a href="http://www.austintexas.org/austin-insider-blog/">Austin Insider Blog</a> to a sumptuous <a href="https://www.instagram.com/visitaustintx/">Instagram account</a> (check out their <a href="http://www.austintexas.org/austin-insider-blog/austin-instagram-walk/">Instagram Walks</a>), Austin rarely looks better than it does through the lens of Visit Austin’s expansive social media efforts. As one commenter on her nomination said, “Katie (Cook) gives way more than she gets – and is totally committed to the city and social media community. She is a breath of fresh air!” — Omar Gallaga</p>
        <h3><a href="http://tech.blog.austin360.com/2015/05/05/meet-the-2015-statesman-social-media-awards-top-10/">Meet the 2015 Top 10</a></h3>
        <p>We have picked from your nominees our Top 10 finalists who we think represent some of the best social media in and around Austin – and once again, each of the judges has found new users to follow. Our picks range from individuals who impressed us with their savvy, to big businesses finding new and interesting ways to connect with their customers, to social media accounts that are all about community building! <a href="http://tech.blog.austin360.com/2015/05/05/meet-the-2015-statesman-social-media-awards-top-10/">Read about the top 10 here</a>, as well as our reasons for shining a spotlight on them – then go check out their social media for yourself.</p>
        <h3>Search and comment</h3>
        <div>
          <div class="caspio" id="cbe76c0000d9c628e1315c4b3da34e"></div>
          <script type="text/javascript" src="http://b1.caspio.com/scripts/embed.js"></script>
          <script type="text/javascript">try{f_cbload(false, "b1.caspio.com", "e76c0000d9c628e1315c4b3da34e");}catch(v_e){;}</script>
          <div id="cxkg"><a href="http://b1.caspio.com/dp.asp?AppKey=e76c0000d9c628e1315c4b3da34e">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
        </div>
      </div>


      <div class="col-xs-12 col-sm-4">
        <h3>Nominations</h3>
        <div class="pull-right" style="margin-left:10px;"><img src="assets/appicon.jpg"></div>
            <p>Nominations have closed for the Statesman Social Media Awards, but you can still <a href="search.php">rate and comment on existing nominees</a>. </p>
            <!-- <p> Use our <a href="nominate.php">online nomination form</a> to nominate your favorite person, company or group for a Statesman Social Media Award, and tell us why they are a star on social media and the web – or <a href="search.php">comment on the nominees</a> that have already been made! We are accepting nominees from <strong>March 1 to April 6, 2015</strong>. We'll pick a top 10 and an overall winner, who will be featured in an article in the Austin American-Statesman.</p>
            <p>Note: We want to thank all of the people who have nominated so far! We have extended the nominations deadline to allow more time for people who were unable to nominate or gain steam for their nomination during Spring Break or South by Southwest.</p>
            <p>All of our past winners came from public nominations, and it's no different this year. However, we do ask that nominees reside in Bastrop, Blanco, Caldwell, Hays, Travis and Williamson counties. Past winners are eligible to be nominated again. Check out the 2014 <a href="http://www.statesman.com/news/lifestyles/rooster-teeth-wins-statesmans-top-social-media-hon/nd6Xf/">top winner</a> and <a href="http://www.statesman.com/news/lifestyles/allens-boots-homeaway-among-10-statesman-social-me/nd6Zz/">finalists</a>.</p> -->
        <h3>A look at the 2014 winners</h3> 
        <div class="embed-responsive embed-responsive-custom">
          <script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
          <object id="myExperience3965539662001" class="BrightcoveExperience embed-responsive-item">
            <param name="bgcolor" value="#FFFFFF" />
            <param name="width" value="300" />
            <param name="height" value="365" />
            <param name="playerID" value="52242462001" />
            <param name="playerKey" value="AQ~~,AAAAAFSNjfU~,4oPitrNpKqx5R7KUpPe0nXQVA_bwukUD" />
            <param name="isVid" value="true" />
            <param name="isUI" value="true" />
            <param name="dynamicStreaming" value="true" />
            <param name="@videoPlayer" value="3965539662001" />
            <param name="includeAPI" value="true" />
            <param name="templateLoadHandler" value="analytics.bcoveAddPlayer" />
            <param name="templateReadyHandler" value="analytics.bcovePlayerReady" />
          </object>
          <script type="text/javascript">brightcove.createExperiences();</script>
        </div>
        <h3>Judging</h3>
        <p>Judges for this year's awards will be Statesman social media editor <a href="https://twitter.com/jaxstone">Jackie Stone</a>, food writer <a href="https://twitter.com/broylesa">Addie Broyles</a>, tech culture writer <a href="https://twitter.com/omarg">Omar Gallaga</a> and Barbara Dunkleman from Rooster Teeth, our 2014 overall winner.</p>

      </div>

      <div class="col-xs-12 col-sm-4">
        <h3>Twitter</h3>
        <div id="twitterwidget">
        <a class="twitter-timeline" href="https://twitter.com/search?q=%23ssma" data-widget-id="302179477889351680">Tweets about "#ssma"</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><br>  
        </div>
        <!-- recent stories -->
        <div id="headlines">
                  
        <!-- feed -->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
        var RSS_feed = "http://www.statesman.com/flist/news/local/statesman-social-media-awards-coverage/fpC/rss/"
            google.load("feeds", "1");
            function initialize() {
              var feed = new google.feeds.Feed(RSS_feed);
            feed.setNumEntries(20);
              feed.load(function(result) {
                if (!result.error) {
                  var container = document.getElementById("feed");
                  for (var i = 0; i < result.feed.entries.length; i++) {
              var entry = result.feed.entries[i];
              var li = document.createElement("li");
              li.innerHTML = '<a href="' + entry.link + '">' + entry.title + '</a>';
              container.appendChild(li);
                  }
                }
              });
            }
            google.setOnLoadCallback(initialize);
        
        document.write("<h3>Recent SSMA coverage<\/h3>");
        document.write("<div id=\"medleycontent\">");
        document.write("  <ul id=\"feed\">");
        document.write("  <\/ul>");
        document.write("<\/div>");
        </script>
        <!-- end feed -->
        
     
        </div>
      </div>


    </div>
  </div>

    <!-- bottom matter -->
    <?php include "includes/banner-ad.inc";?>
    <?php include "includes/legal.inc";?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>
     

</div>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
