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
			<img src="images/contactUs.jpg" class="cornered"/>
		<br/><br/>
<?php 
	  $to = "info@charisfamilysa.co.za"; //defines who mail will be sent to
	  $subject = "Contact Us"; 
	  $email = $_REQUEST['EmailAddress'] ;
	   $name = $_REQUEST['Name'] ;
	  $message = $_REQUEST['message'] ; 
	  $headers = "From: $Name"; 
	  
	  $sent = mail($to, $subject, $message, $headers) ; 
	  if($sent) 
		{print " "; } 
	else 
		{
		print "We encounterd a problem sending your mail";
		}
?>

<h4>Physical Address</h4>

<p class="paragraphAligned">
		311 Lynnwood Road<br/>
		Corner Lynnwood & Ox Street<br/>
		Menlo Park, Pretoria<br/>
		South Africa<br/></p>
		<br/>
	
	<h4>Postal Address</h4>

<p class="paragraphAligned">
		PO BOX 29882<br/>
		Sunnyside<br/>
		0132<br/>
		Pretoria<br/>
		South Africa<br/>
	</p>
<br/>
	
	
<p class="paragraphAligned">

(T): +27 12 7705 615  <br/> <br/>

Email: <b>info@charisfamilysa.co.za </b><br/><br/>
</p> 

<div id="formDeco">
		<form>
			<table align="left">
			<br/>
			<tr><td>Full Name:</td></tr>
			<tr><td><input type="text"  name="Name" required /> </td></tr>
			
			<tr><td>Email:</td></tr>
			<tr><td><input type="email"  name="EmailAddress"  required /> </td></tr>
			
			<tr><td>Message:</td></tr>
			<tr><td><textarea name="message" id="message" rows="6" cols="40" required></textarea> </td></tr>

			<tr>
			<td> <input type="submit" value="Submit" class="buttons" id="submit"/></td>
			</tr>
			</table><br/>
			
		<form>

</div>


<h4>Map</h4>
<div style="margin-left: 20px;">
<img src="images/map3.jpg" class="cornered"/>
</div>
<br/><br/>

</div><!--end leftDiv-->

		<?php
			include("rightDiv.html");
		?>

		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/>
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