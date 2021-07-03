<?php
// including the database connection file
require_once("crud_functions.php");
$crud = new Crud();
//getting id from url
$id = $crud->escape_string($_GET['id']);
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM product_information WHERE id=$id");
foreach ($result as $res) {
$product_id = $res['product_id'];
$barcode = $res['barcode'];
$snumber = $res['snumber'];
$model = $res['model'];
$price = $res['price'];
}
?>
<html>
<head>
<title>Edit Product</title>
</head>
<body>
<a href="oop_index.php">Home</a>&nbsp
<a href="product_information.php">Back</a>
<br/><br/>
<form name="form1" method="post" action="editp_function.php">
<table border="0">
<tr>
<td>Product Id</td>
<td><input type="text" name="product_id" value="<?php echo $product_id;?>"></td>
</tr>
<tr>
<td>Barcode</td>
<td><input type="text" name="barcode" value="<?php echo $barcode;?>"></td>
</tr>
<tr>
<td>SNumber</td>
<td><input type="text" name="snumber" value="<?php echo $snumber;?>"></td>
</tr>
<tr>
<td>Model</td>
<td><input type="text" name="model" value="<?php echo $model;?>"></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name="price" value="<?php echo $price;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>