<?php
	$conn = mysqli_connect("localhost" , "root" ,"");
	if(!$conn){
	 die("Could not connect" . mysqli_error());
	}

	$select_db = mysqli_select_db($conn , "ecocare");
	if(!$select_db){
	 die("database not selected");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ecocare</title>
	<link rel="icon" type="image/png" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
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


			<center>
				<div id="contactall">
						<?php 
							 if(isset($_REQUEST["error1"])){
							  echo"<span style=\"color: red;\"><i>Please fill all spaces</i></span>";

							}elseif(isset($_REQUEST["error2"])){
							  echo"<span style=\"color: red;\"><i>Please check your Internet connection and try again...</i></span>";

							}elseif(isset($_REQUEST["sentout"])){
							  ?>
							  	<script type="text/javascript">
							  		alert("Thanks for Contacting Us, We Will be in touch soon.");
							  	</script>
							  <?php
							}else{
								echo "<br>";
							}

						 ?>
					<form action="#" method="post" enctype="multipart/form-data">
						<input type="text" name="name" placeholder="Enter Your Full Name...."></input><br />
						<input type="email" name="mail" placeholder="Email: example@website.come"></input><br />
						<textarea name="message" cols="50" rows="18" placeholder="Message"></textarea>
							<br>
							<br>
						<input type="submit" name="send" value="Submit"></input>
					</form>
						<br>
						<br><br>
						<br>
				</div><br>

			</center>
<?php 
	if (isset($_POST['send'])) {
			$name=$_POST['name'];
			$email=$_POST['mail'];
			$text=$_POST['message'];
	  		$day = date("jS F, Y");

		
		if (!empty($name)&&!empty($email)&&!empty($text)) {

			$to='ecocareghltd@gmail.com';
			$subject='Contact_form is submitted';
			$message="$name 
					  $text";
			$header='From:'.$email;
		mysqli_query($conn, "INSERT INTO contacts VALUES ('','$name','$email','$text','$day')");
			if (@mail($to, $subject, $message,$header)) {
					?>
					<script>
						location.replace("contact.php?sent");
					</script>
					<?php

			} else {

					?>
				<script>
					location.replace("contact.php?error2");
				</script>
				<?php

			}
			


		}else{
				?>
				<script>
					location.replace("contact.php?error1");
				</script>
				<?php
		}
	}



 ?>

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