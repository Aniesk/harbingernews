<!DOCTYPE html>
<html>

<head>

	<title>The Harbinger Online</title>
	
	<!-- This is a test -->
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<link rel="stylesheet" href="/harbingernews/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/homepage.css" type="text/css">
	
	<script src="js/jquery-1.8.0.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/jquery.news_stories.js" type="text/javascript"></script>
	<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>

	<script type="text/javascript">
		
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
			// Set the Home tab to 'active'
			$('#nav_home').addClass('active');
		});
	</script>
	
	<?php
	$starttime = explode(' ', microtime());
	$starttime = $starttime[1] + $starttime[0];
	include_once('autoloader.php');
	include_once('idn/idna_convert.class.php');
	$feed = new SimplePie();
	$feed->set_feed_url('http://sites.google.com/site/harborfieldshs/home/posts.xml');
	$feed->enable_cache(false);
	$success = $feed->init();
	$feed->handle_content_type();
	$feed2 = new SimplePie();
	$feed2->set_feed_url('http://hfrecent.blogspot.com/feeds/posts/default');
	$feed2->enable_cache(false);
	$success2 = $feed2->init();
	$feed2->handle_content_type();
	$feed3 = new SimplePie();
	$feed3->set_feed_url('http://hfupcoming.blogspot.com/feeds/posts/default');
	$feed3->enable_cache(false);
	$success3 = $feed3->init();
	$feed3->handle_content_type();
	?>

	<!-- Google Analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-35687930-1']);
		_gaq.push(['_trackPageview']);
		(function() {
	    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	    })();
	</script>

</head>

<body>
	
	<div id="content">

		<?php include('tools/header.shtml') ?>
		
		<div class="container" id="stuff">
			<div class="row-fluid">
				<div class="offset6 span4">
					<p>Test</p>
		
				</div>
			</div>
		</div>
						
		<div id="footer_spacer"></div>
		
	</div><!-- end "content"-->
	
	<div id="footer">
	
		<?php include('tools/footer.shtml') ?>
		
		<div class="container">
			<div class="pull-right" style="margin-top: 20px;">
					This page was last updated by Alex LaFroscia on September 5, 2012.
			</div>
		</div>
		
	</div> <!-- end "footer" -->

</body>

</html>