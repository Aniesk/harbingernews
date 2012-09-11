<!DOCTYPE html>
<html>

<head>

	<title>Clubs</title>
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="/css/all.css" type="text/css">
	
	<script src="/js/jquery-1.8.0.min.js"></script>
	<script src="/js/bootstrap.js" type="text/javascript"></script>
	<script src="/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		
	<script type="text/javascript">
			
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
			$('#nav_clubs').addClass('active');
		});
	
	</script>
	
	<style type="text/css">
	
		@media (max-width: 480px) {
			#page {
				padding-left: 0px !important;
				padding-right: 0px !important;
			}
		}
	
		.nav li a {
			color: #629b63;
			background: inherit;
		}
		
		.nav li {
			background: inherit;
		}
	
		.nav li :hover {
			background: #eeeeee !important;
			color: #416847;
		}
		
		.nav > .active > a {
			background: white !important;
		}
		
		.nav-collapse > .nav > .active > a {
			background: #629b63 !important;
		}
	
		#page {
			margin-top: 10px;
			background: white;
			margin-bottom: 10px;
			padding-top: 5px;
			padding-left: 10px;
			padding-right: 10px;
		}
				
		.accordion-heading {
			background: #ededed;
		}
		
		.row {
			padding-left: 10px;
		}
		
		.club-bottom {
			display: block;
			background: white;
			clear: both;
			border-top: 1px solid #efefef;
			padding-top: 5px;
			padding-bottom: 5px;
		}
		
		.image {
			
		}
		
		.description {
			font-size: 1.15em;
			display: block;
			margin-right: 30px;
		}
		
		.accordion-inner {
			background: white;
		}
		
		.accordion-group {
			margin-bottom: 10px;
		}
		
	</style>
	
</head>

