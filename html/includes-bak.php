<?php
$root = "/";



$topnav = "
							<ul id=\"topnav\">
								<li>
									<span class=\"hoverarrow\">V</span><a href=\"".$root."physicians/index.php\">PHYSICIANS</a>
									<div class=\"posrelative\">
										<ul>							
											<li class=\"hovernavtop\"></li>
											<li><a href=\"".$root."physicians/orthopedic-oncology.php\">ORTHOPEDIC ONCOLOGY</a></li>
											<li><a href=\"".$root."physicians/innovations.php\">INNOVATIONS</a></li>
											<li><a href=\"".$root."physicians/buch.php\">RICHARD G. BUCH, M.D.</a></li>
											<li><a href=\"".$root."physicians/hakim.php\">VICTOR N. HAKIM, M.D.</a></li>
											<li><a href=\"".$root."physicians/physician-directory.php\">PHYSICIAN DIRECTORY</a></li>
											<li class=\"hovernavbottom\"></li>
										</ul>
									</div>
								</li>
								<li><a href=\"".$root."anesthesia/index.php\">ANESTHESIA</a> </li>
								<li><span class=\"hoverarrow\">V</span><a href=\"".$root."hip-procedures/index.php\">HIP PROCEDURES</a>
									<div class=\"posrelative\">
										<ul>							
											<li class=\"hovernavtop\"></li>
											<li><a href=\"".$root."hip-procedures/hip-arthroscopy.php\" class=\"first\">HIP ARTRHOSCOPY</a></li>
											<li><a href=\"".$root."hip-procedures/hip-revision.php\">HIP REVISION</a></li>
											<li><a href=\"".$root."hip-procedures/hip-resurfacing.php\">HIP RESURFACING</a></li>
											<li><a href=\"".$root."hip-procedures/hip-replacement.php\">HIP REPLACEMENT</a></li>
											<li><a href=\"".$root."hospital/joint-camp.php\">JOINT CAMP</a></li>
											<li class=\"hovernavbottom\"></li>
										</ul>
									</div>
								</li>
								<li><span class=\"hoverarrow\">V</span><a href=\"".$root."knee-procedures/index.php\">KNEE PROCEDURES</a>
								<div class=\"posrelative\">
										<ul>							
											<li class=\"hovernavtop\"></li>
											<li><a href=\"".$root."knee-procedures/knee-anthroscopy.php\" class=\"first\">KNEE ANTRHOSCOPY</a></li>
											<li><a href=\"".$root."knee-procedures/knee-revision.php\">KNEE REVISION</a></li>
											<li><a href=\"".$root."knee-procedures/partial-knee-replacement.php\">PARTIAL KNEE REPLACEMENT</a></li>
											<li><a href=\"".$root."knee-procedures/total-knee-replacement.php\">TOTAL KNEE REPLACEMENT</a></li>
											<li><a href=\"".$root."hospital/joint-camp.php\">JOINT CAMP</a></li>
											<li class=\"hovernavbottom\"></li>
										</ul>
									</div>
								</li>
								<li><span class=\"hoverarrow\">V</span><a href=\"".$root."shoulders-elbows/index.php\">SHOULDERS &amp; ELBOWS</a>
								<div class=\"posrelative\">
										<ul>							
											<li class=\"hovernavtop\"></li>
											<li><a href=\"".$root."shoulders-elbows/total-shoulder-joint-replacement.php\">TOTAL SHOULDER JOINT REPLACEMENT</a></li>
											<li><a href=\"".$root."shoulders-elbows/reverse-shoulder-joint-replacement.php\">REVERSE SHOULDER JOINT REPLACEMENT</a></li>
											<li><a href=\"".$root."hospital/joint-camp.php\">JOINT CAMP</a></li>
											<li class=\"hovernavbottom\"></li>
										</ul>
									</div>
								</li>
								<li><span class=\"hoverarrow\">V</span><a href=\"".$root."hospital/index.php\">HOSPITAL</a>
								<div class=\"posrelative\">
										<ul>							
											<li class=\"hovernavtop\"></li>
											<li><a href=\"".$root."hospital/mission-statement-history.php\" class=\"first\">MISSION STATEMENT &amp; HISTORY</a></li>
											<li><a href=\"".$root."hospital/accreditations-and-awards.php\">ACCREDITATIONS &AMP; AWARDS</a></li>
											<li><a href=\"http://www3.aaos.org/member/profcomp/provmuscserv.pdf\" target=\"_blank\">AAOS GUIDELINES</a></li>
											<li><a href=\"".$root."hospital/facility.php\">FACILITY</a></li>
											<li class=\"hovernavbottom\"></li>
										</ul>
									</div>
								</li>
							</ul>
