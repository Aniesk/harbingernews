<!DOCTYPE html>
<html>

<head>

	<title>HF Sports</title>
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
	
	<link rel="stylesheet" href="/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css.css" type="text/css">
	<link rel="stylesheet" href="/css/all.css" type="text/css">
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/css/bootstrap-responsive.css" type="text/css">
	
	<script src="../js/jquery-1.8.0.min.js"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	<script src="../js/jquery.fancybox.pack.js" type="text/javascript"></script>
		
	<script type="text/javascript">
	
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
			$('#nav_sports').addClass('active');
		});
	
	</script>
	
</head>

<body>

	<div id="content">
	
		<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php') ?>
		
		<div id="grey_background">
		
			<div class="container">
			
			
				<div id="fallbox">
					<div class="row">
						<a href="football/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Football</div></a>
						<a href="cross_country/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Cross Country</div></a>
						<a href="boys_soccer/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Boys Soccer</div></a>
					</div><!-- end "row"-->
					<div class="row">
						<a href="girls_soccer/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Girls Soccer</div></a>
						<a href="field_hockey/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Field Hockey</div></a>
						<a href="volleyball/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Volleyball</div></a>
					</div><!-- end "row" -->
				</div><!-- end "fallbox" -->
				
				<div id="winterbox">
					<div class="row">
						<a href="girls_basketball/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Girls Basketball</div></a>
						<a href="boys_basketball/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Boys Basketball</div></a>
						<a href="wrestling/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Wrestling</div></a>
					</div><!-- end "row"-->
					<div class="row">
						<a href="winter_track/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Winter Track</div></a>
						<a href="bowling/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Bowling</div></a>
					</div><!-- end "row"-->
				</div><!-- end "winterbox" -->
				
				<div id="springbox" class="box">
					<div class="row">
						<a href="boys_lax/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Boys Lacrosse</div></a>
						<a href="girls_lax/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Girls Lacrosse</div></a>
						<a href="baseball/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Baseball</div></a>
					</div><!-- end "row"-->
					<div class="row">
						<a href="softball/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Softball</div></a>
						<a href="track/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Track & Field</div></a>
						<a href="golf/popup.html" class="fancy fancybox.iframe"><div class="sport span4">Golf</div></a>
					</div><!-- end "row"-->
				</div><!-- end "springbox" -->
				
				<p style="color: white;"><em>Note:</em> I know that these photos don't match their respective sports.  I know they're random.  Trust me.  I'll replace them with ones of our athletes as soon as I have them. Thanks.</p>


			</div>
			
		</div><!-- end "grey background" -->
		
		<div id="footer_spacer"></div>
	
	</div><!-- end "content" -->

	<div id="footer">
	
		<!--#include virtual="/footer.shtml" -->
		
		<div class="container" id="edited_by">
			<div class="span6 offset6">
				<span>Last edited by Alex LaFroscia on August 22, 2012.</span>
			</div>
		</div>

	</div><!-- end "footer" -->

</body>

</html>