<body>

	<div id="content">
	
		<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php') ?>
		
		<div id="page" class="container">
		
			<ul class="nav nav-tabs">
				<li class="active"><a href="#announcements" data-toggle="tab">Announcements</a></li>
				<li><a href="#arts" data-toggle="tab">Arts</a></li>
				<li><a href="#academic" data-toggle="tab">Academic</a></li>
				<li><a href="#cservice" data-toggle="tab">Community Service</a></li>
				<li><a href="#cultural" data-toggle="tab">Cultural</a></li>
				<li><a href="#science" data-toggle="tab">Science</a></li>
				<li><a href="#sservices" data-toggle="tab">Student Services</a></li>
			</ul>
			
			<div class="tab-content">
			
				<!-- !Announcements -->
				<div class="tab-pane active" id="announcements">
				
				
				</div><!-- end "announcements" -->
				
				<!-- !Art -->
				<div class="tab-pane" id="arts">
				
					<div class="accordion" id="art_accord">
					
						<!-- Art -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#art">Art</a>
							</div>
							<div id="art" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</div>
								</div>
							</div>
						</div>
						
						<!-- Harbinger -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#harbinger">Harbinger</a>
							</div>
							<div id="harbinger" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum.</div>
								</div>
							</div>
						</div>
						
						<!-- HTco -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#htco">HTco</a>
							</div>
							<div id="htco" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</div>
								</div>
							</div>
						</div>
						
						<!-- Jazz Band -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#jazz">Jazz Band</a>
							</div>
							<div id="jazz" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum.</div>
								</div>
							</div>
						</div>
						
						<!-- Music Appreciation -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#musicap">Music Appreciation</a>
							</div>
							<div id="musicap" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Etiam porta sem malesuada magna mollis euismod. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
								</div>
							</div>
						</div>
						
						<!-- Playfest -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#playfest">Playfest</a>
							</div>
							<div id="playfest" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
								</div>
							</div>
						</div>
						
						<!-- Zephyr -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#zephyr">Zephyr</a>
							</div>
							<div id="zephyr" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</div>
								</div>
							</div>
						</div>
						
					</div><!-- end "accordion" & "art_accord" -->
				</div><!-- end "arts" -->
				
				<!-- !Academic -->
				<div class="tab-pane" id="academic">
				
					<div class="accordion" id="ac_accord">
					
						<!-- Academic Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ac_accord" href="#academicclub">Academic Club</a>
							</div>
							<div id="academicclub" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
								</div>
							</div>
						</div>
						
						<!-- Future Educators -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ac_accord" href="#fedu">Future Educator's Club</a>
							</div>
							<div id="fedu" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Matheletes -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ac_accord" href="#matheletes">Mathelete's</a>
							</div>
							<div id="matheletes" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</div>
								</div>
							</div>
						</div>

					</div><!-- end "accordion" & "ac_accord" -->
				</div><!-- end "academic" & "tab pane" -->
				
				<!-- !Community Service -->
				<div class="tab-pane" id="cservice">
					<div class="accordion" id="cs_accord">
					
						<!-- Community Outreach -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#outreach">Community Outreach</a>
							</div>
							<div id="outreach" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Global Justice -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#gjustice">Global Justice</a>
							</div>
							<div id="gjustice" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Habitat -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#habitat">Habitat for Humanity</a>
							</div>
							<div id="habitat" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Interact -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#interact">Interact</a>
							</div>
							<div id="Interact" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- SHOC -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#shoc">SHOC</a>
							</div>
							<div id="shoc" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
					
					</div><!-- end "accordion" & "cs_accord"-->
				</div><!-- end "community service" & "tab-pane" -->
				
				<!-- !Cultural -->
				<div class="tab-pane" id="cultural">
					<div class="accordion" id="cult_accord">
						
						<!-- caribbean -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#caribbean">Caribbean Club</a>
							</div>
							<div id="caribbean" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- French Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#french">French Club</a>
							</div>
							<div id="french" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Italian Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#italian">Italian Club</a>
							</div>
							<div id="italian" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Multicultural Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#multicultural">Multi-Cultural Club</a>
							</div>
							<div id="multicultural" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Spanish Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#spanish">Spanish Club</a>
							</div>
							<div id="spanish" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
					
					</div><!-- end "accordion" & "cult_accord" -->
				</div><!-- end "cultural" & "tab-pane" -->
				
				<!-- !Science -->
				<div class="tab-pane" id="science">
					<div class="accordion" id="sci_accord">
					
						<!-- Environmental Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#sci_accord" href="#environmental">Environmental Club</a>
							</div>
							<div id="environmental" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Forensics Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#sci_accord" href="#forensics">Forensics Club</a>
							</div>
							<div id="forensics" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Science and Engineering -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#sci_accord" href="#engineering">Science and Engineering Club</a>
							</div>
							<div id="engineering" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Technology Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#sci_accord" href="#technology">Technology Club</a>
							</div>
							<div id="technology" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
					
					</div><!-- end "accordion" & "sci_accord" -->
				</div><!-- end "tab-pane" & "science" -->
				
				<!-- !Student Services -->
				<div class="tab-pane" id="sservices">
					<div class="accordion" id="ss_accord">
						
						<!-- Athletes Helping Athletes -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ss_accord" href="#athletes">Athletes Helping Athletes</a>
							</div>
							<div id="athletes" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Best Buddies -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ss_accord" href="#bbuddies">Best Buddies</a>
							</div>
							<div id="bbuddies" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- GSA -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ss_accord" href="#gsa">Gay/Straight Alliance</a>
							</div>
							<div id="gsa" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
					
					</div><!-- end "accordion" & "ss_accord"-->
				</div><!-- end "tab-pane" & "sservices"-->
				
			</div>
			</div><!-- end "tab-content" -->
			
			<div id="footer_spacer"></div>

	</div><!-- end "content" -->
			
	<div id="footer">
	
		<!--#include virtual="/footer.shtml" -->
		
		<div class="container">
			<div class="pull-right" style="margin-top: 20px;">
					This page was last updated by Alex LaFroscia on September 10, 2012.
			</div>
		</div>
	</div> <!-- end "footer" -->

</body>

</html>