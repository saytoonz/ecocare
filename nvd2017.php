<!DOCTYPE html>
<html>
<head>
	<title>Ecocare</title>
	<link rel="icon" type="image/png" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/nvd2017.css">
</head>
<body>
	<!--------------       The Center-white Div         ------------>
<div id="container">
		
		<!--------------       The Nav Div         ------------>
		<div id="nav" style="position: none;">
			<a href="index.html">
				<img src="images/logo.png" height="90px" >
			</a>
			<div id="navLinks">
				<a href="index.html">Home</a>
				<a href="why.html">Why Ecocare?</a><div id="the_break"><br></div>
				<a href="gallery.php">Gallery</a>
				<a href="about.html">About Us</a>
				<a href="contact.php">Contact-Us</a>
			</div>
		</div>

		<!--------------       The Nav2 Div         ------------>
		<center>
		<div id="nav2">
			<a href="index.html">
				<img src="images/logo.png" height="50px" >
				<font> EcoCare </font>
			</a>
			<div id="navLinks">
				<a href="index.html">Home</a>
				<a href="why.html">Why Ecocare?</a><div id="the_break"><br></div>
				<a href="gallery.php">Gallery</a>
				<a href="about.html">About Us</a>
				<a href="contact.php">Contact-Us</a>
			</div>
		</div>
		</center>
		<hr style="margin: auto; color: #ccc;background-color: #ccc; width: 95%; height: 3px;">

	
			<div id="form">
					<?php
			if (isset($_REQUEST['poster'])) {
							echo "<a href='nvd2017.php'><input type=\"submit\" value='Back to form' ></a><br>
							<object width=\"100%\" height=\"700px\" data=\"ADs/WASTE REDUCTION EDUCATION.pdf\"></object><br>
							<a href='nvd2017.php'><input type=\"submit\" value='Back to form' ></a>";
				}else {
							echo "
				<p style=\"font-weight: bolder; text-align: center; font-size: 18px;\">
					INFORMATION FOR REGISTRATION OF VOLUNTEERS INTO THE ECOCARE-AEC FOUNDERS DAY INTIATIVIE
				</p>
				<p style=\"text-decoration: blink;\">Before you complete this form it is advisable to read our <a href=\"nvd2017.php?poster\">poster</a> or <a href=\"nvd2017.php?poster\">pdf document</a> on the Waste Reduction Education programme for some details.</p>
			

				<p class=\"divisions\">
					Personal Details
				</p>

				<p>
					First Name: <input type=\"text\" class=\"personal1\"></input>
					Other Name: <input type=\"text\" class=\"personal1\"></input>
				</p>

				<p>
					Age  : <input type=\"text\" class=\"personal1\"></input>
					Gender: <select class=\"personal1\">
								<option value=\"Male\" selected=\"selected\">Male</option>
								<option value=\"Female\">Female</option>
							</select>
				</p>
				<p>
					Email: <input type=\"email\" class=\"personal2\" ></input>
				</p>
				<p>
					Contact Numbers<br>
					Whatsapp: <input type=\"text\" class=\"personal1\"></input>
					Cell Phone: <input type=\"text\" class=\"personal1\"></input>
				</p>

				<p>
					In what community do you live? <input type=\"text\" class=\"personal2\"></input>
				</p>

					<br><br>
				<p class=\"divisions\">
					Project Details
				</p>

				<p>
					Would you volunteer with us or run your own activity?<br>
					<input type=\"radio\" name=\"volOrRun\" value=\"Volunteer\" checked=\"checked\"></input>Volunteer<br>
					<input type=\"radio\" name=\"volOrRun\" value=\"Run my own activity\"></input> Run my own activity
				</p>


				<p>
					If you chose volunteer, where would like to do volunteer?<br>
					<input type=\"radio\" name=\"Whereto\" value=\"Education kids to reduce waste generation\" checked=\"checked\"></input>Education kids to reduce waste generation<br>
					<input type=\"radio\" name=\"Whereto\" value=\"Help kids with Zero Waste Challenge\"></input>Help kids with Zero Waste Challenge<br>
					<input type=\"radio\" name=\"Whereto\" value=\"Help kids to make creative design and recycled products\"></input>Help kids to make creative design and recycled products
				</p>

				<p>
					If you chose run my own activity give a title to your activity:<br>
					<input type=\"text\" class=\"personal2\"></input>
				</p>

				<p>
					Briefly describe the nature of your activity:<br>
					<input type=\"text\" class=\"personal2\"></input>
				</p>


				<p>
					Give Venue, Date and Time:<br>
					<input type=\"text\" class=\"personal2\"></input>
				</p>

				<br>
					<center>
						<input type=\"submit\" value=\"Register Now!\" style=\"padding: 5px; color: white; font-size: 18px; background-color: #BD582C;\"></input>
					</center>
				<br>
				<p style=\"text-align: center; text-decoration: underline; font-family: Lucida Calligraphy;\">
					Thank You for your interest in partnering the EcoCare-AEC Founders Day Initiative
				</p>";
						}			?>
			</div>

		<br>
		<br>
	</div>


<!------------------           Footer            ------------------------>
		<div id="footer">

			<div id="quiskLinks">
				<center style="text-align: right;">
					<div class="footer_head">
						Quick Links
					</div>
					<a href="index.html">Home</a><br>
					<a href="why.html">Why Ecocare?</a><br>
					<a href="gallery.php">Gallery</a><br>
					<a href="about.html">About Us</a><br>
					<a href="contact.php">Contact Us</a>
				</center>
			</div>
			<div id="social">
				<center>
					<div class="footer_head">
						Social Media
					</div>
					<br>
					<a href="http://twitter.com/JACKSONNYARKO1" style="margin: 2px;"><img class="socialmedia" height="25px" width="25px" src="images/twitter.png"></a>
					<a href="http://www.facebook.com/themotivator5" style="margin: 2px;"><img class="socialmedia" height="25px" width="25px"  src="images/fb.png"></a>

					<a href="http://mailto:nyarkojackso@gmail.com" style="margin: 2px;"><img class="socialmedia" height="25px" width="25px"  src="images/gmail.png"></a>
					<br><br>
					Copyright &copy; 2017

					<div>
						<span style="font-size: 14px; font-family: Lucida Calligraphy; color: #ccc;">Powered by</span> <span style="font-size: 16px; font-family: Lucida Fax; color: #fff;"><a href="http://www.nsromapa.com" style="color: inherit; text-decoration: none;">NSROMAPA</a></span>
					</div>
				</center>
			</div>

	
			<div id="cInfo" style="width: 55%;">				
				<center style="text-align: left; padding-left: 10px; padding-right: 10px;">
					<div class="footer_head">
						Contact Info
					</div>
					P. O. Box GS 119<br>
					Goaso Brong Ahafo<br>
					Ghana West Africa<br>
					Tel: 0249005270 / 0201096181<br>
				</center>
			</div><br><br><br>
		</div>
</body>
</html>