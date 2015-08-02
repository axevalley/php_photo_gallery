<?php
require_once('includes/header.php');

if (isset ($_GET['filename'])) {
	$filepath = 'photos_full/' . $_GET['filename'];
	if (file_exists($filepath)) {
		?>
		<a href='<?php echo $filepath; ?>' >
			<div class='image_div' style='background-image: url("<?php echo $filepath; ?>");'></div>
		</a>
		<?php
	}
} else {
	header('Location:index.php');
}
?>