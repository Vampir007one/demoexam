<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIDEO'S</title>
<!-- // Stylesheets // -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<!-- // Javascript // -->
</head>
<body>
	<div id="wrapper_sec">
    	<!--Masterhead -->
        <?php include("block/header.php")?>
    <!--Content Sec -->
        <div id="content_sec">
        	<!--Main Section-->
            <?php include("block/main.php")?>
            <!--Right Section-->
            <?php include("block/auth.php");?>
		<!-- movie ads-->
        <div class="movie_ads"><a href="#"><img src="images/movie_ad.gif"  alt="" /></a></div>
    </div> 
 <div class="clear"></div>
</div>
<!-- bottom section-->
<?php include("block/footer.php")?>
</body>
</html>
