<!DOCTYPE html>
<html>
	<head>
		<title>File Upload</title>
	</head>
	<body>

	<form action="upload.php" method="post" enctype="multipart/form-data">
	    Select image to upload:
	    <input type="file" name="file" id="fileToUpload">
	    <input type="submit" value="Upload Image" name="submit">
	</form>

	</body>
</html>