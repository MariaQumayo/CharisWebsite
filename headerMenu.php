
<!DOCTYPE HTML>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link type="text/css" href= "style.css" rel="stylesheet"/>
<link type="text/css" href="header/menu.css" rel="stylesheet" />
<script type="text/javascript" src="header/jquery.js"></script>
<script type="text/javascript" src="header/menu.js"></script>
<script type="text/javascript" src="header/script.js"></script>
<link rel="shortcut icon" type="image/logo.jpg" href="images/logo.jpg" />

<!--scroller-->
<script src="header/jquery-1.4.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="header/script.js"></script>
<link type="text/css" href= "header/styleFade.css" rel="stylesheet"/>

<style type="text/css">
* { margin:0;
    padding:0;
}
div#menu {
    top:0px;
    left:0px;
    width:100%;
background:transparent url(header/images/header_bg.gif) repeat-x 0 0;  
}
</style>

</head>

<body>

<div class ="supperDiv">
<div id="subDiv">
<img src="images/banner.jpg"/>
<div id="menu">
    <ul class="menu">
    <li><a href="index.php"><span>Home</span></a></li>
        <li><a href="#" class="parent"><span>About us</span></a>
            <div><ul>
	      <li><a href="mission.php"><span>Vision | Mission</span></a></li>
                <li><a href="statement.php"><span>Statement Of Faith</span></a></li>
                <li><a href="pastors.php"><span>Pastors</span></a></li>
		<li><a href="ministers.php"><span>Ministers</span></a></li>
            </ul></div>
        </li>
        <li><a href="departments.php" class="parent"><span>Ministries</span></a>
            <div><ul>
                <li><a href="departments.php#creative" ><span>Creative ministry</span></a></li>
                <li><a href="departments.php#media" ><span>IT and Media</span></a></li>
		<li><a href="departments.php#music" ><span>Music</span></a></li>
                <li><a href="departments.php#prayer" ><span>Prayer and Intercessory</span></a></li>
                <li><a href="departments.php#protocol" ><span>Protocol and Logistics</span></a></li>
                <li><a href="departments.php#sanctuary" ><span>Sanctuary care</span></a></li>
                <li><a href="departments.php#ushering" ><span>Ushering ministry</span></a></li>
            </ul></div>
        </li>
	<li><a href="#"><span>Services</span></a>
		<div><ul>
		 <li><a href="service.php#sundayService"><span>Sunday Worship service</span></a></li>
                <li><a href="service.php#cellGroups"><span>Cell groups and Bible study</span></a></li>	
	</ul></div>
	</li>
	  <li><a href="gallery.php"><span>Give</span></a></li>
	  <li class="last"><a href="Resources.php"><span> Share</span></a></li>
        <li class="last"><a href="contact1.php"><span>Downloads</span></a></li>
        <li class="last"><a href="contact1.php"><span>Contact us</span></a></li>
    </ul>
</div>



<?php
	include("slide.html");
?>

</div><!--end super div-->
</div><!--end subDiv-->

    </body>
</html>