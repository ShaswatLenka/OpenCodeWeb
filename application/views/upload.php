<!DOCTYPE html>

<html>

<head>

<title>Open News Image Uploading</title>

</head>

<body>

<?php echo $error; ?>

<h3>Upload Image</h3>

<?php echo form_open_multipart('upload/upload_file'); ?>

<input type="file" name="userfile" size="200" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>

</html>