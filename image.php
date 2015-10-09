<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="scripts/mainstyle.css" />
<style type="text/css">

.dispimage {
	position:relative;
	top:100px;
	width:1000px;
	height:600px;
	
	border:1px solid black;
	margin-left:auto;
	margin-right:auto;
}

</style>

</head>

<body>

<div id="bodysub" class="bodysub">
<div id="topheader" class="topheader">
<a href="https://www.facebook.com/iitrprphotographyclub" target="_blank"><img src="images/teampics/fbpng.png" style="position:absolute; height:48px; top:1px; left:50%; margin-left:-500px;" /></a>
<a href="https://plus.google.com/u/0/107694724552032319978/posts" target="_blank"><img src="images/teampics/gpluspng.png" style="position:absolute; height:48px; top:1px; left:50%; margin-left:-450px;" /></a>
<a href="https://twitter.com/ArturoIITrpr" target="_blank"><img src="images/teampics/twitterpng.png" style="position:absolute; height:48px; top:1px; left:50%; margin-left:-400px;" /></a>
<a href="index.php"><img src="images/teampics/1368938_422271917878278_510966392_n.jpg" height="50px" width="150px" style=" position:absolute; left:50%; margin-left:-75px;" /></a>



</div>
<?php 
if(isset($_GET['image'])){
$image = $_GET['image'];
} else {
	die("error");
}
?>
<img class="dispimage" src="<?php echo $image;?>" />

<img src="images/teampics/954392_422297051209098_1416116450_n.jpg" style="position:absolute; top:750px; left:0px;
width:100%;" />

</div>
</body>
</html>