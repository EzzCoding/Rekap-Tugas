<?php
	$folder = 'file/';
	$folderfile = $folder .$_FILES['file']['name'];

	if (move_uploaded_file($_FILES['file']['tmp_name'], $folderfile)) {
		echo "File telah diupload";
		header('location: index.php');
	} else {

		echo "File gagal diupload";
	}

	// unlink('file/unnamed3.png')
?>