";
$bottomnav = "
							<ul id=\"bottomnav\">
								<li><a href=\"".$root."physicians/index.php\">PHYSICIANS</a></li>
								<li><a href=\"".$root."anesthesia/index.php\">ANESTHESIA</a> </li>
								<li><a href=\"".$root."hip-procedures/index.php\">HIP PROCEDURES</a></li>
								<li><a href=\"".$root."knee-procedures/index.php\">KNEE PROCEDURES</a></li>
								<li><a href=\"".$root."shoulders-elbows/index.php\">SHOULDERS &amp; ELBOWS</a></li>
								<li><a href=\"".$root."hospital/index.php\">HOSPITAL</a></li>
							</ul>
";
$fixednav = "	<div id=\"fixednav\">
				<div class=\"fixnavbox\">
				
								
				<ul onmouseover=\"
				document.getElementById('fnitem1').style.display = 'block';
				document.getElementById('fnitem2').style.display = 'block';
				document.getElementById('fnitem3').style.display = 'block';
				document.getElementById('fnitem4').style.display = 'block';
				document.getElementById('fnitem5').style.display = 'block';\"
				onmouseout=\"
				document.getElementById('fnitem1').style.display = 'none';
				document.getElementById('fnitem2').style.display = 'none';
				document.getElementById('fnitem3').style.display = 'none';
				document.getElementById('fnitem4').style.display = 'none';
				document.getElementById('fnitem5').style.display = 'none';\">
				

				
				<li id=\"fnitem1\"><a href=\"http://womenslinkplano.com\" target=\"_blank\">WOMEN'SLINK</a></li>
				<li id=\"fnitem2\"><a href=\"http://www.breastcenterplano.com\" target=\"_blank\" >THE BREAST CENTER AT TMCP</a></li>
				<li id=\"fnitem3\"><a href=\"http://www.heartlinkplano.com\" target=\"_blank\" >HEARTLINK</a></li>
				<li id=\"fnitem5\"><a href=\"http://www.neurolinkplano.com\" target=\"_blank\" >NEUROLINK</a></li>
				<li id=\"fnitem4\"><a href=\"http://bariatriccenterplano.com\" target=\"_blank\" >THE BARIATRICS SURGERY INSTITUTE</a></li>
				<li><a href=\"http://www.themedicalcenterofplano.com\" target=\"_blank\" class=\"fnbase\">THE MEDICAL CENTER OF PLANO NETWORK <img src=\"".$root."images/arrowup.gif\" border=\"0\"></a>
				</li></ul></div></div>";
$scripts = "
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"".$root."fancybox/jquery.fancybox-1.3.1.pack.js\"></script>
<script type=\"text/javascript\" src=\"".$root."js/raphael-min.js\"></script>
<link rel=\"stylesheet\" href=\"".$root."fancybox/jquery.fancybox-1.3.1.css\" type=\"text/css\" media=\"screen\" />
<script>
$(document).ready(function() {

	
	$(\"a.iframe\").fancybox({
		'width': 1000,
		'height': 500,
		'overlayShow'	:	true,
		'title' : 	'<a href=\"javascript: newwindow();\" class=\"white\">Open in a New Window</a>',
		'hideOnContentClick': false,
		'allowfullscreen'	: true,
		


	});
		

	
});

function newwindow() {

url = document.getElementById('fancybox-frame').src;
window.open(url);

}
</script>

<script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script><script type=\"text/javascript\">stLight.options({publisher:'7c41674f-1c1a-49e0-aa16-ef3cc6b3fb2d',  onhover: false});</script>

<script type=\"text/javascript\" src=\"".$root."js/accordion.js\"></script>


";


