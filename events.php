
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="scripts/mainstyle.css" />
<link rel="stylesheet" type="text/css" href="scripts/events.css" />

</head>

<body>



<div id="bodysub" class="bodysub">
<div id="topheader" class="topheader">
<a href="https://www.facebook.com/iitrprphotographyclub" target="_blank"><img src="images/teampics/fbpng.png" style="position:absolute; height:48px; top:1px; left:50%; margin-left:-500px;" /></a>
<a href="https://plus.google.com/u/0/107694724552032319978/posts" target="_blank"><img src="images/teampics/gpluspng.png" style="position:absolute; height:48px; top:1px; left:50%; margin-left:-450px;" /></a>
<a href="https://twitter.com/ArturoIITrpr" target="_blank"><img src="images/teampics/twitterpng.png" style="position:absolute; height:48px; top:1px; left:50%; margin-left:-400px;" /></a>
<a href="tempart.php"><img src="images/teampics/1368938_422271917878278_510966392_n.jpg" height="50px" width="150px" style=" position:absolute; left:50%; margin-left:-75px;" /></a>

<a href="index.php"><img src="images/teampics/1368938_422271917878278_510966392_n.jpg" height="50px" width="150px" style=" position:absolute; left:50%; margin-left:-75px;" /></a>
 

</div>
<nav >
<ul>
<li id="list1" class="list"><a href="tempart.php">Home</a></li>
<li id="list2" class="list"><a href="#">Official Pages</a>
        
<li id="list3" class="list"><a href="events.php">Events</a></li>
<li id="list4" class="list"><a href="#">Competitions</a></li>
<li id="list5" class="list"><a href="aboutus.php">About Us</a></li>
<li id="list6" class="list6"><a href="contactus.php">Contact Us</a></li>

</ul>

</nav>
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
<?php  
	$i=1;
	$linkarray= array();
	$idimage=array();
	$dbc= mysqli_connect('localhost','aaryan','nonepass','arturo') OR die("con error");
    $queryimage="SELECT * FROM images WHERE album='".$albumname."'";
	
	$imageresult=mysqli_query($dbc,$queryimage) OR die("erron in querying");
	
	while($row= mysqli_fetch_array($imageresult)) {
		$linkarray[$i]=$row['image_link'];
		$thumbret[$i]=$row['thumbret'];
		$i=$i +'1';
	}
?>


<div id="album _name" style="position:absolute; top:150px; width:1000px; text-align:center;  height:50px; ">
    <h2 style="font-family:'Comic Sans MS', cursive; color:#333;"  ><?php echo $albumname ;?> </h2></div>
<div id="events" class="events">
<div id="im1" class="eventim"><a href="image.php?image=<?php echo $linkarray[1]?>"><img  class="albumimage" src="<?php echo $thumbret[1];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im2" class="eventim"><a href="image.php?image=<?php echo $linkarray[2]?>"><img  class="albumimage" src="<?php echo $thumbret[2];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im3" class="eventim"><a href="image.php?image=<?php echo $linkarray[3]?>"><img  class="albumimage" src="<?php echo $thumbret[3];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im4" class="eventim"><a href="image.php?image=<?php echo $linkarray[4]?>"><img  class="albumimage" src="<?php echo $thumbret[4];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im5" class="eventim"><a href="image.php?image=<?php echo $linkarray[5]?>"><img  class="albumimage" src="<?php echo $thumbret[5];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im6" class="eventim"><a href="image.php?image=<?php echo $linkarray[6]?>"><img  class="albumimage" src="<?php echo $thumbret[6];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im7" class="eventim"><a href="image.php?image=<?php echo $linkarray[7]?>"><img  class="albumimage" src="<?php echo $thumbret[7];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im8" class="eventim"><a href="image.php?image=<?php echo $linkarray[8]?>"><img  class="albumimage" src="<?php echo $thumbret[8];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im9" class="eventim"><a href="image.php?image=<?php echo $linkarray[9]?>"><img  class="albumimage" src="<?php echo $thumbret[9];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im10" class="eventim"><a href="image.php?image=<?php echo $linkarray[10]?>"><img  class="albumimage" src="<?php echo $thumbret[10];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im11" class="eventim"><a href="image.php?image=<?php echo $linkarray[11]?>"><img  class="albumimage" src="<?php echo $thumbret[11];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>
<div id="im12" class="eventim"><a href="image.php?image=<?php echo $linkarray[12]?>"><img  class="albumimage"src="<?php echo $thumbret[12];?>" width="500px" height="350px" style="position:absolute; top:0px; left:0px; z-index:1; " /></a></div>


</div>
<div id="pagination" class="pagination">
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
<div id="bot" class="bot"><img src="images/teampics/954392_422297051209098_1416116450_n.jpg" style=" position:absolute;
top:20px; left:0px; width:100%;" /></div>
</div>
</body>
</html>