<?php

function createThumbnail($filename,$album)  {
	require 'config.php';
	
	if(preg_match('/[.](jpg)$/',$filename)) {
		$im = imagecreatefromjpeg($path_to_image_directory . $filename);	
	} else if(preg_match('/[.](png)$/',$filename)) {
	$im = imagecreatefrompng($path_to_image_directory . $filename);		
	}else if(preg_match('/[.](gif)$/',$filename)) {
	$im = imagecreatefromgif($path_to_image_directory . $filename);		
	}
	
	$ox = imagesx($im);
	$oy = imagesy($im);
	
	
	$nx = $final_width_of_image;
	$ny = $final_height_of_image;
	
	$nxret = $final_width_of_imageret;
	$nyret = $final_height_of_imageret;
	
	$nm = imagecreatetruecolor($nx ,$ny);
	$nmret = imagecreatetruecolor($nxret,$nyret);
	
	
	imagecopyresized($nm, $im,0,0,0,0,$nx ,$ny ,$ox ,$oy);
	
	if(!file_exists($path_to_thumbs_directory)) {
		if(mkdir($path_to_thumbs_directory)) {
			imagejpeg($nm ,$path_to_thumbs_directory.$filename);
			
			$tn = 'done 1';
			
			
			echo $tn;
		}
		else {
			die('error in creating directory');
		}
	}
	else {
		imagejpeg($nm ,$path_to_thumbs_directory . $filename);
			
			$tn = 'done 1';
			
		
			echo $tn;
	}
	
	
	imagecopyresized($nmret, $im,0,0,0,0,$nxret ,$nyret ,$ox ,$oy);
	
	if(!file_exists($path_to_thumbret_directory)) {
		if(mkdir($path_to_thumbret_directory)) {
			imagejpeg($nmret ,$path_to_thumbret_directory.$filename);
			
			$tn = 'done 2';
			echo $tn;
		}
		else {
			die('error in creating directory');
		}
	}
	else {
		imagejpeg($nmret ,$path_to_thumbret_directory . $filename);
			
			
			$tn = 'done 2';
			
			echo $tn;
	}
	
	
	$finalimage = 'images/fullsized/'.$filename;
	$finalthumb = 'images/thumbs/'.$filename;
	$finalthumbret = 'images/thumbret/'.$filename;
	
	$dbc = mysqli_connect('localhost','aaryan','nonepass','arturo');
	$queryall = "INSERT INTO images(id,album,thumb_link,image_link,thumbret)".
	"VALUES (0,'$album','$finalthumb','$finalimage','$finalthumbret');";	
	
	$resultall=mysqli_query($dbc,$queryall) OR die('query in image uplaoding error');
	mysqli_close($dbc);
	
}


?>