<?php
//including the database connection file
require_once("crud_functions.php");
$crud = new Crud();
//getting id of the data from url
$id = $crud->escape_string($_GET['id']);
//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->delete($id, 'users');
if ($result) {
//redirecting to the display page (index.php in our case)
header("Location:oop_index.php");
}
?>