$headerindex= "
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
		<html xmlns=\"http://www.w3.org/1999/xhtml\">
			<head>
			<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
			<title>The Medical Center of Plano | OrthoLink</title>
			<link href=\"".$root."styles/style.css\"  rel=\"stylesheet\" type=\"text/css\" />
			<link href=\"".$root."styles/homepage_banner.css\" type=\"text/css\" rel=\"stylesheet\" />
								<!--[if IE 7]>
						<link rel=\"stylesheet\" href=\"".$root."styles/ie.css\" type=\"text/css\" />
					<![endif]-->
			<!--[if gte IE 9]>
			  <style type=\"text/css\">
				.gradient {
				   filter: none;
				}
			  </style>
			<![endif]-->
			
  ".$scripts."
			</head>

		<body>
			<div id=\"container\">
			<div id=\"brighthomecontainer\">
				<div id=\"headcontainer\">
					<div id=\"headcontainerlight\">
						<div id=\"header\">
							<div id=\"headerlogo\" class=\"png\">The Medical Center of Plano | OrthoLink
							</div>
						</div>
					</div>
				</div>
				<div id=\"menu\">
					<div id=\"nav\">
					".$topnav."
					</div>
				</div>
				<div id=\"animation\">
					<div id=\"animationimage\">

						<div id='banner'>
    	
							<div class='overlay'></div>
							<ul id='bannerSlides'>
								<li class='bannerSlide visible'>
									<div class='background'>
										<img class='bgImg' src = 'images/testImg.jpg' />
									</div>
									<div class='foreground'>
										<img class='fgImg' src = 'images/blank.png' />
									</div>
									<div class='infoText invisible'>
										<p>
											This lady does yoga<br />
											She likes it a lot.
										</p>
										<a href=''>Find out more about yoga</a>
									</div>
					
									<div class='slideInfo'>
										<ul>
											<li class='originX'>736</li><!--x coordinate of beginning of line-->
											<li class='originY'>153</li><!--y coordinate of beginning of line-->
											<li class='turnX'>839</li><!--x coordinate of turning point of line-->
											<li class='turnY'>121</li><!--y coordinate of turning point of line-->
											<li class='destX'>1040</li><!--x coordinate of end of line-->
											<li class='destY'>121</li><!--y coordinate of end of line-->
											<li class='textTop'>50</li><!--y coordinate of top left corner of text-->
											<li class='textLeft'>1000</li><!--x coordinate of top left corner of text-->
											<li class='textWidth'>500</li>
											<li class='lineHeight'>28px</li>
											<li class='fontStyle'>normal</li><!--font style of text-->
											<li class='fontSize'>28</li><!--font size of text-->
											<li class='fontFamily'>Helvetica</li><!--font family of text-->
											<li class='rgbColor'>255,255,255</li><!-- color of text-->
										</ul>
									</div>
								</li> 
								<li class='bannerSlide invisible'>
									<div class='background'>
										<img class='bgImg' src = 'images/banner2.jpg' />
									</div>
									<div class='foreground'>
										<img class='fgImg' src = 'images/blank.png' />
									</div>
									<div class='infoText invisible'>
										<p> 
											We have really great Doctors!
										</p>
										<a href=''>Visit the Physician Directory</a>
									</div>
									
									<div class='slideInfo'>
										<ul>
											<li class='originX'>776</li>
											<li class='originY'>257</li>
											<li class='turnX'>876</li>
											<li class='turnY'>175</li>
											<li class='destX'>1076</li>
											<li class='destY'>175</li>
											<li class='textWidth'>500</li>
											<li class='lineHeight'>28px</li>
											<li class='textTop'>100</li>
											<li class='textLeft'>800>/li>
											<li class='fontSize'>28px</li>
											<li class='fontFamily'>Helvetica</li>
											<li class='rgbColor'>255,255,255</li>
										</ul>
									</div>
								</li> 
								<li class='bannerSlide invisible'>
									<div class='background'>
										<img class = 'bgImg' src = 'images/banner1.jpg' />
									</div>
									<div class='foreground'>
										<img class = 'fgImg' src = 'images/banner1FG.png' />
									</div>
									
									<div class='infoText invisible'>
										<p> 
											I really like Medical Center Plano. It's Great!
										</p>
										<a href=''>View More Testimonials</a>
									</div>
									
									<div class='slideInfo'>
										<ul>
											<li class='originX'>736</li> 
											<li class='originY'>153</li>
											<li class='turnX'>839</li>
											<li class='turnY'>121</li>
											<li class='destX'>1040</li>
											<li class='destY'>121</li>
											<li class='textTop'>50</li>
											<li class='textLeft'>1000</li>
											<li class='textWidth'>500</li>
											<li class='lineHeight'>28px</li>
											<li class='fontStyle'>normal</li>
											<li class='fontSize'>20</li>
											<li class='fontFamily'>Helvetica</li>
											<li class='rgbColor'>255,255,255</li>
										</ul>
									</div>
								</li> 
								<li class='bannerSlide invisible'>
									<div class='background'>
										<img class = 'bgImg' src = 'images/banner4.jpg' />
									</div>
									<div class='foreground'>
										<img class = 'fgImg' src = 'images/blank.png' />
									</div>
									
									
									<div class='slideInfo'>
										<ul>
											<li class='originX'>1090</li>
											<li class='originY'>144>/li>
											<li class='turnX'>988</li>
											<li class='turnY'>65</li>
											<li class='destX'>800</li>
											<li class='destY'>65</li>
											<li class='text'>This mountain has<br />a hole in it</li>
											<li class='textWidth'>500</li>
											<li class='lineHeight'>28px</li>
											<li class='textTop'>70</li>
											<li class='textLeft'>550</li>
											<li class='fontSize'>28px</li>
											<li class='fontFamily'>Helvetica</li>
											<li class='rgbColor'>255,255,255</li>
										</ul>
									</div>
								</li>
							</ul>
							<ul class='transSlides'><!--thumbnails for slides. each thumbnail should coordinate to the same slideIndex-->
								<li class='transitionSlide selected'>
									<img src='images/thumb1.jpg' />
								</li>
								<li class='transitionSlide'>
									<img src='images/thumb2.jpg' />
								</li>
								<li class='transitionSlide'>
									<img src='images/thumb3.jpg' />
								</li>
								<li class='transitionSlide'>
									<img src='images/thumb4.jpg' />
								</li>
							</ul>
						</div> 
				</div>
				<div id=\"newsletter\">
					<div id=\"newsletterinfo\">
						<h4>Newsletter Sign-up</h4>
						<form action=\"".$root."signup.php\" method=\"post\" id=\"subForm\">
