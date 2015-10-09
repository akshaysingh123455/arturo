<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="scripts/mainstyle.css" />
<?php
$cur_page=isset($_GET['page']) ? $_GET['page'] :1;
$dbc= mysqli_connect('localhost','aaryan','nonepass','arturo') OR die("con error");
 $queryall= "SELECT * FROM album ORDER BY adddate DESC";
 $resultdata=mysqli_query($dbc,$queryall) OR die('errorinpage');                    // for pagination......
	$totalnoresults=mysqli_num_rows($resultdata);
	$resultperpage=1;
	$num_pages=ceil($totalnoresults/$resultperpage);
$skip=(($cur_page-1) * $resultperpage);
$querypage=$queryall." LIMIT $skip,$resultperpage";
$resultforpage= mysqli_query($dbc,$querypage) OR die('kuuu');
while($row1=mysqli_fetch_array($resultforpage)) {
	$albumname= $row1['name'];
}
?>
<link rel="stylesheet" type="text/css" href="/scripts/engine1/style.css" />
	<script type="text/javascript" src="scripts/engine1/jquery.js"></script>

</head>


<body>

<div id="bodysub" class="bodysub">
<div id="topheader" class="topheader">
<a href="https://www.facebook.com/iitrprphotographyclub" target="_blank"><img src="images/teampics/fbpng.png" style="position:absolute; height:48px; top:1px; left:50%; margin-left:-500px;" /></a>
<a href="https://plus.google.com/u/0/107694724552032319978/posts" target="_blank"><img src="images/teampics/gpluspng.png" style="position:absolute; height:48px; top:1px; left:50%; margin-left:-450px;" /></a>
<a href="https://twitter.com/ArturoIITrpr" target="_blank"><img src="images/teampics/twitterpng.png" style="position:absolute; height:48px; top:1px; left:50%; margin-left:-400px;" /></a>
<a href="index.php"><img src="images/teampics/1368938_422271917878278_510966392_n.jpg" height="50px" width="150px" style=" position:absolute; left:50%; margin-left:-75px;" /></a>


</div>
<img src="images/teampics/logo.png" width="200px" height="200px" style="position:absolute; top:75px; left:0px; z-index:5;" />
<img src="images/teampics/nav.jpg" style="width:950px; height:100px; position:absolute; top:125px; right:0px;" />
<nav >
<ul>
<li id="list1" class="list"><a href="index.php">Home</a></li>
<li id="list2" class="list"><a href="#">Official Pages</a>
        
<li id="list3" class="list"><a href="events.php">Events</a></li>
<li id="list4" class="list"><a href="#">Competitions</a></li>
<li id="list5" class="list"><a href="aboutus.php">About Us</a></li>
<li id="list6" class="list6"><a href="contactus.php">Contact Us</a></li>

</ul>

</nav>
<div id="iitpicsdiv" class="iitpicsdiv">
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="scripts/data1/images/dsc_0531.jpg" alt="Insti Building" title="Insti Building" id="wows1_0"/></li>
<li><img src="scripts/data1/images/dsc_0538.jpg" alt="Mercury House" title="Mercury House" id="wows1_1"/></li>
<li><img src="scripts/data1/images/dsc_0554.jpg" alt="Tennis Court" title="Tennis Court" id="wows1_2"/></li>
<li><img src="scripts/data1/images/dsc_0556.jpg" alt="Basket Ball Court" title="Basket Ball Court" id="wows1_3"/></li>
<li><img src="scripts/data1/images/dsc_0566.jpg" alt="Library" title="Library" id="wows1_4"/></li>
<li><img src="scripts/data1/images/img_0237.jpg" alt="Cricket Ground" title="Cricket Ground" id="wows1_5"/></li>
<li><img src="scripts/data1/images/img_0270.jpg" alt="path" title="path" id="wows1_6"/></li>
<li><img src="scripts/data1/images/img_0326.jpg" alt="IIT Ropar" title="IIT Ropar" id="wows1_7"/></li>
<li><img src="scripts/data1/images/img_1677.jpg" alt="Football Ground" title="Football Court" id="wows1_8"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="Insti Building"><img src="scripts/data1/tooltips/dsc_0531.jpg" alt="Insti Building"/>1</a>
<a href="#" title="Mercury House"><img src="scripts/data1/tooltips/dsc_0538.jpg" alt="Mercury House"/>2</a>
<a href="#" title="Tennis Court"><img src="scripts/data1/tooltips/dsc_0554.jpg" alt="Tennis Court"/>3</a>
<a href="#" title="Basket Ball Court"><img src="scripts/data1/tooltips/dsc_0556.jpg" alt="Basket Ball Court"/>4</a>
<a href="#" title="Library"><img src="scripts/data1/tooltips/dsc_0566.jpg" alt="Library"/>5</a>
<a href="#" title="Cricket Ground"><img src="scripts/data1/tooltips/img_0237.jpg" alt="Cricket Ground"/>6</a>
<a href="#" title="path"><img src="scripts/data1/tooltips/img_0270.jpg" alt="path"/>7</a>
<a href="#" title="IIT Ropar"><img src="scripts/data1/tooltips/img_0326.jpg" alt="IIT Ropar"/>8</a>
<a href="#" title="Football Court"><img src="scripts/data1/tooltips/img_1677.jpg" alt="Football Court"/>9</a>
</div></div>

	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="scripts/engine1/wowslider.js"></script>
	<script type="text/javascript" src="scripts/engine1/script.js"></script>
