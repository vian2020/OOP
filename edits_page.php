<?php
// including the database connection file
require_once("crud_functions.php");
$crud = new Crud();
//getting id from url
$id = $crud->escape_string($_GET['id']);
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM supplier WHERE id=$id");
foreach ($result as $res) {
$supplier_id = $res['supplier_id'];
$supplier_name = $res['supplier_name'];
$Address = $res['Address'];
$phone = $res['phone'];
}
?>
<html>
<head>
<title>Edit Supplier</title>
</head>
<body>
<a href="oop_index.php">Home</a>&nbsp
<a href="supplier.php">Back</a>
<br/><br/>
<form name="form1" method="post" action="edits_function.php">
<table border="0">
<tr>
<td>Supplier Id</td>
<td><input type="text" name="supplier_id" value="<?php echo $supplier_id;?>"></td>
</tr>
<tr>
<td>Supplier Name</td>
<td><input type="text" name="supplier_name" value="<?php echo $supplier_name;?>"></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="Address" value="<?php echo $Address;?>"></td>
</tr>
<tr>
<td>Phone</td>
<td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>