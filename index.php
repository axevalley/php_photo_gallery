<?php require_once('includes/header.php');?>

<?php
	echo "<div id='header'>";
	echo "<h1>Luke Shiner Photography</h1>";
	//echo "<a href='image_upload.php'>Upload New Image</a> <a href='edit_images.php'>Edit Images</a>";
	echo "</div>";
	echo "<div id='gallery'>";
	
	$images = scandir('photos_full/');
	$images_thumb = scandir('photos_thumb/');
	//print_r($images_thumb);
	//echo "<br />";
	//echo "<br />";
	//echo "<br />";
	//print_r($images);
	
	$i=0;

	foreach ($images_thumb as $thumbnail) {
		$ext = pathinfo('photos_thumb/' . $thumbnail, PATHINFO_EXTENSION);
		if ($ext == 'jpg'){
			if (in_array($thumbnail, $images)){
				//echo $thumbnail . '<br />';
				echo "<div class='gallery_image'>";
				echo "<a href='gallery_image.php?filename={$thumbnail}'>";
				echo '<img src="photos_thumb/' . $thumbnail . '" height=200 />';
				echo "</a>";
				echo "</div>";
			}
		}
		$i++;
	}
	echo "</div>";
?>

<?php include 'includes/footer.php';?>
