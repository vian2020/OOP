<?php
// including the database connection file
require_once("crud_functions.php");
require_once("validation.php");
$crud = new Crud();
$validation = new Validation();
if(isset($_POST['update']))
{
$id = $crud->escape_string($_POST['id']);
$product_id = $crud->escape_string($_POST['product_id']);
$barcode = $crud->escape_string($_POST['barcode']);
$snumber = $crud->escape_string($_POST['snumber']);
$model = $crud->escape_string($_POST['model']);
$price = $crud->escape_string($_POST['price']);
$msg = $validation->check_empty($_POST, array('product_id', 'barcode', 'snumber','model','price'));
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
$result = $crud->execute("UPDATE product_information SET product_id='$product_id',barcode='$barcode',snumber='$snumber',model='$model',price='$price' WHERE id=$id");
//redirectig to the display page. In our case, it is index.php
header("Location: product_information.php");
}
}
?> 