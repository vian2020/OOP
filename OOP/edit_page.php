<?php
// including the database connection file
require_once("crud_functions.php");
$crud = new Crud();
//getting id from url
$id = $crud->escape_string($_GET['id']);
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM users WHERE id=$id");
foreach ($result as $res) {
$name = $res['name'];
$age = $res['age'];
$email = $res['email'];
}
?>
<html>
<head>
<title>Edit Data</title>
</head>
<body>
<a href="oop_index.php">Home</a>
<br/><br/>
<form name="form1" method="post" action="edit_function.php">
<table border="0">
<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?php echo $name;?>"></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age" value="<?php echo $age;?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?php echo $email;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>