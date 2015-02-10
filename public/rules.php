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
        <li><a href="./">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="nominate.php">Nominate</a></li>
        <li><a href="search.php">Search & Comment</a></li>
        <li class="active"><a href="rules.php">Rules</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </div>
</nav>
  <div class="container">
    <div class="row row-centered">
      <div class="col-lg-8 col-centered header">
      <h1 id="pagetitle">Statesman Social Media Awards</h1>
      <div class="alert alert-danger" role="alert">This are 2014 rules!</div>
      <h2>OFFICIAL AWARDS RULES</h2>
<p>1. NO PURCHASE REQUIRED. A PURCHASE WILL NOT INCREASE YOUR ODDS OF WINNING AN AWARD. ALL FEDERAL, STATE, LOCAL AND MUNICIPAL LAWS AND REGULATIONS APPLY. VOID WHERE PROHIBITED.</p>
<p>2. Eligibility. Subject to the additional restrictions below, the awards are open to Texas residents of Bastrop, Blanco, Caldwell, Hays, Travis and Williamson counties, 18 years or older at the time of entry. Employees of Cox Enterprises, Inc. and each of its respective affiliated companies, and advertising and promotional agencies, and the immediate family members of, and any persons domiciled with, any such employees, are not eligible for an award. The term "immediate family members" includes spouses, parents, grandparents, siblings, children, and grandchildren.</p>
<p>3. Nomination process. Nominations will be accepted beginning at <strong>12:00 p.m. (C.S.T.) on January 13, 2014</strong> and end at <strong>4:59 p.m. (C.S.T.) on February 14, 2014</strong>.</p>
<p>Nominations can be submitted by <a href="http://projects.statesman.com/ssma/nominate.php">filling out the form</a>. You can nominate any resident of Bastrop, Blanco, Caldwell, Hays, Travis or Williamson counties (including yourself) to be considered for an award. You can nominate more than one person, but nominating the same person more than once will not increase that person&rsquo;s chances of winning an award. There is no guarantee that the individual or individuals you nominate will be recognized in any way.</p>
<p>Sponsor will not be responsible for incomplete, lost, late, misdirected, illegible nominations, or for failure to receive nominations due to transmission failures or technical failures of any kind, including, without limitation, malfunctioning of any network, hardware or software, whether originating with sender or Sponsor. All nomination text becomes property of the sponsor. In the event of a dispute, all online nominations will be deemed to have been submitted by the owner of the email account from which they were sent. For these purposes, an email account holder shall mean the natural person assigned to such email account by the Internet access provider, online service provider or other organization responsible for assigning email addresses for the domain associated with such email account. Any questions regarding the number of entries submitted or the owner of an email account shall be determined by Sponsor in its sole discretion, and Sponsor reserves the right to disqualify any nominations by persons determined to be tampering with or abusing any aspect of the process.</p>
<p>4. Winner Selection. Ten (10) total winners will be selected by a panel of American-Statesman and guest judges. On or about <strong>Friday, January 13, 2014</strong>, the nominations will be posted on <a href="http://projects.statesman.com/ssma/search.php">the site</a>. At that time, readers will have a chance to comment on the nominations. The commenting period will run through <strong>Friday, February 14, 2014</strong>. Content of reader comments left on <a href="http://projects.statesman.com/ssma/search.php">nominees&rsquo; entries</a> will be taken into consideration by the judges.</p>
<p>The 10 award winners will be announced on or about <strong>February 26, 2014</strong> and will be posted online.</p>
<p>At an awards ceremony on or about <strong>Thursday, March 6, 2014,</strong> we will recognize the 10 winners and name an overall Social Media Award winner, based on our judges&rsquo; decision, with consideration given to the content of comments on <a href="http://projects.statesman.com/ssma/search.php">the site</a>.</p>
<p>5. Prizes and Odds. The 10 award winners will each receive an electronic badge for his or her blog or Web site and an award statuette. Grand Prize: One (1) Grand Prize ("Overall Statesman Social Media Award Winner") will receive everything the other nine win, plus a larger statuette and a reprint of the Life section featuring a story on the award winner. Odds of winning an award depend on the number of eligible entries nominated.</p>
<p>6. Winner Notification and Acceptance. Award winners will be notified by telephone or by email within three (3) business days of announcement by our judges, which will be on or about <strong>February 26, 2014</strong>. Grand Prize ("Overall Statesman Social Media Award Winner") winner will be notified in person at the awards ceremony on or about <strong>March 6, 2014</strong>. If the person is not in attendance, that person will be notified by e-mail or telephone within three (3) business days. Failure to reach winner within five (5) business days of first notification may result in disqualification of winner, forfeiture of his or her interest in all prizes, and selection of a substitute winner from among all remaining eligible entries. Return of prize notification as undeliverable may result in disqualification and an alternate winner may be selected. Winners may waive their right to receive prizes. Prizes are nonassignable and nontransferable. No substitutions allowed by winner. Prizes and individual components of prize packages are subject to availability and Sponsor reserves the right to substitute prizes of equal or greater value. Winners are solely responsible for reporting and payment of any taxes on prizes.</p>
<p>7. Participation. By participating, entrants agree to be bound by these Official Rules and the decisions of the awards judges. Sponsor reserves the right to disqualify persons found tampering with or otherwise abusing any aspect of this awards process as solely determined by Sponsor. In the event the awards are compromised by a virus, non-authorized human intervention, tampering or other causes beyond the reasonable control of Sponsor which corrupts or impairs the administration, security, fairness or proper operation of the awards, Sponsor reserves the right in its sole discretion to suspend, modify or terminate the awards. Should the awards be terminated prior to the stated expiration date, Sponsor reserves the right to award prizes based on the entries received before the termination date.</p>
<p>8. Construction. The invalidity or unenforceability of any provision of these rules shall not affect the validity or enforceability of any other provision. In the event that any such provision is determined to be invalid or otherwise unenforceable, these rules shall be construed in accordance with their terms as if the invalid or unenforceable provision was not contained therein.</p>
<p>9. Sponsor. The awards are sponsored by The Austin American-Statesman. The decisions of Sponsor and awards judges regarding the selection of winners and all other aspects of the awards shall be final and binding in all respects. Sponsor will not be responsible for typographical, printing or other inadvertent errors in these Official Rules or in other materials relating to the awards.</p>
      </div>
    </div>



  </div> <!-- container end -->

    <?php /* Banner ad */ ?>
    <?php include "includes/banner-ad.inc";?>

    <p id="legal" class="center-block text-center"><small>© <?php echo date("Y"); ?> <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>


  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