<table><tr><td valign=\"top\"><input style=\"width: 150px;\" id=\"email\" name=\"email\" value=\"\"  type=\"text\"></td><td valign=\"top\"><input title=\"SIGN UP\" enableviewstate=\"true\" causesvalidation=\"true\" src=\"".$root."images/submitbutton.gif\" id=\"submit\" alt=\"submit\" class=\"submit\" type=\"image\"></td></tr></table> 
</form>
						
					
						<h4>Call for More Information</h4>
						<span  class=\"arrow_box\"></span>
						<h5>972.596.6800</h5>
						
						<div class=\"sharethis\"><p><span class=\"st_sharethis_custom\" displayText=\"\"></span> <a href=\"http://www.facebook.com/TheMedicalCenterOfPlano\" class=\"facebook_custom\" displayText=\"\" target=\"_blank\" ></a></p></div>
					</div>
				</div>
				<div id=\"callouts\">
					<div class=\"calloutbox gradient\">
						<div class=\"calloutjoint\">
							<h3>Hip Replacement</h3>
							<p>Permanent pain relief and improved mobility could be yours.<br /><a href=\"".$root."hip-procedures/hip-replacement.php\" class=\"arrow_box\">Learn More</a></p>
						</div>
					</div>
					<div class=\"calloutbox gradient\">
						<div class=\"calloutjogger\">
							<h3>Joint Camp</h3>
							<p>For patients facing or recovering from joint replacement.<br /><a href=\"".$root."hospital/joint-camp.php\" class=\"arrow_box\">Learn More</a></p>
						</div>
					</div>
					<div class=\"calloutbox gradient\">
						<div class=\"calloutmri\">
							<h3>Ortho Oncology</h3>
							<p>Focuses on tumors that affect bone and associated soft tissue.<br /><a href=\"".$root."physicians/orthopedic-oncology.php\" class=\"arrow_box\">Learn More</a></p>
						</div>
					</div>
					<div class=\"calloutbox gradient\">
						<div class=\"calloutdoctor\">
							<h3>Testimonials</h3>
							<p>Pain eliminated, mobility and independence regained.<br /><a href=\"".$root."hospital/testimonials.php\" class=\"arrow_box\">Learn More</a></p>
						</div>
					</div>
				</div>
";


$footer= "				
				<div id=\"footer\">
				<h2 id=\"mcoplogo\">The Medical Center of Plano</h2>
				".$bottomnav."
				<p class=\"copyright\">&copy; 2012 THE MEDICAL CENTER OF PLANO. ALL RIGHTS RESERVED.</p>
				</div>
				</div>
			</div>
					".$fixednav."
		</body>
		
		<script type=\"text/javascript\" src=\"".$root."js/homepage_banner.js\"></script>
		</html>";


