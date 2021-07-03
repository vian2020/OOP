<?php
// including the database connection file
require_once("crud_functions.php");
$crud = new Crud();
//getting id from url
$id = $crud->escape_string($_GET['id']);
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM category WHERE id=$id");
foreach ($result as $res) {
$category_id = $res['category_id'];
$category = $res['category'];
}
?>
<html>
<head>
<title>Edit Product</title>
</head>
<body>
<a href="oop_index.php">Home</a>&nbsp
<a href="category.php">Back</a>
<br/><br/>
<form name="form1" method="post" action="editc_function.php">
<table border="0">
<tr>
<td>Category Id</td>
<td><input type="text" name="category_id" value="<?php echo $category_id;?>"></td>
</tr>
<tr>
<td>Category</td>
<td><input type="text" name="category" value="<?php echo $category;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>