</div>


<div id="writeup" class="writeup">
<h2 style=" color:#333; text-align:center; font-weight:bold; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;" >ARTURO :: IIT Ropar Photography Club</h2>
<p style="margin:10px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:18px; color:#333;">Arturo is the photography club of Indian Institiute of Technology , Ropar . It has been the first most successful photography club of the institute , the result of the consistent efforts of the core members . Overwhelming response from the junta has been a major factor behind the formation and the successful continuation of the club. It is a club where we have regular activities  , contestes , lots of excitig prizes to be won and most importantly fun with photo-learning.
</p>
<p style="margin:10px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:18px; color:#333;">Hub of photography lovers.... A club dedicated to learning, teaching, practicing, and exhibiting the art of photography.
Our goal is to create a dedicated community of photography enthusiasts, teach you more about your camera and the techniques of taking better pictures, and the most importantly have a lot of fun.</p>
</div>





<div  id="album" class="album">
<?php  
	$i=1;
	$linkarray= array();
	$idimage=array();
	$dbc= mysqli_connect('localhost','aaryan','nonepass','arturo') OR die("con error");
    $queryimage="SELECT * FROM images WHERE album='".$albumname."'";
	
	$imageresult=mysqli_query($dbc,$queryimage) OR die("erron in querying");
	
	while($row= mysqli_fetch_array($imageresult)) {
		$linkarray[$i]=$row['image_link'];
		$thumb[$i]=$row['thumb_link'];
		$i=$i +'1';
	}
?>
<h2 style="font-family:'Comic Sans MS', cursive; text-align:center; color:#333;" >Latest Events</h2><br />
<h2 style="font-family:'Comic Sans MS', cursive; text-align:center; color:#333; text-transform:capitalize;"  ><?php echo $albumname ;?></h2><br />

<div id="subim1" class="subimrow"><a href="image.php?image=<?php echo $linkarray[1]?>"><img class="albumimage" src="<?php echo $thumb[1];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim2" class="subimrow"><a href="image.php?image=<?php echo $linkarray[2]?>"><img class="albumimage"src="<?php echo $thumb[2];?>"width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; "  /></a></div>
<div id="subim3" class="subimrow"><a href="image.php?image=<?php echo $linkarray[3];?>"><img class="albumimage"src="<?php echo $thumb[3];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim4" class="subimrow"><a href="image.php?image=<?php echo $linkarray[4];?>"><img class="albumimage"src="<?php echo $thumb[4];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim5" class="subimrow"><a href="image.php?image=<?php echo $linkarray[5];?>"><img class="albumimage"src="<?php echo $thumb[5];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim6" class="subimrow"><a href="image.php?image=<?php echo $linkarray[6];?>"><img class="albumimage"src="<?php echo $thumb[6];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim7" class="subimrow"><a href="image.php?image=<?php echo $linkarray[7];?>"><img class="albumimage"src="<?php echo $thumb[7];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim8" class="subimrow"><a href="image.php?image=<?php echo $linkarray[8];?>"><img class="albumimage"src="<?php echo $thumb[8];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim9" class="subimrow"><a href="image.php?image=<?php echo $linkarray[9];?>"><img class="albumimage"src="<?php echo $thumb[9];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim10" class="subimrow"><a href="image.php?image=<?php echo $linkarray[10];?>"><img class="albumimage"src="<?php echo $thumb[10];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim11" class="subimrow"><a href="image.php?image=<?php echo $linkarray[11];?>"><img class="albumimage"src="<?php echo $thumb[11];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="subim12" class="subimrow"><a href="image.php?image=<?php echo $linkarray[12];?>"><img class="albumimage"src="<?php echo $thumb[12];?>" width="333px" height="230px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>


<p style="position:absolute; top:650px; margin-left:250px; text-align:center;">For full images this event visit our facebook <a href="#">Album</a> or our <a href="#" >Blog</a></p>


</div>

<div id="page" class="page">
<?php
if ($cur_page < $num_pages)
{
	$nextpage = $cur_page +'1';
	$nextlink= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$nextpage.'" ><img src="images/teampics/next.png" style="position:absolute; right:0px; top:0px;" /></a>';
	echo $nextlink;
}
?>
<?php
if ($cur_page > '1')
{
	$prepage = $cur_page - '1';
	$prelink= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$prepage.'" ><img src="images/teampics/prev.png" style="position:absolute; left:0px; top:0px;" /></a>';
	echo $prelink;
}
?>


</div>
<div style="width:1000px; position:absolute;" id="bottom" class="bottom">
<img src="images/teampics/954392_422297051209098_1416116450_n.png" style="position:absolute; left:0px; width:100%; top:20px;" />
</div>
</div>
</body>
</html>