<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="Post" action="<?php echo site_url('Welcome/add_product')?>">

	Product Name:
	<input type="text" name="name" >
	Product Price:
	<input type="text" name="price">
	Product description:
	<input type="text" name="desc">

	<input type="file" name="img">
	
	<input type="submit" name="submit">

</form>
</body>
</html>