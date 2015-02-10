<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    "title" => "2015 Statesman Social Media Awards | Statesman.com",
    "description" => "The Austin American-Statesman is honoring the best in social media in Central Texas. Use our online nomination form to nominate your favorite person, company or group for a Statesman Social Media Award.",
    "thumbnail" => "http://projects.statesman.com/then-and-now/paramount/assets/share.png", // needs update
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
          <img width="273" height="26" src="assets/logo.png">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="nominate.php">Nominate</a></li>
        <li><a href="search.php">Search & Comment</a></li>
        <li><a href="rules.php">Rules</a></li>
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
      <h1 id="pagetitle">Statesman Social Media Awards</h1>
      <p>Lucas ipsum dolor sit amet boba calrissian amidala sith dooku solo moff organa obi-wan windu. Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin. Lando skywalker lars fett calrissian lars organa. Organa kenobi wedge darth jawa skywalker anakin. Twi'lek kit darth calamari lando kamino droid. Darth jawa fett grievous maul. Palpatine obi-wan leia tusken raider dagobah. Twi'lek qui-gon boba antilles yoda thrawn. Wampa luuke wampa skywalker. Moff ponda ackbar dagobah kit lobot jinn solo.</p>
      <div class="alert alert-danger" role="alert">Using 2014 data to show functionality. I'll clean out those tables for launch.</div>
      </div>
    </div>
    <div class="row">
       <div class="col-xs-12 col-sm-4">
        <h3>Search and comment</h3>
        <div>
          <div class="caspio" id="cbe76c0000d9c628e1315c4b3da34e"></div>
          <script type="text/javascript" src="http://b1.caspio.com/scripts/embed.js"></script>
          <script type="text/javascript">try{f_cbload(false, "b1.caspio.com", "e76c0000d9c628e1315c4b3da34e");}catch(v_e){;}</script>
          <div id="cxkg"><a href="http://b1.caspio.com/dp.asp?AppKey=e76c0000d9c628e1315c4b3da34e">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
        </div>
        <h3>Judging</h3>
        <p>Lucas ipsum dolor sit amet coway reach jade yuvernian gank echani secura vella bertroff kal. Duros thistleborn annoo jabba leia stele calrissian. Coruscant winter cerean yuzzem. Gerb aruzan binks shadda massans gallia sing skywalker teek. Dexter bollux shmi malastare mirialan. Dexter mimbanite tc-14 coruscant dak sly hoojib lama dressellian. Aparo quinlan gunray tsavong maris. Durge lowbacca tyber gamorrean argazdan. Ken tavion shi'ido rattatak. Palpatine gen'dai sith omas. Skakoan sanyassan calamari hutt freedon skirata roonan dooku moff.</p>
      </div>


      <div class="col-xs-12 col-sm-4">
        <h3>Nominations</h3>
        <div class="pull-right" style="margin-left:10px;"><img src="assets/appicon.png"></div>
            <p> Use our <a href="nominate.php">online nomination form</a> to nominate your favorite person, company or group for a Statesman Social Media Award, and tell us why they are a star on social media and the web – or <a href="search.php">comment on the nominees</a> that have already been made! We are accepting nominees from <strong>XX to XX, 2015</strong>. We'll pick a top 10 and an overall winner, who will be featured in an article in the Austin American-Statesman.</p>
            <p>All of our past winners came from public nominations, and it's no different this year. However, we do ask that nominees reside in Bastrop, Blanco, Caldwell, Hays, Travis and Williamson counties. Past winners are eligible to be nominated again. Check out the 2014 <a href="http://www.statesman.com/news/lifestyles/rooster-teeth-wins-statesmans-top-social-media-hon/nd6Xf/">top winner</a> and <a href="http://www.statesman.com/news/lifestyles/allens-boots-homeaway-among-10-statesman-social-me/nd6Zz/">finalists</a>.</p>
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

    <?php /* Banner ad */ ?>
    <?php include "includes/banner-ad.inc";?>

    <p id="legal" class="center-block text-center"><small>© <?php echo date("Y"); ?> <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>


     

</div>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
