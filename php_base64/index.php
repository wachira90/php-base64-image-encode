<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>image base64 encode</title>
</head>

<body>
	<?php
	$path = 'myfolder/img1.jpg';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	echo $base64;
	?>
	<img src="<?php echo $base64; ?>" />

</body>

</html>