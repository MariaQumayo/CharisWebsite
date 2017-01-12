<!DOCTYPE HTML>

<html>
	<head>
		<title>CFIC S.A</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link type="text/css" href= "style.css" rel="stylesheet"/>
		<link rel="shortcut icon" type="image/logo.jpg" href="images/logo.jpg" />
</head>

<?php
	include("headerMenu.html");
?>
<body>
<div class ="supperDiv"><br/>
	<div id="leftDiv">
		<br/>
			<img src="images/testimonies.jpg" class="cornered"/>
		<br/><br/>

	<h4>Share</h4>
	<br/>
	<p class="paragraphAligned"> Feel free to proclaim the Greatness of our God and share your Testimony with us.</p><br/>
	<p class="paragraphAligned"> If you are trusting God to move in any area of your life, please send us your prayer request so that we stand in Faith with you.</p>
	<br/>
	
	

<?php
	  $to = "info@charisfamilysa.co.za"; //defines who mail will be sent to
	  $subject = "Testimony or Prayer Request"; 
	  $email = $_REQUEST['EmailAddress'] ;
	  $message = $_REQUEST['testimony'] ; 
	  $headers = "From: $email"; 
	  
	  $sent = mail($to, $subject, $message, $headers) ; 
	  if($sent) {
		print " "; } 
	else 
		{
		print "We encounterd a problem sending your mail";
		}
?>

	
<div id="formDeco" style="margin-top:5px; margin-left:25px;">
		<form>
			<table align="left">
			<br/>
			<tr><td>Full Name:</td></tr>
			<tr><td><input type="text"  name="Name" required /> </td></tr>
			
			<tr><td>Email:</td></tr>
			<tr><td><input type="email"  name="EmailAddress"  required /> </td></tr>
			
			<tr><td>Share:</td></tr>
			<tr><td><textarea name="testimony" id="message" rows="6" cols="40" required></textarea> </td></tr>

			<tr>
			<td> <input type="submit" value="Submit" class="buttons" id="submit"/></td>
			</tr>
			</table>
		<form>
</div><!--end formDeco-->
<div style="height:50px; background-color:white;margin-top:280px;">



</div>

</div><!--end leftDiv-->


		<?php
			include("rightDiv.html");
		?>

		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		
		<?php
			include("map.html");
		?>
			<br/><br/><br/>
		<?php
			include("footer.html");
		?>
			<br/>
		</div><!--end super-->
		
    </body>
</html>