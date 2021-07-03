<?php
// including the database connection file
require_once("crud_functions.php");
require_once("validation.php");
$crud = new Crud();
$validation = new Validation();
if(isset($_POST['update']))
{
$id = $crud->escape_string($_POST['id']);
$supplier_id = $crud->escape_string($_POST['supplier_id']);
$supplier_name = $crud->escape_string($_POST['supplier_name']);
$Address = $crud->escape_string($_POST['Address']);
$phone = $crud->escape_string($_POST['phone']);
$msg = $validation->check_empty($_POST, array('supplier_id', 'supplier_name', 'Address','phone'));
// $check_age = $validation->is_age_valid($_POST['age']);
// $check_email = $validation->is_email_valid($_POST['email']);
// checking empty fields
if($msg) {
echo $msg;
//link to the previous page
echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
// } elseif (!$check_age) {
// echo 'Please provide proper age.';
// } elseif (!$check_email) {
// echo 'Please provide proper email.';
} else {
//updating the table
$result = $crud->execute("UPDATE supplier SET supplier_id='$supplier_id',supplier_name='$supplier_name',Address='$Address',phone='$phone' WHERE id=$id");
//redirectig to the display page. In our case, it is index.php
header("Location: supplier.php");
}
}
?> 