$headerint= "
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
		<html xmlns=\"http://www.w3.org/1999/xhtml\">
			<head>
			<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
			<title>The Medical Center of Plano | OrthoLink</title>
			<link href=\"".$root."styles/style.css\"  rel=\"stylesheet\" type=\"text/css\" />
			<!--[if IE 7]>
						<link rel=\"stylesheet\" href=\"".$root."styles/ie.css\" type=\"text/css\" />
					<![endif]-->
			<!--[if gte IE 9]>
			  <style type=\"text/css\">
				.gradient {
				   filter: none;
				}
			  </style>
			<![endif]-->
    ".$scripts."
			</head>

		<body>
			
			<div id=\"brightintcontainer\">
				<div id=\"headcontainer\">
					<div id=\"headcontainerlight\">
						<div id=\"header\">
							<a href=\"".$root."\" id=\"headerlogo\" class=\"png\">The Medical Center of Plano | OrthoLink
							</a>
						</div>
					</div>
				</div>
				<div id=\"menu\">
					<div id=\"nav\">
					".$topnav."
					</div>
				</div>
				<div id=\"bannerbg\">
					<div id=\"bannerimg\">
					</div>
				</div>
				<div id=\"newsletter\">
					<div id=\"newsletterinfo\">
						<h4>Newsletter Sign-up</h4>
											<form action=\"".$root."signup.php\" method=\"post\" id=\"subForm\">
<table><tr><td valign=\"top\"><input style=\"width: 150px;\" id=\"email\" name=\"email\" value=\"\"  type=\"text\"></td><td valign=\"top\"><input title=\"SIGN UP\" enableviewstate=\"true\" causesvalidation=\"true\" src=\"".$root."images/submitbutton.gif\" id=\"submit\" alt=\"submit\" class=\"submit\" type=\"image\"></td></tr></table> 
</form>
						<h4>Call for More Information</h4>
						<span  class=\"arrow_box\"></span>
						<h5>972.596.6800</h5>
						<div class=\"sharethis\"><p><span class=\"st_sharethis_custom\" displayText=\"\"></span> <a href=\"http://www.facebook.com/TheMedicalCenterOfPlano\" class=\"facebook_custom\" displayText=\"\" target=\"_blank\" ></a></p></div>
					</div>
				</div>
				
				<div class=\"maincontent\">		
				
";

$calloutsright = "	<div id=\"calloutsright\">
					<div class=\"calloutbox gradient\">
					<div class=\"calloutdoctor\">
						<h3>Testimonials</h3>
						<p>Pain eliminated, mobility and independence regained.<br /> <a href=\"".$root."hospital/testimonials.php\" class=\"arrow_box\">Learn More</a></p>
					</div>
					</div>
					<div class=\"calloutbox gradient\">
					<div class=\"calloutmri\">
						<h3>Ortho Oncology</h3>
						<p>Focuses on tumors that affect bone and associated soft tissue.<br /> <a href=\"".$root."physicians/orthopedic-oncology.php\" class=\"arrow_box\">Learn More</a></p>
					</div>
					</div>
					<div class=\"calloutbox gradient\">
					<div class=\"calloutjoint\">
						<h3>Hip Replacement</h3>
						<p>Permanent pain relief and improved mobility could be yours.<br /> <a href=\"".$root."hip-procedures/hip-replacement.php\" class=\"arrow_box\">Learn More</a></p>
					</div>
					</div>
					<h3 class=\"orthologoright\"></h3>
					    	<p>OrthoLink is The Medical Center of Plano's comprehensive program for diagnosing and treating bone and joint disorders.</p>

        <hr />
        <h3>Latest Events</h3>
        <p>View upcoming classes and events at The Medical Center of Plano
<a href=\"http://www.themedicalcenterofplano.com/calendar\" target=\"_blank\" class=\"arrow_box\">Learn More</a></p>
				</div>
				
				";


$intfooter= "	</div>		
				<div id=\"footer\">
				<h2 id=\"mcoplogo\">The Medical Center of Plano</h2>
				".$bottomnav."
				<p class=\"copyright\">&copy; 2012 THE MEDICAL CENTER OF PLANO. ALL RIGHTS RESERVED.</p>
				</div>
			</div>
			".$fixednav."
		</body>
		</html>";
?>