<!DOCTYPE html>
<html>
<head>
	<title>Ecocare</title>
	<link rel="icon" type="image/png" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
	<!--------------       The Center-white Div         ------------>
	<div id="container">
		
		<!--------------       The Nav Div         ------------>
		<div id="nav">
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

		<br>

	<div id="galleryall">

		<?php 

			if (isset($_REQUEST["Felix"])) {
				$files = glob("gallery/Felix/*.*");
				foreach ($files as $key => $value) {
					echo "<span style=\"padding: 5px;\">
									<img class=\"img\" src='$value' height='220px' style=\"border: 5px solid #ccc; cursor: pointer;\">
								</span>

								";
				}

					echo "<br><button onclick=\"location.replace('gallery.php');\">Back</button><br><br>";
			}


			elseif (isset($_REQUEST["DIY_Plastic"])) {
				if ($handle = opendir("gallery/DIY_Plastic")) {
					while (false !== ($file = readdir($handle))) {
						$file = "gallery/DIY_Plastic/$file";
						if (strpos($file, ".jpg")) {
							echo "<span style=\"padding: 5px;\">
									<img class=\"img\" src='$file' height='220px' style=\"border: 5px solid #ccc; cursor: pointer;\">
								</span>";

						}else{}
					}
					closedir($handle);
				} 
					echo "<br><button onclick=\"location.replace('gallery.php');\">Back</button><br><br>";
			}


			elseif (isset($_REQUEST["DIY_Paper"])) {
				if ($handle = opendir("gallery/DIY_Paper")) {
					while (false !== ($file = readdir($handle))) {
						$file = "gallery/DIY_Paper/$file";
						if (strpos($file, ".jpg")) {
							echo "<span style=\"padding: 5px;\">
									<img class=\"img\" src='$file' height='220px' style=\"border: 5px solid #ccc; cursor: pointer;\">
								</span>";

						}else{}
					}
					closedir($handle);
				} 
					echo "<br><button onclick=\"location.replace('gallery.php');\">Back</button><br><br>";
			}


			else{
				echo "
					<div id=\"album3\" onmouseenter=\"album3img()\" onmouseleave=\"album3name()\" onclick=\"location.replace('gallery.php?Felix')\">
					<div id=\"album3img\" style=\"display: none;\">
						<img src=\"images/Felix-and-Jackson-attend-Seed-Sarter---March-2016.gif\" height=\"220px\" width=\"100%\">
					</div>
					<div id=\"album3name\">
						<img src=\"images/Felix-and-Jackson-attend-Seed-Sarter---March-2016.jpg\" height=\"220px\" width=\"100%\">
					</div>
				</div>



				<div id=\"album2\" onmouseenter=\"album2img()\" onmouseleave=\"album2name()\" onclick=\"location.replace('gallery.php?DIY_Paper');\">
					<div id=\"album2img\" style=\"display: none;\">
						<img src=\"images/DIY-Recycle-Options-for-Paper-waste.gif\" height=\"220px\" width=\"100%\">
					</div>
					<div id=\"album2name\">
						<img src=\"images/DIY-Recycle-Options-for-Paper-waste.jpg\" height=\"220px\" width=\"100%\">
					</div>
				</div>



				<div id=\"album1\" onmouseenter=\"album1img()\" onmouseleave=\"album1name()\" onclick=\"location.replace('gallery.php?DIY_Plastic');\">
					<div id=\"album1img\" style=\"display: none;\">
						<img src=\"images/DIY-Plastic-Waste-Reuse-Options.gif\" height=\"220px\" width=\"100%\">
					</div>
					<div id=\"album1name\">
						<img src=\"images/DIY-Plastic-Waste-Reuse-Options.jpg\" height=\"220px\" width=\"100%\">
					</div>
				</div>

		";
			}





		?>

	</div>


	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
    $('body').append('<div class="image-overlay" id="image-overlay"><span class="image-overlay-close">x</span><img src="" /></div>');
    var Image = $('.img');
    var Overlay = $('.image-overlay');
    var OverlayImage = $('.image-overlay img');

    Image.click(function () {
        var ImageSource = $(this).attr('src');

        OverlayImage.attr('src', ImageSource);
        Overlay.fadeIn(100);
        $('body').css('overflow', 'hidden');

        $('.image-overlay-close').click(function () {
            Overlay.fadeOut(100);
            $('body').css('overflow', 'auto');
        });
    });






    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','js/google-analytics.js','ga');

  ga('create', 'UA-73371388-2', 'auto');
  ga('send', 'pageview');

	var undisplay = document.getElementById('image-overlay');

	window.onclick = function(event) {
    if (event.target == undisplay) {
        undisplay.style.display = "none";
        $('body').css('overflow', 'auto');
    }
}
</script>




<script type="text/javascript">
	function album1name() {
		document.getElementById('album1name').style.display="block";
		document.getElementById('album1img').style.display="none";
	}
	function album1img() {
		document.getElementById('album1name').style.display="none";
		document.getElementById('album1img').style.display="block";	}


	


	function album2name() {
		document.getElementById('album2name').style.display="block";
		document.getElementById('album2img').style.display="none";
	}
	function album2img() {
		document.getElementById('album2name').style.display="none";
		document.getElementById('album2img').style.display="block";	}




	function album3name() {
		document.getElementById('album3name').style.display="block";
		document.getElementById('album3img').style.display="none";
	}
	function album3img() {
		document.getElementById('album3name').style.display="none";
		document.getElementById('album3img').style.display="block";	}
</script>

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