<?php

require 'config.php';
require 'addfunction.php';

	if(isset($_POST['submit'])) {
		$album = $_POST['nameimage'];
		$description = $_POST['description'];
		$fblink = $_POST['fblink'];
		$gpluslink = $_POST['gpluslink'];
		$bloglink = $_POST['bloglink'];
		$twit = $_POST['twitterlink'];
		$category = $_POST['category'];
		$dbc = mysqli_connect('localhost','aaryan','nonepass','arturo');
		
		$querynew= "SELECT * FROM album WHERE name='".$album."'";
 $resultdata=mysqli_query($dbc,$querynew) OR die('errorinpage');                    // for cheching previous album
	$totalnoresults=mysqli_num_rows($resultdata);


		if($totalnoresults == '0') {
		
		$query = "INSERT INTO album(id,name,adddate,description,facebook_link,gplus_link,blog_link,twitter_link,category)".
		"VALUES(0,'$album',now(),'$description','$fblink','$gpluslink','$bloglink','$twit','$category')";
		
		$result=mysqli_query($dbc,$query) OR die('query error');
		
		mysqli_close($dbc);}
		
	foreach ($_FILES["fupload"]["error"] as $key => $error) {
	if(preg_match('/[.](jpg)|(gif)|(png)$/',$_FILES['fupload']['name'][$key])) {
	
	$filename = $_FILES['fupload']['name'][$key];
	$source = $_FILES['fupload']['tmp_name'][$key];
	$target = $path_to_image_directory . $filename;

	if (move_uploaded_file($source,$target)) {
	
	createThumbnail($filename,$album);
	} else {
		die('roororo');
	}
	}}


	}
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$max_file_size = 5242880;
?>
<fieldset style="width:1000"><legend>Image upload form </legend>



<table><tr><td>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<label for="image">Add image(s)</label></td><td>
<input type="file" id="image" name="fupload[]" multiple="multiple"  />
<br /></td></tr>
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
<tr><td>
<label for="nameimage">Album</label></td><td>
<input type="text" id="nameimage" class="nameimage" name="nameimage" /><br /></td></tr>
<tr><td><label for="description">Album Description</label></td><td>
<textarea name="description" rows="5" cols="25"  class="description" id="description"></textarea></td></tr>
<tr><td><label for="fblink">Facebook Link</label></td><td>
<textarea id="fblink" class="fblink" name="fblink" rows="5" cols="25" ></textarea><br /></td></tr>
<tr><td><label for="gpluslink">G+ Link</label></td><td>
<textarea name="gpluslink" rows="5" cols="25"></textarea></td></tr>
<tr><td><label for="bloglink">Blog Link</label></td><td>
<textarea name="bloglink" rows="5" cols="25"></textarea></td></tr>
<tr><td><label for="twitterlink">Twitter Link</label></td><td>
<textarea name="twitterlink" rows="5" cols="25"></textarea></td></tr>
<tr><td><label for="category">Category</label></td><td>
<textarea name="category"></textarea></td></tr>
<tr><td>
<input type="submit" name="submit" id="submit" value="go" /></td></tr>
</form>
</table>
</fieldset> 	


</body>
</html>